<?php
	include("../classes/database.php");
?>
<?php
	if(isset($_POST['intakemedicine']))
	{
		# write code to decode json
		$intake=json_decode($_POST['intakemedicine'],true);
		$nikshay_no=$intake['nikshay_no'];
		#$query="UPDATE medicine_intake set medicine='1' where nikshay_no='$nikshay_no'";
		$query="INSERT INTO  medicine_intake (Nikshay_no,intake) VALUES('$nikshay_no','True')";

		$db= new Database();
		$db->connect();
		if(!empty($db->insertData($query)))
				echo true;
		else
				echo false;
		$db->disconnect();

	}
?>