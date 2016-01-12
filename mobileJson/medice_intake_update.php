<?php
	include("../classes/database.php");
?>
<?php
	if(isset($_REQUEST['intake']))
	{
		# write code to decode json
		//$intake=json_decode($_REQUEST['intakemedicine'],true);
		$nikshay_no=$_REQUEST['Nikshay_no'];
		#$query="UPDATE medicine_intake set medicine='1' where nikshay_no='$nikshay_no'";
		$query="INSERT INTO  medicine_intake (Nikshay_no,intake) VALUES('$nikshay_no','True')";

		$db= new Database();
		$db->connect();
		if(!empty($db->insertData($query)))
				echo "1";
		else
				echo "0";
		$db->disconnect();
	}
?>