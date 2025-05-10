<?php

    interface CalculateArea{
        public function calculateArea(): float;
    }

    class Rectangle{
        private $a;
        private $b;

        public function __construct(int $a, int $b){
            $this->a = $a;
            $this->b = $b;
        }
        public function calculateArea(): float
        {
            return ($this->a * $this->b);
        }
    }

    class Square{
        private $a;

        public function __construct(int $a){
            $this->a = $a;
        }
        public function calculateArea(): float
        {
            return pow($this->a,2);
        }
    }

    class Circle implements CalculateArea{
        const PI = 3.1416;
        private $r;

        public function __construct(int $r){
            $this->r = $r;
        }
        public function calculateArea(): float
        {
            return self::PI * ($this->r ** 2);
        }
    }

    class Triangle{
        private $h;
        private $a;

        public function __construct(int $h, int $a){
            $this->h = $h;
            $this->a = $a;
        }
    }

    $array = [
        'rectangle'=>new Rectangle(3,4),
        'square'=>new Square(3),
        'circle'=>new Circle(2),
        'traingle'=>new Triangle(2,4),
    ];

    foreach($array as $key=>$figure){
        if ($figure instanceof CalculateArea){
            echo $key.' = '.$figure->calculateArea().'<BR>';
        }
        else echo "Class $key don't make interface CalculateArea<BR>";
        
    }
