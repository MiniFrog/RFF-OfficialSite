<?php
namespace App\Traits;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\DB;

/*
 * 这个需要在引入的类中加入一个属性 \App\Http\Request $request
 */
trait AuthOperationWithRequest
{

    protected function getUserId($default = null)
    {
        if ($this->request->cookies->has('user_id')) {
            return $this->request->cookies->user_id;
        }
        return $default;
    }

    protected function getUserToken($default = null)
    {
        if ($this->request->cookies->has('user_token')) {
            return $this->request->cookies->user_token;
        }
        return $default;
    }

    /**
     * 返回用户属性，用于将来的扩展，目前只返回qq
     *
     * @return string
     */
    protected function getUserRegisterType()
    {
        if ($this->request->cookies->has('user_type')) {
            return $this->request->cookies->user_type;
        }
        return null;
    }

    /**
     * 检查用户身份，验证失败会自动清空cookie
     *
     * @return bool
     */
    protected function verifyIdentityWithCookie()
    {
        if(! $this->getUserId() && ! $this->getUserToken()) {
            return false;
        }
        $user = DB::table("qq_user")->where('user_id', '=', $this->getUserId())
            ->get([
            'open_id'
        ]);
        if ($user) {
            if (hash('sha256', $user->open_id) == $this->getUserToken()) {
                return true;
            }
        }
        $this->destroyCookie();
        return false;
    }

    /**
     * 清空cookie
     *
     * @return void
     */
    protected function destroyCookie()
    {
        $this->request->cookies = '';
    }
}

