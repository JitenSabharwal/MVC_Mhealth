
<?php
# For viewing Users Profile
	require_once("../classes/database.php");
	session_start();
?>
<?php
	$db = new Database();
	$db->connect();
	$user = $_SESSION['param1'];
	$query = "SELECT * FROM subscribers where user_id ='$user'";

	$result=$db->selectData($query);
	$row=mysqli_fetch_array($result);

	$query="SELECT * from subscriber_dotprovider where user_id='".$row['dot_id']."'";
	$result=$db->selectData($query);
	$dot=mysqli_fetch_array($result);

	$query="SELECT * from subscriber_contactpersons where user_id='".$row['contact_person_id']."'";
	$result=$db->selectData($query);
	$con=mysqli_fetch_array($result);
	 ?>
	 <html>
	 <body>
	 	<br>
	 	<br>
	 	<table class="table table-hover" >
	 		<tbody>
	 		<tr>
	 			<td>Name</td><td><?php echo $row['sub_name'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Nikshay Number</td><td><?php echo $row['Nikshay_no'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Tb Number</td><td><?php echo $row['TB_no'];?></td>
	 		</tr>
	 		<tr>
	 			<td>PHI</td><td><?php echo $row['Name_phi'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Gender</td><td><?php echo $row['sub_sex'];?></td>
	 		</tr>
	 		<tr>
	 			<td>DOB</td><td><?php echo $row['sub_DOB'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Occupation</td><td><?php echo $row['sub_occupation'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Contact Address</td><td><?php// echo $row[''];?></td>
	 		</tr>
	 		<tr>
	 			<td>Type of Patient    </td><td><?php echo $row['sub_type'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Name of Dot Provider  </td><td><?php echo $dot['dot_name'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Contact Person Name   </td><td><?php echo $con['contact_name'];?></td>
	 		</tr>
	 		<tr>
	 			<td>Relationship </td><td><?php //echo $row[''];?></td>
	 		</tr>
	 		<tr>
	 			<td>Contact Person Name   </td><td><?php //echo $row[''];?></td>
	 		</tr>
	 	</tbody>
	 	</table>
	 </body>