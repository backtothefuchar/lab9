<?php
	libxml_use_internal_errors(true);
	error_reporting(E_ALL);
	ini_set("display_errors", 1);


	$small = filter_input(INPUT_POST, 'small', FILTER_VALIDATE_INT);
	$medium = filter_input(INPUT_POST, 'medium', FILTER_VALIDATE_INT);
	$large = filter_input(INPUT_POST, 'large', FILTER_VALIDATE_INT);
	$shipping = $_POST['shipping'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$delivery = 0;
	$deliveryTag = "";
	$total = 0;

	

	if($shipping == "free"){
		$delivery = 0;
		$deliveryTag = "Free shipping";
	}else if($shipping == "threeDay"){
		$delivery = 5;
		$deliveryTag = "Three Days";
	}else if ($shipping == "overNight"){
		$delivery = 50;
		$deliveryTag = "Over night";
	}

	$smallCost = 5;
	$mediumCost = 10;
	$largeCost = 15;

	$total= ($smallCost * $small) + ($mediumCost * $medium) + ($largeCost * $large); 

	$total += $delivery;



	echo "<html>
	<head>
		<title>Purchase Success</title>
		<link rel='stylesheet' type='text/css' href='style.css'>
	</head>

	<body>
		<p> Receipt:</p>
		<p align='left'>Your username is: ". $username . "<br>
		Your password is: " . $password ."
		</p>";
	

	echo "<table><thead><tr>";
	echo "<th></th>";
	echo "<th>Count</th>" ; 
	echo "<th>Cost</th>";
	echo "<th>Subtotal</th></tr></thead>";
	

	echo "<tbody><tr><th>Small Poster</th>";
	echo "<td>". $small . "</td>";
	echo "<td>$20</td>" ;
	echo "<td>$" . ($smallCost * $small) . "</td>";

	echo "<tbody><tr><th>Medium Poster</th>";
	echo "<td>". $medium . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($mediumCost * $medium) . "</td>";

	echo "<tbody><tr><th>Large Poster</th>";
	echo "<td>". $large . "</td>";
	echo "<td>$10</td>" ;
	echo "<td>$" . ($largeCost * $large) . "</td>";	

	echo "<tbody><tr><th>Shipping</th>";
	echo "<td colspan='2'>". $deliveryTag . "</td>";
	echo "<td>$" . $delivery . "</td>";

	echo "<tbody><tr><th colspan='3'>Grand Total</th>";
	echo "<th>$" . $total . "</th>";

	echo "</tbody></table>";

	echo "</body>
	</html>";
?>


