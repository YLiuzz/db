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
			$smit = $pdo->prepare("INSERT INTO `order` (`id_number`,`buy_day`,`predict_day`,`real_day`,`order_name`,`unit`,`quantity`,`unit_price`,`price`,`supplier_name`,`supplier_id`) VALUE (?,?,?,?,?,?,?,?,?,?,?)");
			$smit->execute([$id_number,$buy_day,$predict_day,$real_day,$order_name,$unit,$quantity,$unit_price,$price,$supplier_name,$supplier_id]);
			$json_array['msg']="success";
			break;
		case 'stock':
			$smit = $pdo->prepare("INSERT INTO `purchase` (`supplier_number`,`supplier_name`,`supplier_boss`,`product_name`,`product_quantity`,`product_unit`,`product_price`,`sub_total`,`postion`,`p_date`) VALUE (?,?,?,?,?,?,?,?,?,?)");
			$smit->execute([$supplier_number,$supplier_name,$supplier_boss,$product_name,$product_quantity,$product_unit,$product_price,$sub_total,$postion,$spec,$p_date]);
			$json_array['msg']="success";

			break;
		case 'payaccount':
			$smit = $pdo->prepare("INSERT INTO `collection` (`id_number`,`order_name`,`revenue`,`dead_line`,`uncollected`) VALUE (?,?,?,?,?)");
			$smit->execute([$id_number,$order_name,$revenue,$dead_line,$uncollected]);
			$json_array['msg']="success";

			break;
		
		
	}
	echo json_encode($json_array);

?>