<?php
	//check if submit botton has been hit
	if (isset($_GET['submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];
		$operator = $_GET['operator'];
		switch ($operator) {
					case "None":
						echo "Error, you need to select operator";
						break;
					case "Add":
						echo $result1 + $result2;
						break;
					case "Subtract":
						echo $result1 - $result2;
						break;
					case "Multiply":
						echo $result1 * $result2;
						break;
					case "Divide":
						echo $result1 / $result2;
						break;		
					
					
				}		
	}

?>