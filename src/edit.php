<?php
include "./function.php";
$data=include "./data.php";
$k=$_GET["k"];
$old_data=$data[$k];
if(!empty($_POST)){
    $_POST["time"]=$old_data["time"];
    $data[$k]=$_POST;
    data_add($data,"./data.php");
    suc("修改成功","index.php");
}
include "./tpl/edit.html";

 ?>