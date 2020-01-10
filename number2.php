<?php
    include "connect.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>客戶訂貨紀錄</title>
</head>

<body>
<h1>客戶訂貨紀錄</h1>
    

    <div class="col-12 form-group">
        <p>身份證字號: <input type="text" class="form-control rounded-0 contact-input" id="data-id-number" placeholder="身份證字號"></p>
    </div>
    <div class="col-12 form-group">
        <p>訂貨日期: <input type="date" class="form-control rounded-0 contact-input" id="data-order-date" placeholder="訂貨日期"></p>
    </div>
    <div class="col-12 form-group">
        <p>預計遞交日期: <input type="date" class="form-control rounded-0 contact-input" id="data-pre-date" placeholder="預計遞交日期"></p>
    </div>
    <div class="col-12 form-group">
        <p>實際遞交日期: <input type="date" class="form-control rounded-0 contact-input" id="data-real-data" placeholder="實際遞交日期"></p>
    </div>
    <div class="col-12 form-group">
        <p>定貨品名: <input type="text" class="form-control rounded-0 contact-input" id="data-goods-name" placeholder="定貨品名"></p>
    </div>
    <div class="col-12 form-group">
        <p>單位: <input type="text" class="form-control rounded-0 contact-input" id="data-unit" placeholder="單位"></p>
    </div>
    <div class="col-12 form-group">
        <p>數量: <input type="text" class="form-control rounded-0 contact-input" id="data-quantity" placeholder="數量"></p>
    </div>
    <div class="col-12 form-group">
        <p>單價: <input type="text" class="form-control rounded-0 contact-input" id="data-single-price" placeholder="單價"></p>
    </div>
    <div class="col-12 form-group">
        <p>訂貨金額: <input type="text" class="form-control rounded-0 contact-input" id="data-order-price" placeholder="訂貨金額"></p>
    </div>
    <div class="col-12 form-group">
        <p>供應商名稱: <input type="text" class="form-control rounded-0 contact-input" id="data-supplier-name" placeholder="供應商名稱"></p>
    </div>
    <div class="col-12 form-group">
        <p>供應商編號: <input type="text" class="form-control rounded-0 contact-input" id="data-supplier-number" placeholder="供應商編號"></p>
    </div>
	<div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="send_record">確認送出</button>
    </div>
    <?php include 'script.php' ?>
</body>

	
</html>