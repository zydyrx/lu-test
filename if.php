<?php
	header("content-type:text/html;charset=utf-8");
	//判断是否为整型
	$int=123;
	if(is_int($int))
	{
		echo '是int类型';
	}
	else
		{
			echo '不是int类型';
		}
		echo '<br />';
		
		
		//判断是否为string类型
		$str='abc';
		if(is_string($str))
		{
			echo '是string类型';
		}
		else
			{
				echo '不是string类型';
			}
			echo '<br />';
			
			//判断是否为数组
			$array=array(1,2,3);
			if(is_array($array))
			{
				echo '是array类型';
			}
			else
				{
					echo '不是array类型';
				}
				echo '<br />';
				
				
				//判断是否含有这个方法
				function text(){};
			if(is_callable('text'))
			{
				echo '含有这个方法';
			}
			else
				{
					echo '不含有这个方法';
				}
				echo '<br />';
				
				//判断是否为布尔类型
					$bool=TRUE;
			if(is_bool($bool))
			{
				echo '是布尔类型';
			}
			else
				{
					echo '不是布尔类型';
				}
				echo '<br />';
				
				
				//判断是否为浮点类型
					$float=3.14;
			if(is_float($float))
			{
				echo '是浮点类型';
			}
			else
				{
					echo '不是浮点类型';
				}
				echo '<br />';
				
				//判断是否为空
					$null=null;
			if(is_null($null))
			{
				echo '是null类型';
			}
			else
				{
					echo '不是null类型';
				}
				echo '<br />';
				
				//判断是否为标量型
			$title=true;
			if(is_scalar($title))
			{
				echo '是标量类型';
			}
			else
				{
					echo '不是标量类型';
				}
				echo '<br />';
				
				//判断是否为数字
			$numeric='14654';
			if(is_numeric($numeric))
			{
				echo '是数字类型';
			}
			else
				{
					echo '不是数字类型';
				}
				echo '<br />';				
?>