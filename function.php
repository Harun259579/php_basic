<?php
//normal Function............................
function whatdate()
{
	return "Today is:"." ".date("F d,Y");

}
echo whatdate();
echo "<br>";

function add()
{
	$a=30;
	$b=20;

	$c=$a+$b;

	echo $c;
}
add();
echo "<br>";

//parameterrized function...........................
function saletex($price,$tax)
{
	$total=$price+($price*$tax);
	echo "Total is : $total"."<br>";
}
saletex(15,0.2);
echo "<br>";

//function masking.....

$a = "saletex";
$a(15,0.2);
echo "<br>";

//text ar font and size change
function customfont($font,$size=1.5)
{
	echo "<p style=\"font-family:$font;font-size:{$size}em;\">Welcome Abrar</p>";//escape mani php theke html tag lkano \# \# diye scap kre

}
customfont("Arial",2);
customfont("Times",3);
customfont("Courier");


?>