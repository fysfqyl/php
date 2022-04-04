<?php
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
    require './photo.html';

    if(isset($_FILES['pic'])) {
        $pic = $_FILES['pic'];
        if($pic['error'] > 0) {
            $error = '上传失败：';
            switch($pic ['error']) {
                case 1:$error .= '文件大小超过了服务器设置的限制！';break;
                case 2:$error .= '文件大小超过了表单设置的大小！';break;
                case 3:$error .= '文件大小超过了服务器设置的限制！';break;
                case 4:$error .= '文件大小超过了服务器设置的限制！';break;
                case 5:$error .= '文件大小超过了服务器设置的限制！';break;
                case 6:$error .= '文件大小超过了服务器设置的限制！';break;
                case 7:$error .= '文件大小超过了服务器设置的限制！';break;
                default:$error .='未知错误';break;
            }
            exit($error);
        }
    }
    if($pic['type']!=='image/jpeg') {
        exit('图像类型不符合要求，只支持jpg或者png类型的图片');
    }
    $user_id=1;
    $save_path="./uploads/$user_id.png";
    if(!move_uploaded_file($pic['tmp_name'],$save_path)) {
        exit('上传文件保存失败');
    }
?>