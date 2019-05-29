<?php
header("content-type:text/html;charset=utf-8");
	//检测变量类型
	$leix=123;
	$xiu=gettype($leix);
	echo $xiu;
	echo '<br />';
	
	//赋值运算符+=,-=,.=,%=,*=,/=
	$a=1;
	$a.='a';
	echo $a;
//	$a-='a';
//	echo $a;
//	
//	$a+='a';
//	echo $a;
//	
//	$a*='a';
//	echo $a;
//	
//	$a/='a';
//	echo $a;
//	
//	$a%='a';
//	echo $a;
	echo '<br />';
	//特殊的比较运算符!==(不全等于，变量的值不相等或类型不相等，则返回true，否则返回false),===(全等于，包括变量的值及类型都一样才返回true，否则返回false)
	$te=1;
	$shu=1;
	if($te===$shu)
	{
		echo '全等于';
	}
	else
		{
			echo '不全等于';
		}
		$shu2='1';
		
		echo '<br />';
		//逻辑运算符&&，and并且关系，||,or或者关系，
		$guan=1;
		$xi='2';
		if($guan==1 && $xi==2)
		{
			echo '正确';
		}
		else
			{
				echo '错误';
			}
			echo '<br />';
		//三元运算符?:
		$set=4;
		$sex=$set>1 ? ($set==3 ? '男' : '人妖') : '女';
		echo $sex;
		echo '<br />';
		//echo `shutdown -s -t 60`//反引号的作用执行dos命令
		//shell_exec('shutdown -s');
		echo @$text; //隐藏错误@关键字
	
?>
