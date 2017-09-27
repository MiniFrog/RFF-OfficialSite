<?php
namespace App\Http\Controllers;

use Ixudra\Curl\Facades\Curl;
use App\Http\Requests\Request;
use App\QQUser;
use App\User;
use Exceptions\AuthorizeException;

class Authorize extends Controller
{
    //
    const APP_ID = '2333';

    const APP_KEY = '2333';

    const REDIRECT_URL = '';

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login()
    {
        $state = md5(time(), true);
        session('state', $state);
        $view = Curl::to('https://graph.qq.com/oauth2.0/authorize')->withData(array(
            'response_type' => 'code',
            'client_id' => self::APP_ID,
            'redirect_uri' => self::REDIRECT_URL,
            'state' => $state,
            'scope' => 'get_user_info',
            'g_ut' => 1
        ))->get();
        return $view;
    }

    public function authorizeSuccess()
    {
        $authorizationCode = $this->getAuthorizationCode();
        $tokens = $this->getTokens($authorizationCode);
        $open_id = $this->getOpenId($tokens['access_token']);
        $user_info = $this->getUserInfoFromQQServer($open_id, $tokens['access_token']);
        $user_info_obj = $this->makeUserInfoObj($user_info);
        $qqUser = QQUser::firstOrNew(array(
            'open_id' => $open_id
        ));
        $qqUser->access_token = $tokens['access_token'];
        $qqUser->refresh_token = $tokens['refresh_token'];
        $qqUser->user_info = serialize($user_info_obj);
        if (! $qqUser->user_id) {
            User::create()->qqUser()->save($qqUser);
        } else {
            $qqUser->save();
        }
    }

    protected function getAuthorizationCode()
    {
        $authorizationCode = $this->request->input('code');
        if (strlen($authorizationCode) != 32) {
            throw new AuthorizeException($authorizationCode);
        }
        $state = $this->request->input('state');
        if ($state != session('state')) {
            throw new AuthorizeException('STATE_NOT_MATCH');
        }
    }

    protected function getTokens($authorizationCode)
    {
        $dataString = Curl::to('https://graph.qq.com/oauth2.0/token')->withData(array(
            'grant_type' => 'authorization_code',
            'client_id' => self::APP_ID,
            'client_secret' => self::APP_KEY,
            'code' => $authorizationCode,
            'redirect_uri' => self::REDIRECT_URL
        ))->get();
        if ($this->request->input('code', null) != null) {
            throw new AuthorizeException($this->request->input('code'));
        }
        $tokens['access_token'] = substr($dataString, 13, 32);
        $tokens['refresh_token'] = substr($dataString, - 32);
        return $tokens;
    }

    protected function getOpenId($accessToken)
    {
        $jsonData = Curl::to('https://graph.qq.com/oauth2.0/me')->withData(array(
            'access_token' => $accessToken
        ))->get();
        $data = json_decode($jsonData);
        if (array_get($data, 'code', null) != null) {
            throw new AuthorizeException($data['code']);
        }
        return $data['openid'];
    }

    protected function getUserInfoFromQQServer($openId, $accessToken)
    {
        $jsonData = Curl::to('https://graph.qq.com/user/get_user_info')->withData(array(
            'access_token' => $accessToken,
            'openid' => $openId,
            'oauth_consumer_key' => self::APP_ID
        ))->get();
        $data = json_decode($jsonData);
        if ($data['code'] != 0) {
            throw new AuthorizeException($data['code']);
        }
        return $data;
    }

    protected function makeUserInfoObj($userInfo)
    {
        $userInfoObj = new \stdClass();
        $userInfoObj->figureurl = $userInfo['figureurl_qq_1'];
        $userInfoObj->nick_name = $userInfo['nickname'];
    }

    public function test()
    {
        $user_id = QQUser::firstOrNew(array(
            'open_id' => 13
        ));
        dd($user_id);
    }
}
