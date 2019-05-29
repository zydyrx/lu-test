<?php
//定义变量和输出变量
$val='helloworld';
$val2=&$val;
$val2='word';
echo $val.'<br />';
echo $val2.'<br />';

//声明常量和定义常量
define('texname','abcc');
echo texname.'<br />';
const pai=3.14;
echo constant('pai').'<br />';
//系统常量
echo PHP_VERSION.'<br />';//版本信息常量
echo PHP_OS.'<br />';//操作系统
echo M_PI.'<br />';//圆周率常量

//释放变量
$name='abc';
echo $name;
unset($name);

//可变变量
$a='b';
$b='c';
$c='d';
echo $$a.'<br />';
//魔术常量 
echo '<br />';
echo __LINE__.'<br />';//代码所在行数
echo __file__.'<br />';//找当前文件的路径
echo __DIR__.'<br />';//找出当前文件所在目录
 
//显示当前方法的名称
function getname(){
	echo __FUNCTION__;
} 
getname().'<br />';//调用方法

//数据类型

//整数类型
$int=123;
echo '<br />';
var_dump($int).'<br />';

//字符串类型
$string='abcdefg';
echo '<br />';
var_dump($string).'<br />';

//小数类型
var_dump(M_PI);
echo '<br />';

//布尔类型
$bool=true;
var_dump($bool);
echo '<br />';

//数组类型
$array=array(1,2,3);
//$array=[3]
var_dump($array);
echo '<br />';

//null类型
$null=null;
var_dump($null);
echo '<br />';

//对象类型
class user{};
$object=new user;
var_dump($object);
echo '<br />';

//资源类型
$src=fopen('jichu.php','r');
var_dump($src);
?>