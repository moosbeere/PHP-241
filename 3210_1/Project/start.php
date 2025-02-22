// class Cat {
//     private $name;
//     public function __construct(string $name)
//     {
//         $this->name = $name;
//     }
// }

// class Admin extends User{
//     private $role;

//     public function __construct(string $name, string $role)
//     {
//         parent::__construct($name);
//         $this->role = $role;
//     }
// }

// $admin = new Admin("Sergey", 'admin');
// $cat = new Cat('murka');
// $user = new User('ivan');
// $article = new Article('article1', 'loram ipsum', $admin);

// echo $article->getAuthor()->getName();
// var_dump($article);


// class A {
//     public static $x;

//     public static function test(int $x){
//         echo $x;
//     }
//     public function getX(){
//         return self::$x;
//     }
// }

// A::$x = 5;
// echo A::$x.'<BR>';
// $y = new A;
// //$y->x = 7;
// // echo '<BR>'.$y->x; нельзя обращаться к статическим свойствам и методам класса от объекта данного классса
// echo $y::$x.'<BR>';
// echo $y->getX().'<BR>';
// // A::test(6);

// class User{
//     private $role;
//     private $name;
//     public function __construct(string $role, string $name)
//     {
//         $this->role = $role;
//         $this->name = $name;
//     }

//     public static function createAdmin(string $name){
//         return new self('admin', $name);
//     }
// }

// $user = User::createAdmin('Ivan');
// var_dump($user);


// class Human{
//     public static $count = 0;

//     public function __construct()
//     {
//         self::$count++;
//     }

//     public static function getCount(){
//         return self::$count;
//     }
// }


// $men1 = new Human();
// $men2 = new Human();
// $men3 = new Human();
// $men4 = new Human();

// echo '<BR>'.Human::getCount();



// abstract class AbstractClass{
//     public abstract function getValue();

//     public function printValue(){
//         echo $this->getValue();
//     }
// }

// // $abstract = new AbstractClass; ошибка

// class ClassA extends AbstractClass
// {
//     private $val;
//     public function __construct(int $val)
//     {   
//         $this->val = $val;
//     }
//     public function getValue(){
//         return $this->val;
//     }
// }

// $ob = new ClassA(5);
// $ob->printValue();









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


 -->
