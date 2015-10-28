<?php
# To find the patient---
	require_once("../classes/retrieval.php");
	require_once("../classes/database.php");

	if(isset($_POST['nikshay_no']))
	{
		$nikshay_no=$_POST['nikshay_no'];

		$db=new Database();
		$db->connect();

		$query="SELECT * from subscribers where Nikshay_no = '$nikshay_no' ";
		$result=$db->selectData($query);
		if(mysqli_num_rows($result)>0)
		{	
			while($row=mysqli_fetch_array($result))
			{
				session_start();

				$_SESSION['sub_name'] = $row['sub_name'];
				$_SESSION['nikshay_no'] = $row['Nikshay_no']; 
			}
			$row=mysqli_fetch_array($result);
			echo json_encode($row);

		}
		else
		{
			echo "0";
		}
		
		$db->disconnect(); 
	}
	echo "reached";
?>