<!DOCTYPE>

<html>

<head>
<title>Password Tests</title>
</head>

<body>

<h2>Password Tests</2><hr />

<?php
$Passwords = array(
	"PuppyDog74",
	"Con@Programming!",
	"Rainbow$0",
	"bayroberts!",
	"flowerStand66!",
	"a0a1g0",
	"112233445566",
	"HallowE3n",
	"Wonderwoman86",
	"LaminateflooringIs0kay"	
	);

foreach ($Passwords as $check) {
echo "Password Tests $check: ";

	else if (preg_match('/[ ]/', $check))
		echo "No spaces allowed! Try again.";

	if (!preg_match('/[a-z]/', $check))
		echo "Your password needs a lowercase letter! Sorry.";
	
	
	else if (!preg_match('/[a-z]/', $check))
		echo "You must have at least one uppercase letter, sorry!";
	
	
	else if (!preg_match('/[0-9]/', $check))
		echo "Please include a number from 0-9 in your password!";
	

	else if (!preg_match('!*^%$#@', $check))
		echo "Please include a special character !*^%$#@ in your password. ";

	
	else if (strlen($check) < 8) 
		echo "Please select a password between 8-16 characters.";

	else if (strlen($check) > 16) 
		echo "Please select a password between 8-16 characters. ";
	
	else echo "Good password!!!";
	
echo "<br />";
	
}
	
?>

</body>

</html>