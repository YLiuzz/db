<?php
include "connect.php";
$id_name = $_GET['id_name'];
$res = $pdo->query("SELECT * FROM `profile` WHERE `id_name` = '{$id_name}'");
$row = $res->fetch();
?>
    <div class="col-12 form-group">
        <p>身份證字號:<?=$row['id_name']?></p>
    </div>
    <div class="col-12 form-group">
        <p>客戶姓名:<?=$row['name']?> </p>
    </div>
	<div class="col-12 form-group">
        <p>電話:<?=$row['phone']?></p>
    </div>
	<div class="col-12 form-group">
        <p>住址:<?=$row['addr']?> </p>
    </div>
	<div class="col-12 form-group">
        <p>年齡:<?=$row['age']?></p>
    </div>
	<div class="col-12 form-group">
        <p>職業:<?=$row['job']?></p>
    </div>
	<div class="col-12 form-group">
        <p>登載日期:<?=$row['first_date']?></p>
    </div>
	<div class="col-12 form-group">
        <p>照片:<?=$row['img']?></p>
    </div>
	<div class="col-12 form-group">
        <p>消費狀態:<?=$row['sale_status']?></p>
    </div>