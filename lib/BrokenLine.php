<?php


class BrokenLine extends AbstractFig
{
    protected $length;
    protected $argsNum;
    protected $argList;

    public function __construct()
    {
        $argsNum = func_num_args();
        $this->argsNum = $argsNum;
        $argList = func_get_args();
        $this->argList = $argList;
    }

    public function validate(): bool
    {
        if ($this->argsNum % 2 != 0) {
            return false;
        }
        return true;
    }

    public function points()
    {
        echo "Координаты точек: <br>";

        for ($i = 0; $i < $this->argsNum; $i += 2) {
            echo "x = " . $this->argList[$i] . "; y = " . $this->argList[$i + 1] . "<br>";
        }
    }

    public function length()
    {
        echo "<br>Длина отрезков: <br>";
        for ($i = 3; $i < $this->argsNum; $i += 2) {
            $this->length = round(sqrt(pow($this->argList[$i] - $this->argList[$i - 2], 2) + pow($this->argList[$i - 1] - $this->argList[$i - 3], 2)), 2);
            echo $this->length . "<br>";
        }

    }

    public function dataOut()
    {
        echo "<br>";
        $this->points();
        echo "<br>";
        $this->length();
    }
}