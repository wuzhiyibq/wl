<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{
    public function __initialize()
    {

    }

    public function userlist()
    {
        $conditions = I('get');
    	$this->userList = D('User')->getUserList($conditions);
        $this->display();
    }


    public function editUser()
    {
    	$this->user = D('User')->getUser();
        $this->display();
    }
}
