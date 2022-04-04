<?php
    $blood = array('未知','A','B','O','AB','其他');
    $hobby = array('跑步','游泳','唱歌','登山','旅游','看电影','读书');
    require 'userinfo.html';

    if(!empty($_POST)) {
        echo '姓名：'.$_POST['name'];
        echo '性别：'.$_POST['gender'];
        echo '血型：'.$_POST['blood'];
        echo '爱好：'.implode('、',$_POST['hobby']);
        echo ''
    }
?>