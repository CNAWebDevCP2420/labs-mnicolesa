<html>
	<head><title>Paycheck Calcuatlions</title></head>
	
	<body>
		
		<?php
		
			$workhour=$_GET['workhour'];
			$wage=$_GET['wage'];
			
			if($workhour>=40)
			{
	
				
				echo "Number of Hours worked: ".$workhour."<br>";
				echo "Full time hours worked 40";
				echo "Overtime hours worked".$overhour=overtime($workhour)."<br>";
				echo "Total Salary".$salary=oversalary($workhour, $wage, $overhour)."<br>";
				
			}
			
			function overtime($workhour)
			{
				$overhour=$workhour-40;
				return $overhour;
			}
			
			function oversalary($workhour, $wage, $overhour)
			{
				$salary=(($workhour * $wage) + ($overhour * 4));
				return $salary;
			}
		
		?>
	
	</body>

</html>