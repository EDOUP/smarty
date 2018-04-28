<?php
	require('../smarty/Smarty.class.php');
	
	$smarty=new Smarty();
	//五配置
	$smarty->left_delimiter ="{";//左定界符
	$smarty->right_delimiter ="}";//右定界符
	$smarty->template_dir ="tpl";//html模板的地址
	$smarty->compile_dir="template_c";//模板生成文件
	$smarty->cache_dir="cache";//缓存
	//开启缓存的另外两个配置,通常不用，了解项
	//$smarty->caching =true;//开启缓存
	//$smarty->cache_lifetime=120;//缓存时间
	
	// $smarty->assign('articletitle','文章标题');
	// $arr = array('articletitle'=>array('title'=>'smarty的学习','author'=>'小明'));
	// $smarty->assign('arr',$arr);
	
	//$smarty->assign('articletitle','i ate an apple');
	//{$articletitle|captical} //首字母大写调节器
	//{$articletitle|lower} //小写
	//{$articletitle|upper} //大写
	//{$articletitle|nl2br}  //换行
	//{$articletitle|cat:" yesterday"} //连接调节器
	//{$articletitle|default:"notitle"} //无参
	
	//$smarty->assign('time',time());//时间
	// {$time|date_format:"%B %e %Y %H %M %S"} 
	//{"Y-m-d"|date:$time}  //内置函数
	
	//$smarty->assign('url','www.baidu.com');
	//{$url|escape:"url"} //转码
	
	//eq(==) neq(!==) gt(>) it(<) 
	//section : name loop 
	//foreach : item from   foreachelse 或 as 
	
	//{include file="" sitename}
 	
	// class My_Object{
		// function meth1($params){
			// return $params[0].'已经'.$params[1];
		// }
	// }
	// $myobj=new My_Object();
	// $smarty->assign('myobj',$myobj);
	// {$myobj->meth1(array('苹果','熟了'))} 
	
	// function test($params){
		// $p1 = $params['p1'];
		// $p2 = $params['p2'];
		// return '传入的参数1值为'.$p1.'传入的参数2值为'.$p2;
	// }
	// $smarty->registerPlugin('function','f_test','test');
	// {f_test p1='abc' p2='def'} 

	$smarty->display('test.tpl');//展示模板
?>