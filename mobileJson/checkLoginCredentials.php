<?php	# this script checks the login credentials for the user and sends JSON reply
include("../classes/database.php");
if(isset($_POST['user_id']) && isset($_POST['password']))
{
	$db=new Database();
	$result=Array();
	$db->connect();
	$query="select user_id,password from users where user_id='".$_POST['user_id']."' and password='".md5($_POST['password'])."'";
	$checkLoginStatus=$db->selectData($query);
	if(mysql_num_rows($checkLoginStatus)==0)
		$result['code']="0";
	else
		$result['code']="1";
	header("Content-type : application/json");
	echo json_encode($result);
}