
<?php
//if condition Example.............
echo "If Condition   ";
$price = 350;
if($price==250)
{
	print"Buy 2 kg meet";
}
else
{
	print"Buy 1 kg meet";
}
echo "<br>";
?>

<?php
//else if condition Example................
echo "If Else Condition   ";
$price = 350;
if($price<=100)
{
	print"Buy 1 kg meet";
}
else if($price==250)
{
	print"Buy 2 kg meet";
}
else if($price==350)
{
	print"Buy 3 kg meet";
}
else
{
	print"Buy 1 kg meet";
}
echo "<br>";
?>


<?php
//swith case example...........................
echo "Switch Case Condition   ";
$price = 350;
switch ($price) {
	case '100':
		print"Buy 1 kg meet";
		break;
		case '200':
		print"Buy 2 kg meet";
		break;
		case '300':
		print"Buy 3 kg meet";
		break;
		case '350':
		print"Buy 5 kg meet";
		break;
	
	default:
		print" dont Buy meet";
		break;
}

echo "<br>";
?>


<?php
//ternari operator use kre.......................
$price = 350;
$price2=($price==250)?"buy 5 kg meet":"dont buy meet";
echo "$price2";

echo "<br>";
// akadik condiction use ternary operator
$foo = 4;
$dd=($foo==1)?"1":(($foo==2)?"2":(($foo==3)?"3":"others"));
echo "$dd <br>";
?>


<?php




?>

