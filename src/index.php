<?php
/**
 * Created by PhpStorm.
 * User: ARKIN
 * Date: 15/11/26
 * Time: 上午11:02
 */ 
include "./function.php";

$data=include "./data.php";

if(!empty($_POST)){
	$_POST["time"]=date("Y-m-d H:i:s");
	// $arr = array_merge($_POST, $data); 
	$data[]=$_POST;
	data_add($data,"./data.php");
	suc("添加成功","index.php");
}

include "./tpl/index.html";



?>