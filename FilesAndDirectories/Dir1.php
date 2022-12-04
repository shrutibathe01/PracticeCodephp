<?php

$dir=$_POST['dir'];
if(is_dir($dir))
{
	if($Odir=opendir($dir))
	{
		while($file=readdir($Odir))
		{

			echo "Filename:".$file."<br>";
		}
		closedir($Odir);
	}
}
?>