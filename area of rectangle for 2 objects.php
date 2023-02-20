<?php
//create class to calculate area of rectangle for 2 objects.
class rectangle
{
public $length;
public $width;
function area()
	{
		return($this->length*$this->width);
	}
}
//create obj1
$obj1=new rectangle();
$obj1->length=30;
$obj1->width=20;

//create obj2
$obj2=new rectangle();
$obj2->length=35;
$obj2->width=50;

echo"Area of Rectangle for obj1 :".$obj1->area()."<br>";
echo"Area of Rectangle for obj2 :".$obj2->area();

?>
