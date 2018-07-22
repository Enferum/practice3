<?php

require_once('lib/Rectangle.php');
require_once('lib/Square.php');
require_once('lib/Line.php');
require_once('lib/Circle.php');
require_once('lib/Polygon.php');
require_once('lib/Point.php');
require_once('lib/BrokenLine.php');


if (isset($_POST['select_fig'])) {
    $select = $_POST['select_fig'];
    switch ($select) {
        case 'Point':
            $figure = new Point(5, 16);
            $figure->dataOut();
            break;
        case 'Circle':
            $figure = new Circle(6, 3, 2, 2);
            $figure->dataOut();
            break;
        case 'Square':
            $figure = new Square(2);
            $figure->dataOut();
            break;
        case 'Rectangle':
            $figure = new Rectangle(12, 13);
            $figure->dataOut();
            break;
        case 'Polygon':
            $figure = new Polygon(5, 3, 2, 7);
            if ($figure->validate()) {
                $figure->dataOut();
            } else {
                echo 'Количество сторон должно быть больше 2';
            }
            break;
        case 'Line':
            $figure = new Line(6, 5, 3, 4);
            $figure->dataOut();
            break;
        case 'BrokenLine':
            $figure = new BrokenLine(7, 5, 5, 3, 9, 1);
            if ($figure->validate()) {
                $figure->dataOut();
            } else {
                echo 'Неверное количество координат';
            };
            break;
        default:
            echo 'select value';
            break;
    }
}