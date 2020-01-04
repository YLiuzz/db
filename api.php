<?php
	include 'connect.php';
	foreach($_POST as $k=>$v){
		if(gettype($v)=='array'){
			$$k = $v;
		}elseif($v==0 || !empty($v)){
			$$k = addslashes(trim($v));
		}else{
			$$k = null;
		}
	}
	switch ($op) {
		case 'profile':
			$smit = $pdo->prepare("INSERT INTO `profile` (`name`,`id_name`,`phone`,`addr`,`age`,`job`,`first_date`,`sale_status`) VALUE (?,?,?,?,?,?,?,?)");
			$smit->execute([$name,$id_name,$phone,$addr,$age,$job,$date,$pay]);
			$json_array['msg']="success";
			break;
		case 'order':

			break;
		case 'stock':

			break;
		case 'payaccount':

			break;
		
		
	}
	echo json_encode($json_array);

?>