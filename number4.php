<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>公司應收帳資料庫</title>
</head>

<body>
<h1>公司應收帳資料庫</h1>

<form>
	<p>客戶姓名 <input type="text" name="num1" placeholder="Number1"></p>
	<p>身份證字號 <input type="text" name="num2" placeholder="Number2"></p>
	<p>應收金額 <input type="text" name="num3" placeholder="Number3"></p>
	<p>應收日期 <input type="text" name="num4" placeholder="Number4"></p>
	<p>代催收金額 <input type="text" name="num5" placeholder="Number5"></p>
	
	<button type="submit" name="submit" value="submit">提交資料</button>
	<p></p>

	
	<br>

	

</form>

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
	

</body>

	
</html>