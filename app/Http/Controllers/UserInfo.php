<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QQUser;
use App\Traits\AuthOperationWithRequest;

class UserInfo extends Controller
{
    use AuthOperationWithRequest;
    //
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function common()
    {
        $info = $this->getUserInfo($this->getUserId());
        if (! $info) {
            return response()->json(array(
                'state' => false
            ));
        }
        return response()->json($this->makeCommonInfoMessageBag($info));
    }

    public function getAvantar()
    {
        $user_id = $this->request->input('userId');
        $info = $this->getUserInfo($user_id);
        if (! $info) {
            return response()->json(array(
                'avantarUrl' => ''
            ));
        }
        return response()->json(array(
            'avantarUrl' => $info->figureurl
        ));
    }

    protected function getUserInfo($userId, $default = null)
    {
        $user = QQUser::find($userId);
        if (! $user) {
            return $default;
        }
        return unserialize($user->user_info);
    }

    protected function makeCommonInfoMessageBag($commonInfo)
    {
        $messageBag['state'] = 'true';
        $messageBag['nickname'] = $commonInfo->nick_name;
        $messageBag['avantarUrl'] = $commonInfo->figureurl;
        return $messageBag;
    }
}
