<?php
	class testController{
		function show(){
			//$testModel =new testModel();
			$testModel=M('test');
			$data =$testModel -> get();
			//$testView =new testView();
			$testView=V('test');
			$testView -> display($data);
		}
	}
?>