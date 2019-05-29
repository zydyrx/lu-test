<?php
header("content-type:text/html;charset=utf-8");
//卢本伟你好帅啊！
	//自动转换
	//输出1，自动把true转换成1，如果是false则转换成0
	$val1=TRUE;
	echo $val1+0;
	echo '<br />';
	
	//输出3.14
	$val2=3.14;
	echo $val2+0;
	echo '<br />';
	
	//它会把字符串中最前面的数字转换成整型
	$str='10中国人';
	echo $str+0;
	echo '<br />';
	
	//它最前面不是数值，所以无法转型，值为0
	$str2='a10中国人';
	echo $str2+0;
	echo '<br />';
	
	//转型函数settype（）
	$a=3.14;
	$b=settype($a,'string');
	echo $b.'<br />';
	echo $a;
	echo '<br />';
	//强制转换
	#1：通过类型关键字转型
	$a=3.14;
	echo (int)$a;//转换成整型
	echo '<br />';
	
	$b=3.14;
	echo (string)$b;//3.14为string类型
	echo '<Br />';
	
	//转型函数
	$c=4.14;
	$b=intval($c);
	var_dump($b);
?>
