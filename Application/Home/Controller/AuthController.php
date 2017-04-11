<?php
namespace Home\Controller;
use Think\Controller;

class AuthController extends Controller
{
    public function __initialize()
    {
        if (!$_SESSION['userid']) {
            $this->redirect('Public/login');
        }
    }


}
