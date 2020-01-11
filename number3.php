<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>公司進貨資料庫</title>
</head>

<body>
<h1>公司進貨資料庫</h1>

	<div class="col-12 form-group">
        <p>供應商名稱: <input type="text" class="form-control rounded-0 contact-input" id="data-supplier-name" placeholder="供應商名稱"></p>
    </div>
	<div class="col-12 form-group">
        <p>供應商編號: <input type="text" class="form-control rounded-0 contact-input" id="data-supplier-number" placeholder="供應商編號"></p>
    </div>
	<div class="col-12 form-group">
        <p>供應商負責人: <input type="text" class="form-control rounded-0 contact-input" id="data-supplier-person" placeholder="供應商負責人"></p>
    </div>
	<div class="col-12 form-group">
        <p>進貨品名: <input type="text" class="form-control rounded-0 contact-input" id="data-goods-name" placeholder="進貨品名"></p>
    </div>
	<div class="col-12 form-group">
        <p>進貨數量: <input type="text" class="form-control rounded-0 contact-input" id="data-goods-quantity" placeholder="進貨數量"></p>
    </div>
	<div class="col-12 form-group">
        <p>進貨單位: <input type="text" class="form-control rounded-0 contact-input" id="data-goods-unit" placeholder="進貨單位"></p>
    </div>
	<div class="col-12 form-group">
        <p>進貨單價: <input type="text" class="form-control rounded-0 contact-input" id="data-goods-price" placeholder="進貨單價"></p>
    </div>
	<div class="col-12 form-group">
        <p>小計: <input type="text" class="form-control rounded-0 contact-input" id="data-result" placeholder="小計"></p>
    </div>
	<div class="col-12 form-group">
        <p>庫存位置: <input type="text" class="form-control rounded-0 contact-input" id="data-stock-location" placeholder="庫存位置"></p>
    </div>
	<div class="col-12 form-group">
        <p>規格: <input type="text" class="form-control rounded-0 contact-input" id="data-specs" placeholder="規格"></p>
    </div>
	<div class="col-12 form-group">
        <p>進貨日期: <input type="date" class="form-control rounded-0 contact-input" id="data-pay-stats" placeholder="進貨日期"></p>
    </div>
	<div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="send_purchase">確認送出</button>
    </div>
	<?php include 'script.php' ?>

</body>

	
</html>