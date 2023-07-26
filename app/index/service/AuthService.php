<?php
/**
 *
 *  
 */

declare (strict_types=1);


namespace app\index\service;


use app\common\model\User;
use app\index\exception\IndexServiceException;

class AuthService extends IndexBaseService
{

    protected $model;
    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * 用户登录
     * @param $username
     * @param $password
     * @return User|array|\think\Model
     * @throws IndexServiceException
     */
    public  function login($username,$password)
    {

        $user     =$this->model->where('username' ,'=', $username)->findOrEmpty();
		// dump($data);exit('data');
        if ($user->isEmpty()) {
            throw new IndexServiceException('用户不存在');
        }

		// password_verify用于验证给定的明文密码是否与已经使用函数进行处理后的密码匹配
        if (!password_verify($password, base64_decode($user->password))) {
            throw new IndexServiceException('密码错误');
        }

        if ((int)$user->status !== 1) {
            throw new IndexServiceException('用户被冻结');
        }
        return $user;
    }

}