<?php


class Polygon extends AbstractFig
{
    protected $argList;
    protected $argsNum;
    protected $perimeter;

    public function __construct()
    {
        $argsNum = func_num_args();
        $argList = func_get_args();
        $this->argsNum = $argsNum;
        $this->argList = $argList;
    }

    public function validate(): bool
    {
        if ($this->argsNum < 3) {
            return false;
        }
        return true;
    }

    protected function sides()
    {
        for ($i = 0; $i < $this->argsNum; $i++) {
            echo "Сторона " . ($i + 1) . " = " . $this->argList[$i] . "<br>";
        }
    }

    protected function perimeter()
    {
        $this->perimeter = array_sum($this->argList);
        return $this->perimeter;
    }

    public function dataOut()
    {
        echo "<br>";
        echo $this->sides();
        echo "<br>";
        echo 'Периметр = ' . $this->perimeter();
    }
}