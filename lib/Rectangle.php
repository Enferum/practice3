<?php

require_once('Square.php');


class Rectangle extends Square
{
    protected $b;
    protected $area;
    protected $perimeter;

    public function __construct(float $a, float $b)
    {
        parent::__construct($a);
        $this->b = $b;
    }

    protected function area()
    {
        $this->area = $this->a * $this->b;
        return $this->area;
    }

    protected function perimeter()
    {
        $this->perimeter = (2 * $this->a) + (2 * $this->b);
        return $this->perimeter;
    }

    public function dataOut()
    {
        echo "<br>";
        echo 'Длина стороны a = ' . $this->a;
        echo "<br>";
        echo 'Длина стороны b = ' . $this->b;
        echo "<br>";
        echo 'Площадь = ' . $this->area();
        echo "<br>";
        echo 'Периметр = ' . $this->perimeter();
    }
}