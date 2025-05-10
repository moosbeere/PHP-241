<?php
    // class A{
    //     public function sayHello()
    //     {
    //         return 'Hello. I`m A.';
    //     }
    // }

    // class B extends A{
    //     public function sayHello()
    //     {
    //         return parent::sayHello(). ' It was joke, i`m B';
    //     }
    // }

    // $a = new A;
    // $b = new B;
    // echo $b->sayHello();
    // var_dump($a instanceof B);


    class C{
        public function method1()
        {
            return $this->method2();
        }
        public function method2()
        {
            return 'C';
        }
    }

    class D extends C{
        public function method2()
        {
            return 'D';
        }
    }
    // $c = new C;
    // $d = new D;
    // echo $d->method1();


abstract class AbstractClass{

    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }
    abstract public function getValue();

    public function PrintValue(){
        echo $this->getValue();
    }
}

class NoAbstract extends AbstractClass{
    public function getValue(){
        return $this->value;
    }
}

$g = new NoAbstract('Kek');
// $g->PrintValue();

// $abstract = new AbstractClass;


class Test{
    public static function test(int $x){
        return "x= $x";
    }
}

// echo Test::test(5);

class User{
    public function __construct(private string $name, private string $role){}

    public static function createAdmin(string $name){
        return new self($name, 'admin');
    }
}
$admin = new User('Ivan', 'admin');
$admin2 = User::createAdmin('Olga');

// var_dump($admin);


// class Y{
//     public static $x;
//     public static function getX(){
//         return self::$x;
//     }
// }

// $y = new Y;
// Y::$x = 6;
// echo $y::getX();


// 

class Human{
    public static $count = 0;
    public function __construct()
    {
        self::$count++;
    }
}

$human1 = new Human;
$human2 = new Human;
$human3 = new Human;
echo Human::$count;




