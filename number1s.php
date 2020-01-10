<?php
    include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>客戶基本資料</title>
</head>

<body>
<h1>客戶基本資料</h1>
    <form action="number1_1.php" method="GET" >
        <div class="col-12 form-group">
            <p>搜尋: <input type="text" class="form-control rounded-0 contact-input" name="id_name" placeholder="客戶身分證"></p>
        </div>
        <div class="col-12 form-group text-center">
            <button type="submit" class="btn btn-outline-dark-yellow rounded-0" >確認搜尋</button>
        </div>
    </form>
    

  
   

    <?php include 'script.php' ?>
    
    </body>

	


</html>
	
