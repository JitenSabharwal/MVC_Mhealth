<?php #this script add the subscriber details in database
	require_once("../model/classes/database.php");
	require_once("../model/classes/retrieval.php");
?> 
<?php
	if(isset($_POST['subName']))
	{
		$TB_no=$_REQUEST['tb_no'];
		$TB_unit=$_REQUEST['tb_unit'];
		$Nikshay_no=$_REQUEST['nikshaya_no'];
		$Name_phi=$_REQUEST['name_phi'];
		
		$subName=$_REQUEST['subName'];
		$subSex=$_REQUEST['subSex'];
		$subDOB=$_REQUEST['subDOB'];
		$subEducation=$_REQUEST['subEducation'];
		$subOccupation=$_REQUEST['subOccupation'];
		$subAddress=$_REQUEST['subAddress'];
		$subCity=$_REQUEST['subCity'];
		$subState=$_REQUEST['subState'];
		$subContact=$_REQUEST['subContact'];
		
		$realtionship=$_REQUEST['realtionship'];
		$c_subName=$_REQUEST['csubName'];
		$c_subAddress=$_REQUEST['csubAddress'];
		$c_subCity=$_REQUEST['csubCity'];
		$c_subState=$_REQUEST['csubState'];
		$c_subContact=$_REQUEST['csubContact'];
		
		$d_subName=$_REQUEST['dsubName'];
		$d_subAddress=$_REQUEST['dsubAddress'];
		$d_subCity=$_REQUEST['dsubCity'];
		$d_subState=$_REQUEST['dsubState'];
		$d_subContact=$_REQUEST['dsubContact'];
		
		$doc_id=$_REQUEST['sub_doc'];

		$dot_id="1";
		
		//$tb_type=$_REQUEST['tb_type'];
		$sub_type=$_REQUEST['sub_type'];
		$PhaseofTreatment=$_REQUEST['PhaseofTreatment'];
		$DiseasesClassification=$_REQUEST['DiseasesClassification'];
		//$subscriberDisease=$_REQUEST['subscriberDisease'];
		$sub_BloodGroup=$_REQUEST['bg_type'];
		//database
			$db=new Database();
			$db->connect();
		//Generation of ID
			$rt=new retrieval();
			$sub_id=$rt->subscriber();
			$con_id=$rt->contact_person();
			$dot_id=$rt->dot_provider();
		//Adding Contact Person details
		
		$query="INSERT INTO subscriber_contactpersons( user_id, contact_name, contact_contact, contact_address, contact_city, contact_state, contact_relation) VALUES('$con_id','$c_subName','$c_subContact', '$c_subAddress',  '$c_subCity', '$c_subState', '$realtionship')";
		if(empty($db->insertData($query)))
			{
				echo "Error in Contact";
			}
		else
		 {
			$query="INSERT INTO subscriber_dotprovider(user_id,dot_name,dot_address,dot_city,dot_state,dot_contact)
					VALUES('$dot_id','$d_subName','$d_subAddress','$d_subCity','$d_subState','$d_subContact')";
			if(empty($db->insertData($query)))
			{
				echo "Error in Dot";
			}
			else
			{
				$query="INSERT INTO subscribers (user_id , contact_person_id, dot_id , doc_id ,TB_no ,TB_unit ,Nikshay_no ,Name_phi ,sub_name ,sub_sex ,sub_DOB ,sub_occupation ,sub_contact ,sub_address ,sub_city ,sub_state ,sub_type ,sub_blood_group )  
					VALUES ( '$sub_id' , '$con_id' , '$dot_id' , '$doc_id' , '$TB_no' , '$TB_unit' , '$Nikshay_no' , '$Name_phi' , '$subName' , '$subSex' ,'$subDOB','$subOccupation','$subContact','$subAddress','$subCity','$subState','$sub_type','$sub_BloodGroup')";
				
				if(empty($db->insertData($query)))
					{
						echo "Error in user";
					}
					else
					{
						$pass=md5($sub_id);
						$query="insert into users(user_id,password,type_of_user,user_verified) VALUES('$sub_id','$pass','2','2')";
						$db->insertData($query);	
						$_SESSION['image']=$Nikshay_no;
						$_SESSION['image_path']="uploads/subscriber/";
						$_SESSION['image_type']="profile";
						$_SESSION['image_user']=$sub_id;
					}		
			}
			$db->disconnect();
		}
	}
	else
	{
		echo "Connection failed";
	}
?>