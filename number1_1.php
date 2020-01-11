<?php
include "connect.php";
$id_name = $_GET['id_name'];
$res = $pdo->query("SELECT * FROM `profile` WHERE `id_name` = '{$id_name}' AND `sale_status`='1'");
$row = $res->fetch();
if(!empty($row)){


?>
    <div class="col-12 form-group">
        <p>客戶姓名: <input type="text" class="form-control rounded-0 contact-input" id="data-name" value=<?=$row['name']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>身份證字號: <input type="text" class="form-control rounded-0 contact-input" id="data-id-number" value=<?=$row['id_name']?> disabled></p>
    </div>
	<div class="col-12 form-group">
        <p>電話: <input type="text" class="form-control rounded-0 contact-input" id="data-phone" value=<?=$row['phone']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>住址: <input type="text" class="form-control rounded-0 contact-input" id="data-address" value=<?=$row['addr']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>年齡: <input type="text" class="form-control rounded-0 contact-input" id="data-age" value=<?=$row['age']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>職業: <input type="text" class="form-control rounded-0 contact-input" id="data-job" value=<?=$row['job']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>登載日期: <input type="date" class="form-control rounded-0 contact-input" id="data-input-date" value=<?=$row['first_date']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>照片: <input type="text" class="form-control rounded-0 contact-input" id="data-picture" value=<?=$row['img']?>></p>
    </div>
	<div class="col-12 form-group">
        <p>消費狀態: <input type="text" class="form-control rounded-0 contact-input" id="data-pay-stats" value=<?=$row['sale_status']?>></p>
    </div>
    <div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="update_profile">修改</button>
    <!-- </div><div class="col-12 form-group text-center">
        <button type="submit" class="btn btn-outline-dark-yellow rounded-0" id="update_profile_status">修改狀態</button>
    </div> -->
<?php
    }else{

?>
    <p>帳戶停用中</p>
<?php
    }
?>

    <?php include 'script.php' ?>