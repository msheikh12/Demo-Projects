<!DOCTYPE html>
<html>
	<head>
		<title>PHP Fibonacci Script</title>
	</head>

	<body>

		<h2>Fibonacci With PHP Script</h2>

		<h4>Enter the number limit</h4>

		<form method = 'post'>
			<input type = 'text' name = 'limit'/>
			<button name = 'submit'>Print Fibonacci Series</button>
		</form>

		</br>

		<?php
		 
		  if(isset($_POST['submit'])){
		  
		    $limit = 0;
		    if(isset($_POST['limit'])){
		    $limit = $_POST['limit'];
		    }
		    
		    $num1 = 0;
		    $num2 = 1;
		    $num3 = 0;
		    
		      //This will check the input if the value is greater than 0
		      if($limit > 0){
		      	print $num1 . "<br>";
		      } else {
		        print "Value should be greater than 0";
		      }
		 
		      //This will check if the input is > 1
		      if($limit > 1){
		        print $num2 . "<br>";
		      }
		      
		      //This will check if the input is > 2, then it will print the fibonacci sequence
		      while($limit > 2)
		        {       
		           //This will add the first value ($num1) and the second value ($num2), to get to the next value ($num3)
		           $num3 = $num1 + $num2;
		           
		           //What to do to find the next series

		           //This assigns the second value ($num2) to the first value ($num1)
		           $num1  = $num2;

		           //This assigns the next value (sum of $num1 & $num2) to the second value ($num2)           
		           $num2 = $num3;
		           
		           //This will print the next value ($num3)
		           print $next_num . "<br>";
		           
		           //This will decrement the limit by one
		           $limit--;
		        }
		    }
		  
		?>

	</body>
</html>

