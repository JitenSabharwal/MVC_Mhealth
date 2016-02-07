<?php
	session_start();
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
		case "login":
			if (isset($_REQUEST['user']) && $_REQUEST['user'] != null )//for the logging in the user 
			{
				$result = login();
			}	
		break;
		//To check whether the person logged in correct or not
		case "login_verification":
			if(isset($_SESSION['user']) && $_SESSION['user'] != '' && $_SESSION['user'] != null)
			{
				$db=new Database();
				$db->connect();
				$checkLoginQuery="SELECT * from users where user_id='".$_SESSION['param1']."'";
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
			$_SESSION['user'] = null;
			$result = array(
								"status" => 1 ,
								"css"	 => "alert alert-success" ,
								"msg"	 => "Youre are successfully logged out"
							  );
			#session_destroy();
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
			"user_type" => ""
			);
	$db= new Database();
	$db->connect();
	$userId=$_POST['loginUserId'];
	$password=md5($_POST['loginPassword']);
	
	$slq="SELECT * from users where user_id='".$userId."' and password='".$password."'";
	$sql_result=$db->execute($sql);
	$db->disconnect();
	
	if(mysqli_num_rows($sql_result)>0)
	{
		$_SESSION['user']=$sql_result['user_id'];
		$_SESSION['time']=time();
			
		$sql_result=mysqli_fetch_assoc($sql_result);
		if($sql_result['type_of_user']=='0')
		{
			$data["user_type"] = "admin";
		}
		else if($sql_result['type_of_user']=='2')
		{
			$data["user_type"] = "sub";
			
		}	//---------Getting name of the subscriber............
		else if($sql_result['type_of_user']=='1')
		{
			$data["user_type"] = "lab";
		}
	}
	else
	{
		$data = array(
			"status" => 0,
			"css"	 => "alert alert-danger",
			"msg"	 => "Log-in Unsuccessfully",
			"user_type" => ""
			);
	}	
	return $data;
}
// $query="SELECT * from subscribers where user_id='".$sql_result['user_id']."'";
// 			$sql_result=$db->selectData($query);
// 			$row = mysqli_fetch_array($sql_result);
// 			$_SESSION['username']=$row['sub_name'];

?>