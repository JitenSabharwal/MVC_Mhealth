<?php
	include_once("../../asset/classes/database.php");
?>
<?php
	$result = array(
				"status" => 0 ,
				"css"	 => "alert alert-danger" ,
				"msg"	 => "Ops! Some Error Occured"
			  );
	$mode =@$_REQUEST['mode'];
	switch($mode)
	{
		case "LOGIN":
			if (isset($_REQUEST['username']) && $_REQUEST['username'] != null )//for the logging in the user 
			{
				$result = login();
			}	
		break;
		//To check whether the person logged in correct or not
		case "REGISTER":
				$db=new Database();
				$db->connect();
				$name = $_REQUEST['name'];
				$email = $_REQUEST['email'];
				$contact = $_REQUEST['contact'];
				$password = md5(trim($_REQUEST['password']));
				$sql = "INSERT INTO `user`(`name`,`email`,`contact`,`password`) VALUES('$name','$email','$contact','$password')";
				$insert = $db->execute($sql);
				$result = array(
								"status" => 1 ,
								"css"	 => "alert alert-success" ,
								"msg"	 => "Youre are successfully Registered"
							  );
		break;	
		case "login_verification":
			if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != '' && $_SESSION['user_id'] != null)
			{
				$db=new Database();
				$db->connect();
				$checkLoginQuery="SELECT * from users where user_id='".$_SESSION['user_id']."'";
				$checkLoginQueryResult=$db->execute($checkLoginQuery);							//verifying if the session made still exist or not
				if(mysqli_num_rows($checkLoginQueryResult)==1)
				{
					$result = array(
								"status" => 1 ,
								"css"	 => "alert alert-success" ,
								"msg"	 => "Its fine"
							  );	
				}	
			}
		break;
		case "PERSONAL":
			//Connection
			$db=new Database();
			$db->connect();

			$name = $_REQUEST['name'];
			$dob = $_REQUEST['dob'];
			$age = $_REQUEST['age'];
			$contact = $_REQUEST['contact'];
			$address = $_REQUEST['address'];
			$blood_group = $_REQUEST['blood_group'];
			$gender = $_REQUEST['gender'];
			$marital_status = $_REQUEST['marital_status'];
			$sql  = "UPDATE user set `name` = '$name' , `dob`= '$dob' ,`age`= '$age' ,`contact`='$contact' , `addredd` = '$address' , `blood_group` = '$blood_group' , `marital_status` = '$marital_status' where `id` = ".$_SESSION['user_id'];
			if($db->execute($sql))
			{
				$result = array(
							"status" => 1 ,
							"css"	 => "alert alert-success" ,
							"msg"	 => "Its fine"
						  );	
			}
		break;
		case "FAMILY":
			//Connection
			$db=new Database();
			$db->connect();

			$rel_name = $_REQUEST['rel_name'];
			$rel_contact = $_REQUEST['rel_contact'];
			$sql  = "UPDATE user set `rel_name` = '$rel_name' , `rel_contact`= '$rel_contact'  where `id` = ".$_SESSION['user_id'];
			if($db->execute($sql))
			{
				$result = array(
							"status" => 1 ,
							"css"	 => "alert alert-success" ,
							"msg"	 => "Its fine"
						  );	
			}
		break;
		case "DOCTOR":
			//Connection
			$db=new Database();
			$db->connect();

			$doc_name = $_REQUEST['doc_name'];
			$doc_contact = $_REQUEST['doc_contact'];
			$sql  = "UPDATE user set `doc_name` = '$doc_name' , `doc_contact`= '$doc_contact'  where `id` = ".$_SESSION['user_id'];
			if($db->execute($sql))
			{
				$result = array(
							"status" => 1 ,
							"css"	 => "alert alert-success" ,
							"msg"	 => "Its fine"
						  );	
			}
		break;
		case "LOGOUT":
			$_SESSION['user_id'] = null;
			$result = array(
								"status" => 1 ,
								"css"	 => "alert alert-success" ,
								"msg"	 => "Youre are successfully logged out"
							  );
		break;
		case "GETDETAIL" :
			$db = new Database();
			$db->connect();
			$uid = $_SESSION['user_id'];
			$result_r = $db->execute("SELECT * from user where id = $uid");	
			$sql_result=mysqli_fetch_assoc($result_r);
			$result = array("status" => 1 , "user" => $sql_result);
		break;
	}
	echo json_encode($result);
?>
<?php
// Function gets the login details of the user
function login()
{
	$data = array(
			"status" => 1,
			"css"	 => "alert alert-success",
			"msg"	 => "Log-in Successfully"
			);
	$userId = trim($_REQUEST['username']);
	$password=md5(trim($_REQUEST['password']));
	$sql="SELECT * from user where email='$userId' and password='$password'";
	$db= new Database();
	$db->connect();
	$result = $db->execute($sql);
	$sql_result;
	if($result)
		$sql_result=mysqli_fetch_assoc($result);
	$db->disconnect();

	if(!empty($sql_result))
	{	
		$_SESSION['user_id']=$sql_result['id'];
		$_SESSION['time']=time();
	}
	else
	{
		$data = array(
			"status" => 0,
			"css"	 => "alert alert-danger",
			"msg"	 => "Log-in Unsuccessfully"
			);
	}	
	return $data;
}
?>