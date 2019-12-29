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
			
			break;
		
		
	}
?>