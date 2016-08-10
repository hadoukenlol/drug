<?php 
/**

*

*/
class ArrayHelper 
{
	private $_x = array();

	function __construct($x)
	{
		# code...
		$this->_x = $x; 
	}
}

$array = array(5, 5);

print_r ($array);

$object = new ArrayHelper($array);

var_dump($object);


1 - закоммитить
2 - написать фукнцию для суммирования всех элементов массива
3 - быстрая сортировка 
4 - статьи про основы php


