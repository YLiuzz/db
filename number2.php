<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>Title of the document</title>
</head>

<body>
<h1>客戶基本資料</h1>

<form>
	<p>身分證字號 <input type="text" name="num1" placeholder="身分證字號"></p>
	<p>訂貨日期 <input type="text" name="num2" placeholder="訂貨日期"></p>
	<p>預計遞交日期 <input type="text" name="num3" placeholder="預計遞交日期"></p>
	<p>實際遞交日期 <input type="text" name="num4" placeholder="實際遞交日期"></p>
	<p>訂貨品名 <input type="text" name="num5" placeholder="訂貨品名"></p>
	<p>單位 <input type="text" name="num6" placeholder="單位"></p>
	<p>數量 <input type="text" name="num7" placeholder="數量"></p>
	<p>單價 <input type="text" name="num8" placeholder="單價"></p>
	<p>訂貨金額 <input type="text" name="num9" placeholder="訂貨金額"></p>
	<p>供應商名稱 <input type="text" name="num10" placeholder="供應商名稱"></p>
	<p>供應商編號 <input type="text" name="num11" placeholder="供應商編號"></p>
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