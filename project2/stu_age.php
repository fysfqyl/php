<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $stu_by = 1996;
    $stu_bm = 8;
    $stu_bd = 19;
    $cur_y = date('Y');
    $cur_m = date('n');
    $cur_d = date('j');

    $age = $cur_y - $stu_by;
    if($cur_m < $stu_bm || $cur_m == $stu_bm && $cur_d < $stu_bf) {
        $age--;
    } 
    ?>

    
</body>
</html>