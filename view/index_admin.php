<?php
session_start();
if(isset($_SESSION['param1']))
{
	
}	
else
{
	header("location:login.php");
	$_SESSION['param1']=nil;
}
?>
<!DOCTYPE html>
<html>
<head>
	 <?php 
        include "../../MVC_Mhealth/asset/include/link.php";
	  ?>
	<title>Admin Panel | SRM mHealth</title>

	<!-- css files -->
	  
	<!-- js files to be included -->


	<!-- inline js scripting -->
	</head>
<body>
	<header class="navbar navbar-inverse hero" role="banner" style="background:indigo;">
  		<div class="container">
    		<div class="navbar-header">
		      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
      			<a href="index.html" class="navbar-brand">mPower</a>
    		</div>
    		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      			<ul class="nav navbar-nav navbar-right">
      				<li class="dropdown">
        				<a href="#" class="home">Home</a>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Subscriber <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="addSubscriber" href="#">Add Subscriber</a></li>
							<li><a class="search_sub" href="#">View Subscriber</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Test<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#" class="sputum test">Lab Sputum Test</a></li>
							<li><a href="#" class="xray test">Lab Xray Test</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					More<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#">Support</a></li>
							<li><a href="#">Contact us</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					<?php if(isset($_SESSION['user'])) echo $_SESSION['username']; else echo "No User"; ?><b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#dropdown1" data-toggle="tab">Profile</a></li>
							<li><a href="#dropdown3" data-toggle="tab">Settings</a></li>
      						<li class="divider"></li>
    						<li><a class="logout" href="#" data-toggle="tab"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>


				        </ul>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>
  <div class="responseHolder">
          <!--TEST-->
          <!--Sputum Test-->
          <div class="sputum_test_wrapper hidden" style="margin-left:50px;">
                <h2><u>Sputum Lab</u></h2>
                <form role="form" class="suptum_test"  method="post"  name="sputum">
                        <div class="form-group col-md-3" style="clear:both;">
                        <label for="InputName">TB No.:</label>
                        <?php echo @$_SESSION['tb_no'];?>
                      </div>

                      <div class="form-group col-md-3" style="clear:both;">
                        <label for="InputName">Nikshay No. : </label>
                        <?php echo @$_SESSION['nikshay_no'];?>
                      </div>
  
                        <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Paitent Name : </label>
                        <strong style="text-transform:capitalize"><?php echo @$_SESSION['sub_name'];?></strong>
                       </div>
                      <div style="clear:both;">
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Date of Test</label>
                        <input type="date" class="form-control" placeholder="Name of PHI" name="date_of_test" required>
                      </div>
                      </div>
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Lab No : </label>
                        <input type="text" class="form-control" placeholder="Lab No." name="lab_no" required>
                      </div>
                      
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">DMC : Add the photo when you submit </label>
                      </div>
                     
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Result : </label>
                        <input type="text" class="form-control" placeholder="Results" name="result" required>
                      </div>
                      
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Weight : </label>
                        <input type="text" class="form-control" placeholder="Weight in kg" name="weight" required>
                      </div>
                     <div class="form-group" style="clear:both">
                        <input type="submit" class="btn btn-primary" value="dmc" name="subsubmit">
                    </div>
                </form>
          </div>
          
          <!--Xray Test-->
          <div class="xray_test_wrapper hidden" style="margin-left:50px;">
            <h2><u>Xray Lab</u></h2>
              <form role="form" class="xray_test"  method="post"  name="xray">
                     <div class="form-group col-md-3" style="clear:both;">
                        <label for="InputName">TB No.:</label>
                        <strong id="xray_tb_no"></strong>
                    </div>

                    <div class="form-group col-md-3" style="clear:both;">
                      <label for="InputName">Nikshay No. : </label>
                        <strong id="xray_nik_no"></strong>
                    </div>

                    <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Paitent Name : </label>
                        <strong class="xray_subname"style="text-transform:capitalize">
                        </strong>
                   </div>
                   <div style="clear:both;">
                      <div class="form-group col-md-2" style="clear:both;" >
                        <label for="InputName">Date of Test</label>
                        <input type="date" class="form-control" placeholder="Click to Enter the Date of the test" name="date_of_test" required>
                      </div>
                   </div>
                  <div class="form-group col-md-3" style="clear:both;" >
                    <label for="InputName">Lab No : </label>
                    <input type="text" class="form-control" placeholder="Lab No." name="lab_no" required>
                  </div>
                  
                  <div class="form-group" style="clear:both;" >
                    <label for="InputName" class="col-sm-1" > Xray :</label>
                    <input type="file" name="diy_doc_file" id="upload_diy_doc_file" class="col-sm-2"/>
                  </div>
                 
                  <div class="form-group col-md-3" style="clear:both;" >
                    <label for="InputName">Result : </label>
                    <input type="text" class="form-control" placeholder="Results" name="result" required>
                  </div>
                  
                  <div class="form-group col-sm-2" style="clear:both;" >
                    <label for="InputName" >Weight : </label>
                    <input type="Number" min=0 class="form-control " placeholder="Weight in kg" name="weight" required>
                  </div>
                  <div class="form-group col-sm-3" style="clear:both">
                    <input type="submit" class="btn btn-primary" value="dmc" name="subsubmit">
                  </div>
            </form>        
          </div>
          <!--End TEST-->
          <!--New Subscruber form-->
              <div class="subscriber_wrapper hidden">
                    <h2 style="margin-left:50px;"><u>New Subscriber</u></h2>
                      
                      <form role="form" class="register" method="post" name="patientAddForm">
                             
                          <div style="margin-left:50px;">
                                <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName">TB No.</label>
                                <input type="text" class="form-control" placeholder="Enter TB NO." style="width:250px" name="tb_no">
                              </div>

                                <div class="form-group col-md-3" style="width:200px" >
                                  <label for="InputName">TB Unit</label>
                                  <input type="text" class="form-control" placeholder="Enter TB Unit" name="tb_unit" style="width:250px" >
                                </div>
                              <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName">Nikshay No.</label>
                                <input type="text" class="form-control" placeholder="Nikshay No." name="nikshaya_no" >
                              </div>

                              <div class="form-group col-md-3" style="width:250px" >
                                  <label for="InputName"> Name of PHI</label>
                                  <input type="text" class="form-control" placeholder="Name of PHI" name="name_phi" >
                              </div>
                             

                              <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName" style="font-size:20px"><u>Personal Details</u></label>
                              </div>
         
                              <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName">Name</label>
                                <input type='text' name='subName' class="form-control" placeholder="Enter Name" class='name text input' maxlength="50"  >     
                              </div>

                               <div class="form-group col-md-3">
                                
                                  <label for="InputName">Gender</label>
                                  <select class="form-control" name='subSex'  style="width:150px" >
                                    <option>Select</option>
                                      <option value='M'>Male</option>
                                      <option value='F'>Female</option>
                                      
                                  </select>
                              </div>
                              
                               <div class="form-group col-md-3" style="clear:both;">
                                  <label for="InputEmail">Date of Birth</label>
                                  <input type="date" name="subDOB" class="dob date input" >
                              </div>
                              <div class="form-group col-md-3"  style="clear:both">
                                <label for="InputEmail">Education</label>
                                <select class="form-control" name="subEducation" class='occupation dropdown input' >
                                  <option value=''>Select Occupation...</option>
                                  <option value='Primary education'>Primary Education</option>
                                  <option value='Secondary Education'>Secondary Education</option>
                                  <option value='Diploma'>Diploma</option>
                                  <option value='Professional degree'>Professional degree</option>
                                </select>
                              </div>
                               <div class="form-group col-md-3"  >
                                    <label for="InputEmail">Occupation</label>
                                    <select class="form-control" name="subOccupation" class='occupation dropdown input' >
                                      <option value=''>Select Occupation...</option>
                                      <option value='farmer'>Farmer</option>
                                      <option value='bsnsman'>Bussinessman</option>
                                      <option value='shpkpr'>Shopkeeper</option>
                                      <option value='dwagelbr'>Daily Wages Labour</option>
                                      <option value='clerk'>Clerk</option>
                                  </select>
                                </div>
                        </div>
                     
                     
                         <div style="clear:both">

                                <div style="margin-left:50px"  >
                                    <div class="form-group col-md-3" style="clear:both">
                                        <label for="InputEmail">Present Address</label>
                                        <textarea type="text" class="form-control"  placeholder="Enter Address"  name='subAddress' ></textarea>
                                    </div>

                                    
                                
                        <div class="form-group col-md-3"  >
                                          <label for="InputEmail">Phone No.</label>
                                          <input type='text' name='subContact' class="form-control" class='contact text input' maxlength="10" >
                                      </div>
                              </div>
                          </div>    
                           <div style="clear:both">

                          <div style="margin-left:50px"  >
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">City</label>
                                  <input type="text" class="form-control"  placeholder="Enter City"  name='subCity' >
                              </div>
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">State</label>
                                  <select name='subState' class='state dropdown input form-control' >
                                    <option value=''>Select State...</option>
                                    <option value='Kerala'>Kerala</option>
                                  </select>
                              </div>
                          </div>

                    </div>
                     
                    
                      <div style="margin-left:50px"  >
                     
                         <div class="form-group col-md-3" style="clear:both;">
                                    <label for="InputName" style="font-size:20px"><u>Contact Person Details</u></label>
                          </div>
                     </div>
                          <div style="margin-left:50px"  >
                    
                    <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName">Name</label>
                    <input type='text' name='csubName' class="form-control" placeholder="Enter Name" class='name text input' maxlength="50" >     
                              </div>
                             </div>  
                               <div style="clear:both">

                          <div style="margin-left:50px"  >
                              <div class="form-group col-md-3" style="clear:both">
                                  <label for="InputEmail">Present Address</label>
                                  <textarea type="text" class="form-control"  placeholder="Enter Address"  name='csubAddress' ></textarea>
                              </div>

                              
                          
                  <div class="form-group col-md-3"  >
                                    <label for="InputEmail">Phone No.</label>
                                    <input type='text' name='csubContact' class="form-control" class='contact text input' maxlength="10" > 
                                </div>
                        </div>
                    </div>    
                     <div style="clear:both">

                          <div style="margin-left:50px"  >
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">City</label>
                                  <input type="text" class="form-control"  placeholder="Enter City"  name='csubCity' >
                              </div>
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">State</label>
                                  <select name='csubState' class='state dropdown input form-control' >
                      <option value=''>Select State...</option>
                      <option value='Kerala'>Kerala</option>
                    </select>
                              </div>
                     
                        <div class="form-group col-md-3" style="clear:both">
                            <label for="InputEmail">Relationship</label>
                            <select name='realtionship' class='state dropdown input form-control' >
                                    <option value=''>Select Relationship...</option>
                                    <option value='None'>None</option>
                                    <option value='Brother'>Brother</option>
                                    <option value='Sister'>Sister</option>
                                    <option value='Cousin'>Cousin</option>
                                  </select>
                          </div>
                        </div>
                          </div>

                          <!--dot provider-->   


                      <div style="margin-left:50px"  >
                     
                         <div class="form-group col-md-3" style="clear:both;">
                                    <label for="InputName" style="font-size:20px"><u>dot Provider</u></label>
                          </div>
                </div>
                          <div style="margin-left:50px"  >
                    
                    <div class="form-group col-md-3" style="clear:both;">
                                <label for="InputName">Name</label>
                    <input type='text' name='dsubName' class="form-control" placeholder="Enter Name" class='name text input' maxlength="50" >     
                              </div>
                             </div>  
                               <div style="clear:both">

                          <div style="margin-left:50px"  >
                              <div class="form-group col-md-3" style="clear:both">
                                  <label for="InputEmail">Present Address</label>
                                  <textarea type="text" class="form-control"  placeholder="Enter Address"  name='dsubAddress' ></textarea>
                              </div>

                              
                          
                  <div class="form-group col-md-3"  >
                                    <label for="InputEmail">Phone No.</label>
                                    <input type='text' name='dsubContact' class="form-control" class='contact text input' maxlength="10" >
                                </div>
                        </div>
                    </div>    
                     <div style="clear:both">

                          <div style="margin-left:50px"  >
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">City</label>
                                  <input type="text" class="form-control"  placeholder="Enter City"  name='dsubCity' >
                              </div>
                              <div class="form-group col-md-3" >
                                  <label for="InputEmail">State</label>
                                  <select name='dsubState' class='state dropdown input form-control' >
                      <option value=''>Select State...</option>
                      <option value='Kerala'>Kerala</option>
                    </select>
                              </div>
                          </div>
                    </div>
                    <!--Consulting Docter -->   


                      <div style="margin-left:50px"  >
                     
                         <div class="form-group col-md-3" style="clear:both;">
                                    <label for="InputName" style="font-size:20px"><u>Consulting Docter</u></label>
                          </div>
                        <div style="clear:both">
                
                           <div class="form-group col-md-3" >
                                  <label for="InputEmail">Name of Docter</label>
                                  <select name='sub_doc' class='state dropdown input form-control' >
                      <option value=''>Select Id...</option>
                      <option value='DOC0001'>Khurana</option>
                    </select>
                              </div>
                          </div>

                </div>
                      <!--MEdical -->   


                      <div style="margin-left:50px"  >
                     
                           <div class="form-group col-md-3" style="clear:both;">
                                    
                                    <label for="InputName" style="font-size:20px"><b><u>Medical Details</u></b></label>
                            </div>
                            
                            <div style="clear:both">
                  
                                 
                                <div class="form-group col-md-3" >
                                      
                                      <label for="InputEmail">Type of Patient</label>
                                      
                                      <select name='sub_type' class='state dropdown input form-control' >
                                          <option value=''>Select Type of Patient...</option>
                                          <option value='New'>New</option>
                                          <option value='Transfer_in'>Transfer In</option>
                                          <option value='Treatment_after_lost_to_follow_up'>Treatment after lost to follow up</option>
                                          <option value='Recurrent'>Recurrent</option>
                                          <option value='Treatment_after_failure'>Treatment after failure</option>
                                          <option value='Other'>Other</option>
                                      </select>

                                </div>
                              </div>
                            <div style="clear:both">

                                <div class="form-group col-md-3" >
                                      
                                      <label for="InputEmail">Blood Group</label>
                                      
                                      <select name='bg_type' class='state dropdown input form-control' >
                                          <option value=''>Select the blood group of Patient...</option>
                                          <option value='A+'>A+</option>
                                          <option value='A-'>A-</option>
                                          <option value='B+'>B+</option>
                                          <option value='B-'>B-</option>
                                          <option value='AB+'>AB+</option>
                                          <option value='AB-'>AB-</option>
                                          <option value='O+'>O+</option>
                                          <option value='O-'>O-</option>
                                          
                                      </select>

                                </div>
                                <div class="form-group col-md-3"  >
                                      
                                      <label for="InputEmail">HIV</label>
                                      
                                      <select name='hiv' class='state dropdown input form-control' >
                                          <option value=''>Select Type...</option>
                                          <option value='Yes'>Yes </option>
                                          <option value='No'>No</option>
                                      </select>

                                </div>
                                </div>
                              <div style="clear:both">
                                <div class="form-group col-md-3"  >
                                      
                                      <label for="InputEmail">Phase of Treatment </label>
                                      
                                      <select name='PhaseofTreatment' class='state dropdown input form-control' >
                                          <option value=''>Select Type...</option>
                                          <option value='Intensive'>Intensive </option>
                                          <option value='Continuation Phase'>Continuation Phase</option>
                                      </select>

                                </div>
                                <div class="form-group col-md-3" style="clear:both">
                                      
                                      <label for="InputEmail">Diseases Classification</label>
                                      
                                      <select name='DiseasesClassification' class='state dropdown input form-control' >
                                          <option value=''>Select Type...</option>
                                          <option value='Pulmonary'>Pulmonary</option>
                                          <option value='Extra pulmonary'>Extra pulmonary</option>
                                      </select>

                                </div>
                            </div>                               

                    </div>
                       
                    <div style="margin-left:150px">
                      <div class="form-group" style="clear:both">
                          <input type="submit" class="btn btn-primary" value="submit" name="subsubmit" style="clear:both">
                      </div>
                    </div>
                </form>
          </div>          
  </div>
</body>
</html>