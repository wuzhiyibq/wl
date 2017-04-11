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
    	$this->userList = D('User')->getUserList();
        $this->display();
    }


    public function editUser()
    {
    	$this->user = D('User')->getUser();
        $this->display();
    }
}
