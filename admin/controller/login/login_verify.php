<?php
	#this script contains the code for verifying the login of admin
	include("../model/classes/database.php");

?>
<?php
	
	if(isset($_POST['loginUserId']) && isset( $_POST['loginPassword']))
	{

		$db= new Database();
		$db->connect();
		
		$userId=$_POST['loginUserId'];
		$password=md5($_POST['loginPassword']);
		
		$loginQuery="SELECT * from users where user_id='".$userId."' and password='".$password."'";
		$loginQueryResult=$db->selectData($loginQuery);
		$db->disconnect();
		
		if(mysqli_num_rows($loginQueryResult)>0)
		{
			$loginQueryResult=mysqli_fetch_assoc($loginQueryResult);
			if($loginQueryResult['type_of_user']=='0')
			{
				session_start();
				$_SESSION['param1']=$loginQueryResult['user_id'];
				$_SESSION['param2']=time();
				echo "admin";
			}
			else if($loginQueryResult['type_of_user']=='2')
			{
				session_start();
				$_SESSION['param1']=$loginQueryResult['user_id'];
				$_SESSION['param2']=time();
				echo "sub";
				//---------Getting name of the subscriber............
				$db->connect();
				$query="SELECT * from subscribers where user_id='".$loginQueryResult['user_id']."'";
				$result=$db->selectData($query);
				$row = mysqli_fetch_array($result);
				$db->disconnect();
				$_SESSION['username']=$row['sub_name'];
				
			}
			else if($loginQueryResult['type_of_user']=='1')
			{
				$_SESSION['param1']=$loginQueryResult['user_id'];
				$_SESSION['param2']=time();
				echo "lab";
			}


			else
				echo "With access";
		}
		else
			echo "No access";
	}
?>
