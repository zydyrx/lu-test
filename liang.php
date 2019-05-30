<?php
header("content-type:text/html;charset=utf-8");
	//常量检查函数
	const pai=3.14;
	if(defined('pai'))
	{
		echo '含有此常量';
	}
	else
		{
			echo '没有此常量';
		}
		echo '<br />';
		
	//变量检查函数
	$a=TRUE;
	if(isset($a))
	{
		echo '此变量不为空啊';
	}
	else
		{
			echo '此变量为空';
		}
		
		//判断为空
			echo '<br />';
		$emputy='';
		if(empty($emputy))
		{
			echo '为空';
		}
		else
			{
				echo '不为空';
			}
			
?>
