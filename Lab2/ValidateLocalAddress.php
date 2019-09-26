<!doctype html>

<html>
	<head>
		<title>Validate Local Address</title>
		<meta charset="UTF-8">
	
	</head>

	<body>
<h2>Validate Local Address</h2>
<?php
        $email = array("jsmith123@example.org", 
		"john.smith.mail@example.org",
		"john.smith@example.org",
		"john.smith@example",
		"jsmith123@mail.example.org");
        foreach($email as $emailAddress)
		{
            echo "the email address &idquo;" . $emailAddress . "&rdquo; ";
            if(preg_match("/^(([A-Za-a] + \d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i",$emailAddress) == 1)
			{
                echo " is a valid e-mail address.";
            }
            else
			{
                echo " is not a valid e-mail address.";
            }
        }
        ?>
	</body>
</html>