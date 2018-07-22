<?php


class Circle extends Line
{
    protected $area;
    protected $round;

    public function __construct(float $x1, float $y1, float $x2, float $y2)
    {
        parent::__construct($x1, $y1, $x2, $y2);
    }

    protected function lengthLine()
    {
        parent::lengthLine();
        return $this->length;

    }

    protected function area()
    {
        $this->area = pi() * pow($this->lengthLine(), 2);
        return $this->area;
    }

    protected function round()
    {
        $this->round = 2 * pi() * $this->length;
        return $this->round;
    }

    public function dataOut()
    {
        echo "<br>";
        echo 'Площадь = ' . $this->area();
        echo "<br>";
        echo 'Окружности = ' . $this->round();
    }
}