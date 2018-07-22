<?php


class Line extends AbstractFig
{
    protected $length;
    protected $x1;
    protected $y1;
    protected $x2;
    protected $y2;

    public function __construct(float $x1, float $y1, float $x2, float $y2)
    {
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;
    }

    protected function lengthLine()
    {
        $this->length = sqrt(pow($this->y2 - $this->y1, 2) + pow($this->x2 - $this->x1, 2));
        return $this->length;
    }

    public function dataOut()
    {
        echo "<br>";
        echo 'Длина = ' . $this->lengthLine();
    }
}