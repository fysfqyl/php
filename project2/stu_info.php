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
    $name = '王六';
    $birth = '1996-08-07';
    $subject = 'PHP';
    $snum = '0150427001';
    ?>
    <table>
        <tr><td>姓名<td></td><?php echo $name;?></td></tr>
        <tr><td>出生日期<td></td><?php echo $birth;?></td></tr>
        <tr><td>学科<td></td><?php echo $subject;?></td></tr>
        <tr><td>学号<td></td><?php echo $snum;?></td></tr>
    </table>
</body>
</html>