<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">


 <title>Gas Prices</title>
	
</head>

<body>
    <?php

    $gasPrice = 2.57;
	
    if ($gasPrice >= 2 && $gasPrice <= 3)
	{
        echo "<p>Price of gas is between 2 & 3 dollars.</p>";
    } 
	
    else
	{
        echo "<p>Price of gas is not between 2 & 3 dollars.</p>";
    }
    ?>

</body>

</html>