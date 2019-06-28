<?php

/*Создать иерархию классов: фигура - прямоугольник - квадрат. Все классы должны содержать методы для задания и получения значений длины сторон, а производные классы методы вычисления площади.*/
/*Вынесите все методы в отдельные интерфейсы. А так же обеспечьте возможность вывода экземпляра фигуры в строку.*/
/* 1.	Если при вычислении площади она <= 0, то вбрасывайте исключение о не допустимых значениях сторон.*/

interface iFigure{
	public function printString();
}

interface iRectangle{
	public function areaRectangle();
}

interface iSquare{
	public function areaSquare($a);
}

class Figure implements iFigure
{
	public $sideA;
	public function __construct($a)
 	{
 		$this->sideA=$a;
 	}

	public function printString(){
		echo "Сторона a = ".$this->sideA;
	}
}

class Rectangle extends Figure implements iRectangle
 {
 	public $sideA;
 	public $sideB;
 	public function __construct($a, $b)
 	{

 		$this->sideA=$a;
 		$this->sideB=$b;
 		
 	}

 	public function areaRectangle()
 	{
 		$area = $this->sideB*$this->sideA;
 		return $area;
 	}


 }

 class Square extends Rectangle implements iSquare
 {
 	 public function __construct($a)
	{
		$this->sideA=$a;
	}
 	public function areaSquare($a)
 	{
 		$this->sideA=$a;
 		echo $this->sideA*$this->sideA;

 	}
 }



$c = new Rectangle(5,4);
echo $c->areaRectangle();
echo "<br>"; 
$b = new Square(6);
$b->areaSquare(6);
$l = new Figure(5);
echo "<br>";
$l->printString();
