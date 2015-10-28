<?php #this script add the subscriber details in database
	require_once("../classes/retrieval.php");
	require_once("../classes/database.php");
?>
<?php
	$tb_no=$_REQUEST['tb_no'];
	$sub_name=$_REQUEST['sub_name'];
	$nikshaya_no=$_REQUEST['nikshaya_no'];
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