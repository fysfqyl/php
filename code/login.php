<?php
    header('Content-Type:text/html;charset=utf-8');
    $user_data = array(
        1 => array('username' => 'root','password' => '123456'),
        2 => array('username' => 'root1','password' => '123456')
    );

    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $code = isset($_POST['code']) ? trim($_POST['code']) : '';
        session_start();
        if(empty($_SESSION['code'])) {
            exit('验证码已过期，请重新刷新');
        }
        $true_code = $_SESSION['code'];
        unset($_SESSION['code']);

        if(strtolower($code) !== strtolower($true_code)) {
            exit('验证码输入错误，请重新输入');
        }

        foreach($user_data as $key => $value) {
            if($value['username'] == $username && $value['password'] == $password){
            exit('登录成功');
        }else {
            exit('用户名或者密码输入错误，请重新输入');
        }
    }
}
?>