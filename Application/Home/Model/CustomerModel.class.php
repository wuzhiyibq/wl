<?php
namespace Home\Model;
use Think\Model;

class CustomerModel extends Model
{
    public function getCustomerList($conditions)
    {
        $w = " 1=1";
        if ($conditions['real_name']) {
            $w .= " and real_name like '%{$conditions['real_name']}%'";
        }
        if ($conditions['sdate']) {
            $stamp = strtotime($conditions['sdate']);
            $w .= " and reg_time>={$stamp}";
        }
        if ($conditions['edate']) {
            $stamp = strtotime($conditions['edate']);
            $w .= " and reg_time<={$stamp}";
        }

    	$list = $this->where($w)->select();
    	return $list;
    }

    public function getCustomer()
    {
    	$uid = I('get.uid');
    	$user = $this->where("id={$uid}")->find();
    	return $user;
    }
}
