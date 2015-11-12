<?php #this script add the subscriber details in database
	require_once("../model/classes/retrieval.php");
	require_once("../model/classes/database.php");
?>
<?php
	$tb_no=$_SESSION['tb_no'];
	$sub_name=$_SESSION['sub_name'];
	$nikshaya_no=$_SESSION['nikshaya_no'];
	$date_of_test=$_REQUEST['date_of_test'];
	$lab_no=$_REQUEST['lab_no'];
	$x_ray=$_REQUEST['x_ray'];
	$weight=$_REQUEST['weight'];
	$result=$_REQUEST['result'];

	//Establishing Connections
	$rt=new retrival();
	$rt->lab_xray();
	$db=new Database();
	$db->connect();
	#write query	

?>