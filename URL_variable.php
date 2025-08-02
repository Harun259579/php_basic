<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	Parameter passing in URL 
	</title>
</head>
<body>
	<?php
	$cat="products";
	$cloth ="cloths";
	$shirt = "shirts";
	$next = 10;
// parameter pass in url = ar ager gula parameter porer gula value
	echo "<a href='URL_values.php?choice=search&cat=$cat&cloth=$cloth&netx=$next'>click Here</a>"
	?>

</body>
</html>