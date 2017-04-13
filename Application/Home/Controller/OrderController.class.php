<?php
namespace Home\Controller;
use Think\Controller;
use \Home\Controller\PublicController;

class OrderController extends Controller
{
    public function __initialize()
    {

    }

    //获取订单列表
    public function orderList()
    {
        $conditions = I('get.');
    	//$this->customerList = D('Customer')->getCustomerList($conditions);
        $this->display();
    }

    public function createOrder()
    {
        if (IS_POST) {

        } else {
            $this->order_id = Public::generateOrderId();
            $this->display();
        }
    }

    public function editCustomer()
    {
        $customer_id = I('get.customer_id');
        $customer_info = D('Customer')->find($customer_id);
        $provinces = M('Provinces')->select();
        //echo "<pre>";print_r($provinces);exit;

        $this->customer_info = $customer_info;
        $this->provinces = $provinces;
        $this->display();
    }

    public function saveCustomer()
    {
        $postData = I('post.');
        //echo "<pre>";print_r($postData);exit;
        $customer = D('Customer');
        $customer->find($postData['customer_id']);
        $customer->real_name = $postData['real_name'];
        $customer->sex = $postData['sex'];
        $customer->mobile = $postData['mobile'];
        $customer->provinceid = $postData['provinceid'];
        $customer->cityid = $postData['cityid'];
        $customer->areaid = $postData['areaid'];
        $customer->address = $postData['address'];
        $customer->email = $postData['email'];
        $customer->remark = $postData['remark'];
        $customer->save();
        $this->redirect('Customer/customerList');
    }

    //删除客户
    public function deleteCustomer()
    {
        $customer_id = I('post.customer_id');
    	$rtn = D('Customer')->deleteCustomer($customer_id);
        echo json_encode(['result'=>$rtn]);
    }

    //根据省获取市
    public function getCitiesByProvince()
    {
        $province_id = I('get.province_id');
        $cities = M('Cities')->where("provinceid={$province_id}")->select();
        echo json_encode($cities);
    }

    public function getAreasByCity()
    {
        $city_id = I('get.city_id');
        $areas = M('areas')->where("cityid={$city_id}")->select();
        echo json_encode($areas);
    }
}
