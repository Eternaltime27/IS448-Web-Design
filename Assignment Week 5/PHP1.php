<html>
<head>
<title>Hello World</title>
</head>
<body>
<?php
	echo "Hello, World!"

	$myvar = "The is my variable";
	$number = 5;
	$number2 = 3;
	$sum = $myvar + $number2;
	echo $sum;

	$name = "Jake";
	echo "Hello, " . $name

	$var = 5 + 3;
	($x == $y)
	($x !== $y)
	$x and $y
	$x or $y

	$loggedIn = true;
	if ($loggedIn == true) {
		echo "You are logged in";
	} else {
		echo "Please log in";
	}

	$loggedIn = "";
	if ($loggedIn == "yes") {
		echo "You are logged in";
	} else {
		echo "Please log in";
	}
	$name = $_POST["asdf"];
	echo "Hello, " . $name;

	$person1 = "Alice";
	$person2 = "Bob";

	$people =array("Alice", "Bob", "Catherine");
	print_r($people);

	$people =array("Alice", "Bob", "Catherine");
	$numbers =array(5,3,7);
	$sum = 0;
	
	foreach ($numbers $number) {
		$sum = $sum + $number;
	}
	echo $sum;
	
?>
</body>
</html>