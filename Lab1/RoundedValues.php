<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
<meta charset=utf-8>
<title>Rounded Values</title>

</head>
<body>

		<?php
		define("data", .7575777);
		echo
		$Valuechange = floor(data);
		echo "The floor value whole number is $Valuechange.";
		
		
			$Valuechange = ceil(data);
		echo "The ceil function to the nearest whole number is $Valuechange.";
		
		$Valuechange = round(data);
		echo "Rounded value is $Valuechange.";
		?> 
</div>
</body>
</html>