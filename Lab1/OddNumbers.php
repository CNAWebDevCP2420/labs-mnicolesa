<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Odd numbers</title>
</head>
<body>
<?php
echo "All of the odd numbers between 1 and 100 are";
echo"<br />";
$num = 1;
while ( $num <= 100 ) {
print "$num ,";
$num += 2;
}
?>
</body>
</html>