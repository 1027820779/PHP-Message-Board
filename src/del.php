<?php
/**
 * Created by PhpStorm.
 * User: ARKIN
 * Date: 15/11/26
 * Time: 下午2:39
 */
include "./function.php";
$data=include "./data.php";
$k=$_GET["k"];
unset($data[$k]);
data_add($data,"./data.php");
suc("删除成功","index.php");

?>