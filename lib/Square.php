<?php

require_once('AbstractFig.php');


class Square extends AbstractFig
{
    protected $a;
    protected $area;
    protected $perimeter;

    public function __construct(float $a)
    {
        $this->a = $a;
    }

    protected function area()
    {
        $this->area = pow($this->a, 2);
        return $this->area;
    }

    protected function perimeter()
    {
        $this->perimeter = 4 * $this->a;
        return $this->perimeter;
    }

    public function dataOut()
    {
        echo "<br>";
        echo 'Длина стороны = ' . $this->a;
        echo "<br>";
        echo 'Площадь = ' . $this->area();
        echo "<br>";
        echo 'Периметр = ' . $this->perimeter();
    }
}