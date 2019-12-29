<!DOCTYPE html>
<html>
<head>
<meta charset ="UTF-8">
<title>公司應收帳資料庫</title>
</head>

<body>
<h1>公司應收帳資料庫</h1>

<!-- <form>
	<p>客戶姓名 <input type="text" name="num1" placeholder="客戶姓名"></p>
	<p>身份證字號 <input type="text" name="num2" placeholder="身份證字號"></p>
	<p>應收金額 <input type="text" name="num3" placeholder="應收金額"></p>
	<p>應收日期 <input type="text" name="num4" placeholder="應收日期"></p>
	<p>代催收金額 <input type="text" name="num5" placeholder="代催收金額"></p>
	
	<button type="submit" name="submit" value="submit">提交資料</button>
	<p></p>

	
	<br>

	

</form> -->

	<div class="col-12 form-group">
        <p>客戶姓名: <input type="text" class="form-control rounded-0 contact-input" id="data-name" placeholder="客戶姓名"></p>
    </div>
	<div class="col-12 form-group">
        <p>身份證字號: <input type="text" class="form-control rounded-0 contact-input" id="data-id-number" placeholder="身份證字號"></p>
    </div>
	<div class="col-12 form-group">
        <p>應收金額: <input type="text" class="form-control rounded-0 contact-input" id="data-expect-number" placeholder="應收金額"></p>
    </div>
	<div class="col-12 form-group">
        <p>應收日期: <input type="text" class="form-control rounded-0 contact-input" id="data-expect-date" placeholder="應收日期"></p>
    </div>
	<div class="col-12 form-group">
        <p>代催收金額: <input type="text" class="form-control rounded-0 contact-input" id="data-need-price" placeholder="代催收金額"></p>
    </div>
	<div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="sendmail">確認送出</button>
    </div>
	

</body>

	
</html>