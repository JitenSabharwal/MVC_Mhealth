<?php 
// This class is for retrieving values from database
//Docter from docter table
//subscriber from subscriber table
//lab_sputum from Sputum report  
//lab_xray from Xray report  
	require_once("database.php");
?>
<?php
	class retrieval 
	{
			private $id;
			private $id_no;
			private $row;			
			function docter()
			{
				$db=new database();
				$db->connect();			
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from med_officials");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="DOC00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 4))==99999)
				          {
					            $str=substr($this->row['maximum'],0,2);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				$db->disconnect();
				return $this->id_no;
			}
			function subscriber()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from subscribers");
				
					while($this->row=mysqli_fetch_array($this->id))
					{
						if(empty($this->row['maximum']))
				        {
				          $this->id_no="SUB00001";
				        }
				        else
				        {
					          if(intval(substr($this->row['maximum'], 4))==99999)
					          {
						            $str=substr($this->row['maximum'],0,2);
						            ++$str;
						            $this->id_no=$str.'00001';
					           
					          }
				          else
				           		 $this->id_no=++$this->row['maximum'];
				        }
				  }
				$db->disconnect();
				return $this->id_no;
			}
			function lab_sputum()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from __To be filled__");
				
					while($this->row=mysqli_fetch_array($this->id))
					{
						if(empty($this->row['maximum']))
				        {
				          $this->id_no="SLAB00001";
				        }
				        else
				        {
					          if(intval(substr($this->row['maximum'], 4))==99999)
					          {
						            $str=substr($this->row['maximum'],0,2);
						            ++$str;
						            $this->id_no=$str.'00001';
					           
					          }
				          else
				           		 $this->id_no=++$this->row['maximum'];
				        }
				  }
				$db->disconnect();
				return $this->id_no;	

			}
			function lab_xray()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from __To be filled__");
				
					while($this->row=mysqli_fetch_array($this->id))
					{
						if(empty($this->row['maximum']))
				        {
				          $this->id_no="XRAY00001";
				        }
				        else
				        {
					          if(intval(substr($this->row['maximum'], 4))==99999)
					          {
						            $str=substr($this->row['maximum'],0,2);
						            ++$str;
						            $this->id_no=$str.'00001';
					           
					          }
				          else
				           		 $this->id_no=++$this->row['maximum'];
				        }
				  }
				$db->disconnect();
				return $this->id_no;	
	
			}
			function contact_person()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from subscriber_contactpersons");
				
					while($this->row=mysqli_fetch_array($this->id))
					{
						if(empty($this->row['maximum']))
				        {
				          $this->id_no="CP00001";
				        }
				        else
				        {
					          if(intval(substr($this->row['maximum'], 4))==99999)
					          {
						            $str=substr($this->row['maximum'],0,2);
						            ++$str;
						            $this->id_no=$str.'00001';
					           
					          }
				          else
				           		 $this->id_no=++$this->row['maximum'];
				        }
				  }
				$db->disconnect();
				return $this->id_no;	
	
			}
			function dot_provider()
			{
				$db=new database();
				$db->connect();
				$this->id=mysqli_query($db->connection,"SELECT max(user_id) as maximum from subscriber_dotprovider");
				
					while($this->row=mysqli_fetch_array($this->id))
					{
						if(empty($this->row['maximum']))
				        {
				          $this->id_no="DOT00001";
				        }
				        else
				        {
					          if(intval(substr($this->row['maximum'], 4))==99999)
					          {
						            $str=substr($this->row['maximum'],0,2);
						            ++$str;
						            $this->id_no=$str.'00001';
					           
					          }
				          else
				           		 $this->id_no=++$this->row['maximum'];
				        }
				  }
				$db->disconnect();
				return $this->id_no;	
	
			}
							
	}
		
?>