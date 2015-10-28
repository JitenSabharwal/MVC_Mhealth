 <?php #this script add the subscriber details in database
	require_once("../classes/retrieval.php");
	require_once("../classes/database.php");
?> 
<?php

	if(isset($_POST['fname']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$name=$fname." ".$lname;
		$sex=$_POST['sex'];
		$dob=$_POST['dob'];
		$type=@$_POST['type_doc'];
		$add1=$_POST['add1'];
		$add2=$_POST['add2'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$phn1=$_POST['ph1'];
		$phn2=$_POST['ph2'];
		$email=$_POST['email1'];
		$db=new Database();
		$db->connect();
		$rt=new retrieval();
		$usid=$rt->docter();
		//echo "INSERT INTO med_officials (user_id,official_name,official_sex,official_DOB,official_type,official_contact1,official_contact2,official_address,official_city,official_state,official_email) values ('$usid','$name','$sex','$dob','$type','$phn1','$phn2','$add1','$city','$state','$email'";
		$query="INSERT INTO med_officials (user_id,official_name,official_sex,official_DOB,official_type,official_contact1,official_contact2,official_address,official_city,official_state) values ('$usid','$name','$sex','$dob','$type','$phn1','$phn2','$add1','$city','$state')";
		if(empty($db->insertData($query)))
			{
				echo "Working";
			}
		else {
				echo "The Doctor id is ".$usid;
			}
		$query="insert into users(user_id,password,type_of_user,user_verified) VALUES('$usid','2','$usid','1')";
		$db->insertData($query);
		$db->disconnect();
		//echo "data inserted";
	}
?>
