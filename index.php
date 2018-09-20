<?php
function __autoload($className){

//echo "magic/classes/$className.php";

    include_once "magic/classes/$className.php";
}
//$aObj=new ABC();
//echo "<pre>";
//print_r($aObj);
//echo $abc->data;

//$aObj->neha='hello';
//print_r($aObj);


//$abc->abc='new variable added';
//echo $aObj->abc;
//$m_call=new ABC();
//$m_call=new MCALL();
//$m_call->call('para1','para2');
//CALLSTATIC::create('param1','param2S');
$neha=new NEHAUNSET();
//var_dump(isset($neha->xyz));
//$array=['x'=>'abc','y'=>'xyz'];
unset($neha->abc);
//echo "$neha->xyz";
$neha->printData();
//print_r($array);
