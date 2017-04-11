<?php
namespace Home\Controller;
use Think\Controller;

class CustomerController extends Controller
{
    public function __initialize()
    {

    }

    public function customerList()
    {
        $conditions = I('get.');
    	$this->customerList = D('Customer')->getCustomerList($conditions);
        $this->display();
    }


    public function editUser()
    {
    	$this->user = D('User')->getUser();
        $this->display();
    }
}
