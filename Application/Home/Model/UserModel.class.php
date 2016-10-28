<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model
{
    public function getUserList()
    {
    	$list = $this->select();
    	return $list;
    }

    public function getUser()
    {
    	$uid = I('get.uid');
    	$user = $this->where("id={$uid}")->find();
    	return $user;
    }
}