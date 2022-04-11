<?php
    header('Content-type:text/html;charset=utf-8');
//1、定义一个类
    class Student {
        public $name;
        public $age;
        public function speak() {
            echo '我是一个好人';
        }
    }
//2、实例化对象
    $stu1 = new Student;
    $stu1 -> speak();
//3、给对象赋值
    $stu1 -> name = '张三';
    $stu1 -> age = '18';
//4、打印对象
    echo '<pre>';
    var_dump($stu1);
    echo '</pre>';