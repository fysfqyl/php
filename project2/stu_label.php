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
    $label = "勇敢,低调,直率,执着,善良,乐活族,手机控,90后";

    $labels = explode(',',$label);
    ?>

    <div>
        <?php
            foreach($labels as $V) {
                $class_name = carry('blue','red','yellow','green');
                $index = array_rand($class_name);
                echo '<div class = "'.$class_name[$index].'">'.$v.'</div>'
            }
        ?>
    </div>
</body>
</html>