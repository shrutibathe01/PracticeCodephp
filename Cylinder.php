<?php

$h=$_POST['height'];
$r=$_POST['radius'];

define('PI','3.1428');

interface Calculate
{
	public function area($r,$h);
	public function volume($r,$h);
}

class Cylinder implements Calculate
{
	public function area($r,$h)
	{
		$area=(2*PI*$r*($r+$h));
		echo "Area Of Cylinder is: ".$area. "<br>";
	}
	public function volume($r,$h)
	{
		$volume=(PI*$r*$r*$h);
		echo "Volume of Cylinder is: ".$volume. "<br>";
	}
}

$obj=new Cylinder;
$obj->area($r,$h);
$obj->volume($r,$h);
?>