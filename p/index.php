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
    $info = array(
        array('name' => '王六','birth' => '1996-01-07','subject' => 'PHP','snum' => '0150421001'),
        array('name' => '王二','birth' => '1996-02-07','subject' => 'PHP','snum' => '0150422001'),
        array('name' => '王一','birth' => '1996-03-07','subject' => 'PHP','snum' => '0150423001'),
        array('name' => '王五','birth' => '1996-04-07','subject' => 'PHP','snum' => '0150424001')
    );
    ?>
    <div>&gt;&gt;学生管理&gt;&gt;0427PHP就业班&gt;&gt;学生列表</div>
    <table>
        <tr><th>学号</th><th>姓名</th><th>出生日期</th><th>详情</th></tr>
        <?php
            for($i = 0,$len = count($info);$i<$len;++$i) {?>
                <tr>
                    <td><?php echo $info[$i]['snum'];?></td>
                    <td><?php echo $info[$i]['name'];?></td>
                    <td><?php echo $info[$i]['birth'];?></td>
                    <td><a href="#">点击查看详情</a></td>
                </tr>
                <?php}?>
            }
        ?>
    </table>
</body>
</html>