<?php

$FirstFile=$_POST["FirstFile"];
$SecondFile=$_POST["SecondFile"];

$fp=fopen($FirstFile,"r") or die("Unable to open First.txt");
$data=fread($fp,filesize($FirstFile));

$fp1=fopen($SecondFile,"a") or die("Unable to open Second.txt");

$content=fwrite($fp1,$data);


fclose($fp);
fclose($fp1);

echo "<b>Content of First File Get Appened to Second File<b>";

?>