<?php
header('Content-Type:image/gif');
    $img_width = 200;
    $img_height = 100;
    $img = imagecreatetruecolor($img_width,$img_height);
    $bg_color = imagecolorallocate($img,255,0,0);
    imagefill($img,0,0,$bg_color);
    $count = 4;
    $charset = 'ABCDEFG12345678';
    $length = strlen($charset)-1;
    $code = '';
    for($i = 0;$i < $count;$i++) {
        $code .= $charset[mt_rand(0,$length)];
    }
    
    session_start();
    $_SESSION['code'] = $code;
    // echo $code;
    $font_size = 30;
    $font_style = './ALGER.TTF';

    for($i=0;$i<$count;$i++) {
        $font_color = imagecolorallocate($img,mt_rand(0,100),mt_rand(0,150),mt_rand(0,200));
        imagettftext(
            $img,
            $font_size,
            rand(0,20) - mt_rand(0,25),
            $font_size * $i + 20,mt_rand($img_height/2,$img_height),
            $font_color,
            $font_style,
            $code[$i]
        );
    }
    imagegif($img);
?>