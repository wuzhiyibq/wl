<?php
namespace Home\Model;
use Think\Model;

class OrderModel extends Model
{
    public function getOrderList($conditions)
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

    public function createOrder()
    {
        if (IS_POST) {

        } else {
            $this->display();
        }
    }

    //删除单个用户  以后可能扩展成批量删除
    public function deleteCustomer($customer_id)
    {
        return $this->delete($customer_id);
    }

    public function getCustomer()
    {
    	$uid = I('get.uid');
    	$user = $this->where("id={$uid}")->find();
    	return $user;
    }
}
