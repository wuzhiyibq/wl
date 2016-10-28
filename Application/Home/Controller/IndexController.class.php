<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller
{
    public function index()
    {
        if (!$_SESSION['uid'] && 0) {
        	$this->error('Public/login');
        }
        $this->display('Public/index');

    }
}