<?php


class Point extends AbstractFig
{
    protected $x;
    protected $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function dataOut()
    {
        echo "<br>";
        echo "Координаты точек: х = $this->x; y = $this->y";
    }
}