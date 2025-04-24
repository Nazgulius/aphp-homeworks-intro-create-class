<?php
declare(strict_types=1);

// вариант 1 работает
// include 'Student.php';
// include './cars/Car.php';
// include './market/technique/Tv.php';


// вариант 2 работает с ошибками
// spl_autoload_register(function ($class_name) {
//   include $class_name . '.php';
// });
// spl_autoload_register(function ($class_name) {
//   include './cars/' . $class_name . '.php';
// });
// spl_autoload_register(function ($class_name) {
//   include './market/technique/' . $class_name . '.php';
// });

// вариант 3 работает
include 'autoloader.php';
spl_autoload_register('autoloader');



$obj1 = new Student();
$obj1->setName("Pavel");
$obj1->setAge(20);

echo 'Hello ' . $obj1->getName() . ', ' . $obj1->getAge() . ' age.' . PHP_EOL;

$obj2 = new Car();
$obj2->setModel('Volvo');
$obj2->setDateCreate(2020);

echo 'This car ' . $obj2->getModel() . ', ' . $obj2->getDateCreate() . ' age' . PHP_EOL;

$obj3 = new Tv();
$obj3->setModel('SONY');
$obj3->setDateCreate(2024);
$obj3->setDiagonal(55);

echo "It's a " . $obj3->getModel() . ' tv, they made it in ' . $obj3->getDateCreate()
    . ", it's " . $obj3->getDiagonal() . " inches." . PHP_EOL;