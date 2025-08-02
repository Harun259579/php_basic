<?php
//for loop example...........................
$water = 10;
for ($water;$water<50 ; $water++) 
{ 
echo"Water is $water litre <br>";
	
}
?>

<?php
for($i=1;$i<=10;$i++)
{
	$student_id = rand(1000,9999);
	echo "student $i  student ID $student_id <br>";
}

?>



<?php
//while loop Example..........................................
$i=1;
while ($i<=10) {
	echo $i."<br>";
	$i++;
	echo "<br>";
}


$j=10;
while ($j>=1) {
	echo $j."<br>";
	$j--;
}


?>

<?php
//nested loop...........................................
print"<table border = '1' style = 'border-collapse:collapse;width:100%;text-align:center;'>";
for($i=1;$i<=12;$i++)
{
	print"<tr>";
	for($j=1;$j<=12;$j++)
	{
		print"<td>";
		print($i*$j);
		print"</td>";

	}
	print"</tr>";
}

print"</table>";


?>