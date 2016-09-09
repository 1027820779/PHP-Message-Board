<?php
/**
 * Created by PhpStorm.
 * User: ARKIN
 * Date: 15/11/26
 * Time: 上午11:02
 */ 

header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");

// 
function p($arr){
    echo "<pre>";
    print_r($arr);
    echo"</pre>";
}

// 添加数组函数
function data_add($data,$data_url){
	$php_code="<?php return ". var_export($data,true)."?>";
	file_put_contents($data_url,$php_code);
}

// 成功提示函数
function suc($ms,$url){
	$str=<<<str
<script>
alert('{$ms}');
location.href='{$url}';
</script>
str;
echo $str;
}

?>