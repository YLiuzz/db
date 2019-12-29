<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>客戶基本資料</title>
</head>

<body>
<h1>客戶基本資料</h1>


    <div class="col-12 form-group">
        <p>客戶姓名: <input type="text" class="form-control rounded-0 contact-input" id="data-name" placeholder="客戶姓名"></p>
    </div>
	<div class="col-12 form-group">
        <p>身份證字號: <input type="text" class="form-control rounded-0 contact-input" id="data-id-number" placeholder="身份證字號"></p>
    </div>
	<div class="col-12 form-group">
        <p>電話: <input type="text" class="form-control rounded-0 contact-input" id="data-phone" placeholder="電話"></p>
    </div>
	<div class="col-12 form-group">
        <p>住址: <input type="text" class="form-control rounded-0 contact-input" id="data-address" placeholder="客戶姓名住址"></p>
    </div>
	<div class="col-12 form-group">
        <p>年齡: <input type="text" class="form-control rounded-0 contact-input" id="data-age" placeholder="年齡"></p>
    </div>
	<div class="col-12 form-group">
        <p>職業: <input type="text" class="form-control rounded-0 contact-input" id="data-job" placeholder="職業"></p>
    </div>
	<div class="col-12 form-group">
        <p>登載日期: <input type="date" class="form-control rounded-0 contact-input" id="data-input-date" placeholder="登載日期"></p>
    </div>
	<div class="col-12 form-group">
        <p>照片: <input type="text" class="form-control rounded-0 contact-input" id="data-picture" placeholder="照片"></p>
    </div>
	<div class="col-12 form-group">
        <p>消費狀態: <input type="text" class="form-control rounded-0 contact-input" id="data-pay-stats" placeholder="消費狀態"></p>
    </div>
    <div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="sendmail">確認送出</button>
    </div>

    <?php include 'script.php' ?>
    
    </body>

	


</html>
	
