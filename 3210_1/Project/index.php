<?php

// class A {
//     public function sayHello(){
//         return 'Hello. I`m A';
//     }
// }

// class B extends A 
// {
//     public function sayHello(){
//         return parent::sayHello() . '. It was joke, I am B :)';
//     }
// }

// $a = new A;
// var_dump($a instanceof A);

// echo '<BR>';
// $b = new B;
// var_dump($b instanceof A);
// echo '<BR>';
// echo $a->sayHello();
// echo '<BR>';
// echo $b->sayHello();


// class A
// {
//     public function method1(){
//         return $this->method2();
//     }
//     protected function method2(){
//         return 'A';
//     }
// }

// class B extends A
// {
//     protected function method2()
//     {
//         return 'B';
//     }
// }

// $a = new A;
// $b = new B;

// echo $a->method1();
// echo $b->method1();






    // class Cat{
    //     private $name;
    //     public $color;
    //     public $weight;

    //     function __construct(string $name, string $color, int $weight){
    //         $this->name = $name;
    //         $this->color = $color;
    //         $this->weight = $weight;
    //     }

    //     function setName(string $name){
    //         $this->name = $name;
    //     }
    //     function getName(){
    //         return $this->name;
    //     }
    // }
    // $cat1 = new Cat('murka', 'black', 3);
    // // $cat1->setName('barsik');
    // // $cat1->color = 'gray';
    // // $cat1->weight = 7;
    // echo $cat1->getName().'<BR>';
    // // echo $cat2->getName().'<BR>';
    // var_dump($cat1);


    // class Lesson
    // {
    //     protected $title;
    //     protected $text;

    //     function __construct(string $title, string $text){
    //         $this->title = $title;
    //         $this->text = $text;
    //     }

    //     public function getText(){
    //         return $this->text;
    //     }
    // }

    // $lesson = new Lesson('lesson 1', 'lorum ipsum');

    // class HomeWork extends Lesson
    // {
    //     protected $task;

    //     function __construct(string $title, string $text, $task){
    //         parent::__construct($title, $text);
    //         $this->task = $task;
    //     }
    // }

    // class LabWork extends HomeWork
    // {
    //     private $count;
    //     function __construct(string $title, string $text, $task, $count){
    //         parent::__construct($title, $text, $task);
    //         $this->count = $count;
    //     }
    // }

    // $labWork = new LabWork('rt','rt',4,4);

    // echo $labWork->getText();



    // class Rectangle implements calculateSquare
    // {
    //     private $a;
    //     private $b;

    //     public function __construct($a, $b){
    //         $this->a = $a;
    //         $this->b = $b;
    //     }
    //     public function calculateSquare(): float
    //     {
    //         return $this->a * $this->b;
    //     }

    // }

    // class Square implements calculateSquare
    // {
    //     private $a;

    //     public function __construct($a){
    //         $this->a = $a;
    //     }
    //     public function calculateSquare(): float
    //     {
    //         return $this->a * $this->a;
    //     }

    // }
    // class Circle implements calculateSquare
    // {
    //     private $r;
    //     public function __construct($r){
    //         $this->r = $r;
    //     }
    //     public function calculateSquare(): float
    //     {
    //         $pi = 3.14;
    //         return $pi * ($this->r ** 2);
    //     }
    // }

    // interface calculateSquare
    // {
    //     public function calculateSquare(): float;
    // }



    // $figures = [
    //     $rectangle = new Rectangle(2,4),
    //     $square = new Square(4),
    //     $circle = new Circle(6),
    // ];


    // foreach($figures as $figure){
    //     if($figure instanceof calculateSquare) echo $figure->calculateSquare().'<BR>';
    //     else echo "object doesn`t implement interface<BR>";
    // }



