<?php
class Circle{

	var $radius;
	var $color;

	function __construct(){ // constructor
		echo "sebuah objek circle telah dibuat";
	}

	function getRadius(){
		return $this->radius;
	}

	function getArea(){
		return 3.14*($this->radius * $this->radius);
	}

	function toString(){
		echo "Sebuah lingkaran, berwarna ".$this->color." <br />
				Memiliki luas sebesar ".$this->getArea();
	}
}