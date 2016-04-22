<?php
	
	include_once("asset/classes/database.php"); 
?>
<?php
	$result = array(
				"status" => 0,
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
				if(isset($_REQUEST['name']) && $_REQUEST['name'] != '' )
				{	
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$contact = $_REQUEST['contact'];
					$password = md5($_REQUEST['password']);
					$dob = $_REQUEST['dob'];
					$age = $_REQUEST['age'];
					
					$address = $_REQUEST['address'];
					$marital_status = $_REQUEST['marital_status'];
					$blood_group = $_REQUEST['blood_group'];
					
					$rel_name = $_REQUEST['rel_name'];
					$rel_contact = $_REQUEST['rel_contact'];
					
					$doc_name = $_REQUEST['doc_name'];
					$doc_contact = $_REQUEST['doc_contact'];
				
					$sql = "INSERT INTO `user`(`name`,`email`,`contact`,`password`, `dob` , `age` , `address` , `marital_status`, `blood_group` , `rel_name` , `rel_contact` ,`doc_name`, `doc_contact`)
					 		VALUES('$name','$email','$contact','$password', '$dob' , $age , '$address' , '$marital_status' , '$blood_group' , '$rel_name' , '$rel_contact' , '$doc_name' ,'$doc_contact')";
					var_dump($sql);
					$insert = $db->execute($sql);
					var_dump($insert);
					if($insert)
					{
						$result = array(
									"status" => 1 ,
									"css"	 => "alert alert-success" ,
									"msg"	 => "Youre are successfully Registered"
								  );
					}
				}
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
		case "logout":
			$_SESSION['user_id'] = null;
			$result = array(
								"status" => 1 ,
								"css"	 => "alert alert-success" ,
								"msg"	 => "Youre are successfully logged out"
							  );
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
			"msg"	 => "Log-in Successfully",
			"user"	 => array()	
			);
	$userId = trim($_REQUEST['username']);
	$password=md5(trim($_REQUEST['password']));
	$sql="SELECT * FROM `user` WHERE `email` ='$userId' and `password` ='$password'";
	$db= new Database();
	$db->connect();
	$db->execute($sql);
	$sql_result=mysqli_fetch_assoc();
	$db->disconnect();

	if(!empty($sql_result))
	{	
		$_SESSION['user_id']=$sql_result['id'];
		$_SESSION['time']=time();
		$data['user'] = $sql_result;
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