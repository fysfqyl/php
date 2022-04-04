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
        include './page.php';
        $info = array(
            array('name' => '王六','birth' => '1996-08-07','subject' => 'PHP','snum' => '0150427001'),
            array('name' => '张三','birth' => '1995-12-23','subject' => 'PHP','snum' => '0150427002'),
            array('name' => '赵二','birth' => '1996-01-09','subject' => 'PHP','snum' => '0150427003'),
            array('name' => '孙四','birth' => '1995-05-04','subject' => 'PHP','snum' => '0150427004'),
            array('name' => '孙四','birth' => '1995-05-04','subject' => 'PHP','snum' => '0150427004'),
            array('name' => '孙四','birth' => '1995-05-04','subject' => 'PHP','snum' => '0150427004'),
            array('name' => '孙四','birth' => '1995-05-04','subject' => 'PHP','snum' => '0150427004'),
            array('name' => '孙四','birth' => '1995-05-04','subject' => 'PHP','snum' => '0150427004')
        );
        $total_num = count($info);//总数
        $perpage = 4;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $total_page = ceil($total_num/$perpage);
        $page = max($page,1);//对比页码和1的大小，当输入值小于1时候输出1
        $page = min($page,$total_page);

        $start_index = $perpage * ($page - 1);
        // 每页4个数据[0,1,2,3],[4,5,6,7]，获取3，和7。
        $end_index = $perpage * $page - 1;
        // 最后一页数据数量可能不等于perpage，为防止数据超出。
        $end_index = min($end_index,$total_num-1);
    ?>
    <div>&gt;&gt;学生管理&gt;&gt;0427PHP就业班&gt;&gt;学生列表</div>
    <table>
        <tr><th>学号</th><th>姓名</th><th>出生日期</th><th>详情</th></tr>
        <?php for($i=$start_index;$i<=$end_index;++$i): ?>
            <tr>
                <td><?php echo $info[$i]['snum'];?></td>
                <td><?php echo $info[$i]['name'];?></td>
                <td><?php echo $info[$i]['birth'];?></td>
                <td><a href="#">点击查看详情</a></td>
            </tr>
        <?php endfor; ?>
        <div><?php echo showPage($page,$total_page);?></div>
    </table>
</body>
</html>