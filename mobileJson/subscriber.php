<?php
	#this script provides the details of subscribers in JSON
include("../classes/database.php");
	if(isset($_GET['user_id']))
	{
		$db=new Database();
		$db->connect();
		$query="select * from subscribers where user_id='".$_GET['user_id']."'";
		$result=$db->selectData($query);
		$result=mysql_fetch_assoc($result);
		header("Content-type : application/json");
		echo json_encode($result);
	}

?>