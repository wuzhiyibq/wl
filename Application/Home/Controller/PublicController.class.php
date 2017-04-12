<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller
{
    public function login()
    {
        if ($_SESSION['uid']) {
        	$this->redirect('Index/index');
        }
        if (IS_POST) {
            $username = I('post.username');
            $password = I('post.password');
            if (!$username) {
                $this->error("用户名不能为空");
            }
            if (!$password) {
                $this->error("密码不能为空");
            }
            $user_info = D('User')->where("username='{$username}'")->find();
            if (!$user_info) {
                $this->error("用户不存在");
            }
            if ($user_info['pwdmd5'] != md5($password)) {
                $this->error("密码错误");
            }
            $this->display('Public/index');
        }
        $this->display();
    }

    public function logout()
    {
        if (session_destroy()) {
            echo "<javascript>parent.window.location.href='/login';</javascript>";
        }
    }

    public function index()
    {
        $this->display();
    }
}
