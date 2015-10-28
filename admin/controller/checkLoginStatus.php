<?php #this script checks whether there is an active session of admin user or not 
	include("./classes/database.php");
?>
<?php
	session_start();

	if(isset($_SESSION['param1']))
	{
		$db=new Database();
		$db->connect();
		$checkLoginQuery="select * from users where user_id='".$_SESSION['param1']."'";
		$checkLoginQueryResult=$db->selectData($checkLoginQuery);							//verifying if the session made still exist or not
		if(mysqli_num_rows($checkLoginQueryResult)==0)
			echo "0";
		else
			echo "1";
	}
	else
		echo "0";
?>