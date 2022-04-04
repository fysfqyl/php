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
        function showPage($page,$total_page) {
            $html = '<a href ="?page= 1">【首页】</a>';
            $pre_page = $page - 1 <= 0 ? $page : ($page - 1);
            $html .= '<a href ="?page='.$pre_page.'">【上一页】</a>';
            $next_page = $page + 1 > $total_page ? $page : ($page + 1);
            $html .= '<a href ="?page='.$next_page.'">【下一页】</a>';
            $html .= '<a href ="?page='.$total_page.'">【尾页】</a>';
            return $html;
            
        }
    ?>
</body>
</html>