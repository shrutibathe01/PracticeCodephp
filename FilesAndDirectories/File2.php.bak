<?php

$FileOpen=fopen("Student.dat","r") or die("Unable to open Student.dat");
echo"<body align=center><h2>Student Result Sheet </h2></body>";
echo"<table border=4 align=Center width=50% >";
echo"<th>Roll No</th>
     <th>Name</th>
	 <th colspan=4>Marks</th>
	 <th>Total</th>
	 <th>Percentage</th>";
echo"<tr>
          <td colspan=2></td>
		  <td><b>Maths</b></td> 
		  <td><b>C</b></td>
		  <td><b>JAVA</b></td>
		  <td><b>php</b></td>
		  <td colspan=3></td>
	</tr>";

	while(!feof($FileOpen))
	{
		$fileData=fgets($FileOpen);
		$array=explode(' ',$fileData);
		if(!empty($array[0]) && !empty($array[1]) && !empty($array[2]) && !empty($array[3]) && !empty($array[4]) && !empty($array[5]))
        {                           
           $maths = $array[2];
           $C = $array[3];
           $JAVA = $array[4];
		   $php = $array[5]; 
           $total = (int)$maths+(int)$C+(int)$JAVA+(int)$php;
           $percentage = ($total/400)*100;

           echo "<tr><td align=center>$array[0]</td>";
           echo "<td align=center> $array[1]</td>";
           echo "<td align=center> $maths </td>";
           echo "<td align=center> $JAVA </td>";
           echo "<td align=center> $JAVA </td>";
		   echo "<td align=center> $php </td>";
           echo "<td align=center> $total</td>";
           echo "<td align=center> $percentage</td></tr>";
        }
    }
echo "</table>";

?>


