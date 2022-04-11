<?php
    header('Content-type:text/html;charset=utf-8');

    class Student {
        public $name;
        public $age;
        public function speak() {
            echo '我是一个好人';
        }
    }
    $stu1 = new Student;
    $stu1 -> speak();
    $stu1 -> name = '张三';
    $stu1 -> age = '18';
    echo '<pre>';
    var_dump($stu1);
    echo '</pre>';