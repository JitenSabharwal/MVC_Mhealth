<!DOCTYPE HTML>
<html>
<?php
    session_start();
    if(empty($_SESSION['user_id']))
    {
        // echo $_SESSION['user_id'];
        header("location:index.php");
    }

?>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
    <title>mPower</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <?php 
            include "asset/include/link.php";
      ?>
     <!-- Custom CSS -->
    <link href="asset/css/shop-item.css" rel="stylesheet">
     <style>
     .nav-pills li.active 
      {
        background: transparent;
        border-bottom: solid;
        border-width: 3px;
        border-radius: 0;
        border-color: #0BB76C;
        margin-bottom: 0.15em;
        cursor: pointer;
        padding-bottom: .5px;
     }
      .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover
     {
        background-color:transparent;
        color :#0BB76C; 
     }
     .nav-pills li a
      {
        color: #212121;
      }
      .collection_nav 
      {
        border-bottom: 2px solid #ccc;
        display: block;
        margin-bottom: 1em;
        width:100%;
        background-color: white;
      }
       .nav-pills 
      {
        overflow-x: auto;
        overflow-y: hidden;
        display: -webkit-box;
        width:100%;
      }
     </style>   
    </head>
<body>

    <!-- Navigation -->
    <!-- Page Content -->
    <!-- style="width:20%;padding:5px;" -->
    <div class="container">
        
        <nav class="navbar collection_nav navbar-inverse navbar-fixed-top" role="navigation">
           
            <div class=" row pull-right" style="margin-right:5px;">
                <ul class="nav nav-pills" style="display:-webkit-inline-box;">
                    <li id="div-button" class="active main_menu" >
                          <a href="#" data-toggle="tab" aria-expanded="true" item ="home" class="home active">Home</a>                          
                    </li>
                    <li id="div-button" class="main_menu">
                          <a href="#" data-toggle="tab" aria-expanded="true" item ="problem" class="problem">Gynaecological Problems</a>                          
                    </li>
                    <li id="div-button" class="main_menu">
                          <a href="#" data-toggle="tab" aria-expanded="true" item ="period" class="period">Track Periods</a>                          
                    </li>
                    <li id="div-button" class="main_menu"> 
                          <a href="#" data-toggle="tab" aria-expanded="true" item ="diagnose" class="diagnose">Diagnose Yourself</a>                          
                    </li>
                    <li id="div-button" class="main_menu">
                          <a href="#" class="logout" onclick="logout()">Logout</a>                          
                    </li>
                </ul>
            </div>
            
        </nav>
            
            
        <div class="row main_item " id="home">

            <div class="col-sm-3">
                <p class="lead">Patient</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active menu" value="personal_details" onclick="_switch($(this))">Personal Details</a>
                    <a href="#" class="list-group-item menu" value="doctor_details" onclick="_switch($(this))">Doctor Details</a>
                    <a href="#" class="list-group-item menu" value="family_details" onclick="_switch($(this))">Family Details</a>
                </div>
            </div>

            <div class="col-sm-9">
                <div class="col-sm-12">
                    <div class="col-sm-offset-2 col-sm-10">
                        <form id="personal_details">
                            <div class="col-sm-12">
                                <center>
                                    <h3>Personal Details</h3>
                                <div class="edit_personal pull-right btn btn-info"><i class="glyphicon glyphicon-pencil"></i></div>
                                </center>
                                    <hr/>
                            </div>
                            
                            <div class="form-group">
                                <label>Name
                                </label>
                                     <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>DOB
                                </label>
                                  <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" class="form-control" name="age" required>
                                
                            </div>
                            <div class="form-group">
                                <label>Contact
                                </label>
                                <input type="number" class="form-control" name="contact" required>
                            </div>
                            <div class="form-group">
                                <label>Address
                                </label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="form-group">
                                <label>Blood Group
                                </label>
                                <input type="text" class="form-control" name="blood_group" required>
                            </div>
                            <div class="form-group">
                                <label>Marital Status
                                </label>
                                <select class="form-control"  name="marital_status" required>
                                    <option class="form-control">Single</option>
                                    <option class="form-control">Married</option>
                                    <option class="form-control">Divorcee</option>
                                    <option class="form-control">Widow</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-4">
                                <input type="submit" class="form-control btn btn-primary btn-block">
                            </div>
                        </form>
                        <form class="hidden" id="doctor_details">
                          <div class="col-sm-12">
                                <center>
                                    <h3>Doctor Details</h3>
                                <div class="edit_personal pull-right btn btn-info"><i class="glyphicon glyphicon-pencil"></i></div>
                                </center>
                                    <hr/>
                            </div>
                            
                           <div class="form-group">
                                <label>Doctor Name
                                </label>
                                <input type="text" class="form-control" name="doc_name" required>
                            </div>
                            <div class="form-group">
                                <label>Doctor Contact
                                </label>
                                <input type="number" class="form-control" name="doc_contact" required>
                            </div>
                             <div class="form-group col-sm-4">
                                <input type="submit" class="form-control btn btn-primary btn-block">
                            </div>
                            
                        </form>
                         <form class="hidden" id="family_details">
                          <div class="col-sm-12">
                                <center>
                                    <h3>Family Details</h3>
                                <div class="edit_personal pull-right btn btn-info"><i class="glyphicon glyphicon-pencil"></i></div>
                                </center>
                                    <hr/>
                            </div>
                            
                           <div class="form-group">
                                <label>Realtive Name
                                </label>
                                <input type="text" class="form-control" name="rel_name" required>
                            </div>
                            <div class="form-group">
                                <label>Relative Contact
                                </label>
                                <input type="number" class="form-control" name="rel_contact" required>
                            </div>
                             <div class="form-group col-sm-4">
                                <input type="submit" class="form-control btn btn-primary btn-block">
                            </div>
                        </form>
                        <hr/>
                        <div class="form-status"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row main_item hidden" id="problem">
            <div class="col-sm-offset-3">
                
                <div style="box-shadow: 5px 5px 20px grey; margin-bottom:10px;" class="col-sm-8" onclick="disp('poc')"> 
                      <div class="col-sm-4">
                        <img src="http://beyondthebasicshealthacademy.com/wp-content/uploads/2015/12/PCOS.jpg" height="100" width="100" alt="no-image"/>
                      </div>
                      <div class="col-sm-8">
                        <h1 style="color:darkgray">PCOS</h1>
                            <span>Polycystic Ovary Syndrome</span>
                      </div>  
                </div>
                
                <div style="box-shadow: 5px 5px 20px grey;margin-top:50px; margin-bottom:10px;" class="col-sm-8" onclick="disp('bc')"> 
                      <div class="col-sm-4">
                        <img src="http://kidshealth.org/EN/images/headers/K-breastCancer-enHD-AR1.gif" height="90" width="100" alt="no-image"/>
                      </div>
                      <div class="col-sm-8">
                        <h1 style="color:darkgray">Breast Cancer</h1>
                            <span>Breast Cancer</span>
                      </div>  
                </div>
                
                <div style="box-shadow: 5px 5px 20px grey;margin-top:50px; margin-bottom:10px;" class="col-sm-8" onclick="disp('cc')"> 
                      <div class="col-sm-4">
                        <img src="http://image.shutterstock.com/z/stock-vector-teal-white-ribbon-for-cervical-cancer-awareness-campaign-in-january-345350747.jpg" height="100" width="100" alt="no-image"/>
                      </div>
                      <div class="col-sm-8">
                        <h1 style="color:darkgray">Cervical Cancer</h1>
                            <span>Cervical Cancer</span>
                      </div>  
                </div>
                
                <div style="box-shadow: 5px 5px 20px grey;margin-top:50px ; margin-bottom:10px;" class="col-sm-8" onclick="disp('ot')"> 
                      <div class="col-sm-4">
                        <img src="https://edc2.healthtap.com/ht-staging/user_answer/avatars/453116/large/open-uri20121021-2644-ayzaeo.jpeg?1386601903" height="100" width="100" alt="no-image"/>
                      </div>
                      <div class="col-sm-8">
                        <h1 style="color:darkgray">Ovarian Torsion</h1>
                            <span>Ovarian Torsion</span>
                      </div>  
                </div>

                <div style="box-shadow: 5px 5px 20px grey;margin-top:50px; margin-bottom:10px;" class="col-sm-8" onclick="disp('pid')"> 
                      <div class="col-sm-4">
                        <img src="https://s-media-cache-ak0.pinimg.com/236x/24/82/7d/24827d03d85a7d85823299fd38bfbee9.jpg" height="100" width="100" alt="no-image"/>
                      </div>
                      <div class="col-sm-8">
                        <h1 style="color:darkgray">PID</h1>
                            <span>Pelvic Inflammatory Disease</span>
                      </div>  
                </div>
            </div>    
        </div>
            <!-- End of clone -->
        </div>
        <div class="row main_item hidden" id="period">
          <div class="col-sm-offset-2 col-sm-8">
            <form id="period_form" style="margin-top:7%;">
               
               <div class='form-group col-sm-5' style="box-shadow: 5px 5px 20px grey;">
                  <h4>
                    Start Date
                    <i class="glyphicon glyphicon-calendar"></i>
                  </h4>
                  <input type='date' class="form-control" name="start_date" style="margin-bottom:10px;"/>                    
                
              </div>

              <div class='form-group col-sm-offset-1 col-sm-5' style="box-shadow: 5px 5px 20px grey; margin-bottom:10px;">
                  <h4>End Date <i class="glyphicon glyphicon-calendar"></i></h4>
                    <input type='date' class="form-control" name="end_date"  style="margin-bottom:10px;"/>
                    
              </div>
              <div class="col-sm-12">
                <div class='form-group col-sm-offset-3 col-sm-5' style="box-shadow: 5px 5px 20px grey; margin-bottom:10px;margin-bottom:20px;">
                    <h4>Please select your Period Cycle
                    </h4>
                      <select class="form-control" name="cycle" style="margin-bottom:10px;">
                        <?php  
                          for($i = 10 ; $i<= 30 ; $i++)
                            echo "<option>".$i."</option>";
                        ?>
                      </select>
                      
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-offset-3 col-sm-5" style="margin-bottom:20px;">
                   <input type="submit" class="btn btn-primary btn-block">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="col-sm-offset-2 col-sm-8 hidden" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:100px;">
                   <h3> Next predicted Date:</h3>
                </div>
              </div> 
            </form>
          </div>
        </div>
        <div class="row main_item hidden" id="diagnose">
          <div class="col-sm-12">
            <center>
              <h2>Diagnose Yourself</h2>
            </center>
            <hr/>
          </div>
          <div class="col-sm-offset-3 col-sm-8">
            <form id="diagnose-form">
              <div class="col-sm-10">
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                    <div class="form-gorup col-sm-10">
                          Irregular Periods
                    </div>
                  </div>
                  
                  <div class="col-sm-12"style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                       <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                      </div>
                      <div class="col-sm-10">
                        Acne Problems
                      </div>
                  </div>
                 
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                     
                    <div class="form-gorup col-sm-10">
                      Extra Body Hair Growth
                   </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                     
                    <div class="form-gorup col-sm-10">
                      Gain in Weight
                    </div>
                  </div>
                 
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                    
                    <div class="form-gorup col-sm-10">
                    Nausea
                  </div>
                  
                  </div>
                 
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                      
                    <div class="form-gorup col-sm-10">
                      Lump in Breast
                    </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                     
                    <div class="form-gorup col-sm-10">
                     Pain in Breast
                   </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px">
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                     
                    <div class="form-gorup col-sm-10">
                     Redness of Breast Skin
                   </div>
                  </div>
                 
                  <div class="col-sm-12"  style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                     
                    <div class="form-gorup col-sm-10">
                     Change in Size and Shape of Breast
                   </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                      
                    <div class="form-gorup col-sm-10">
                      Change in Appreance of Nipples
                    </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                    <div class="form-gorup col-sm-10">
                    Abnormal Bleeding from Vagina
                  </div>
                  </div>
                 
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                          
                    <div class="form-gorup col-sm-10">
                          Pain in lower Belly or Pelvis
                        </div>
                  </div>
                 
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                         
                    <div class="form-gorup col-sm-10">
                          Pain during Intercourse(Or Sex)
                        </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                         
                    <div class="form-gorup col-sm-10">
                          Vomiting
                        </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                          
                    <div class="form-gorup col-sm-10">
                          Purulent Cervical Discharge
                        </div>
                  </div>
                  
                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                    <div class='form-group col-sm-1'>
                        <input type="checkbox" class="form-control "/> 
                    </div>
                          
                    <div class="form-gorup col-sm-10">
                          Green/Yellow Abnormal Odour Vaginal Discharge
                        </div>

                  </div>

                  <div class="col-sm-12" style="box-shadow: 5px 5px 20px grey; margin-bottom:20px;height:40px" >
                      <div class='form-group col-sm-1'>
                          <input type="checkbox" class="form-control "/> 
                      </div>
                          
                      <div class="form-gorup col-sm-10">
                          Pain in Urination
                      </div>
                  </div>
                  <div class='form-group col-sm-5 col-sm-offset-2'>
                    <input type="submit" class="btn btn-primary btn-block"/> 
                  </div>
              </div>
            </form> 
          </div>
        </div>
    </div>
    <div id="problem_modal hidden"class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body" >
                   <div class="poc problem_desc hidden">
                      <h2>
                            PCOS
                      </h2>
                      <div class="poc_container">
                          <ul class="nav nav-pills" style="display: -webkit-inline-box;text-align:center;">
                              <li id="div-button" class="active" style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="desc_poc" class="desc_poc">Description</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="sym_poc" class="sym_poc">Symtoms</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="treat_poc" class="treat_poc">Treatment</a>                          
                              </li>
                          </ul>
                          <div class="content">
                            <div class="content_item" id="desc_poc">
                              <p>
                                Polycystic ovary syndrome is a problem in which a woman's hormones are out of balance.
                               </p>
                               <p>
                                 It can cause problems with your periods and make it difficult to get pregnant. PCOS also may cause unwanted changes in the way you look.
                                 If it isn't treated, over time it can lead to serious health problems, such as diabetes and heart disease. Most women with PCOS grow many small cysts on their ovaries. That is why it is called polycystic ovary syndrome.
                                 The cysts are not harmful but lead to hormone imbalances. Early diagnosis and treatment can help control the symptoms and prevent long-term problems."
                                 PCOS is linked to changes in hormone levels that make it harder for the ovaries to release fully-grown (mature) eggs. The reasons for these changes are unclear.
                                 The hormones affected are : Estrogen and Progesteron(Female Hormones) and Androgen(Male Hormones). "
                              </p>
                              <p>
                                 Normally, one or more eggs are released during a woman's cycle. This is known as ovulation. In most cases, this release of eggs occurs about 2 weeks after the start of a menstrual period. In PCOS, mature eggs are not released. Instead, they stay in the ovaries with a small amount of fluid around them. There can be many of these.
                                 However, not all women with the condition will have ovaries with this appearance. These problems with the release of eggs can contribute to infertility. The other symptoms of this disorder are due to the hormone imbalances. Most of the time, PCOS is diagnosed in women in their 20s or 30s. However, it may also affect teenage girls.
                                 The symptoms often begin when a girl's periods start. Women with this disorder often have a mother or sister who has similar symptoms."
                              </p>
                            </div>
                            <div id="sym_poc" class="content_item hidden">
                              <ul>
                              <li>
                                Not getting a period after you have had one or more normal ones during puberty (secondary amenorrhea)
                              </li>
                              <li>
                                Irregular periods that may come and go, and be very light to very heavy
                              </li>
                              <li>
                                Extra body hair that grows on the chest, belly, face, and around the nipples
                              </li>
                              <li>
                                Acne on the face, chest, or back
                              </li>
                              <li>
                                Skin changes, such as dark or thick skin markings and creases around the armpits, groin, neck, and breasts 
                              The development of male characteristics is not typical of PCOS and may indicate another problem. The following changes may indicate another problem apart from PCOS:
                              </li>
                              <li>Thinning hair on the head at the temples, called male pattern baldness
                              </li>
                              <li>
                                Enlargement of the clitoris
                              </li>
                            </ul>
                            </div>
                            <div id="treat_poc" class="content_item hidden">
                              <p>
                                Regular exercise, a healthy diet, weight control, and not smoking are all important parts of treatment for polycystic ovary syndrome (PCOS). You may also take medicine to balance your hormones.
                                <br>
                                Treatments depend on your symptoms and whether you are planning a pregnancy.
                                <br>
                                There is no cure for PCOS, but controlling it lowers your risks of infertility, miscarriages, diabetes, heart disease, and uterine cancer.
                              </p>
                              <p>
                                <ul>
                                  <li>
                                    If you are overweight, weight loss may be all the treatment you need. A small amount of weight loss is likely to help balance your hormones and start up your menstrual cycle and ovulation.
                                  </li>
                                  <li>
                                    Get regular exercise to help you control or lose weight and feel better.
                                  </li>
                                  <li>
                                    If you smoke, consider quitting. Women who smoke have higher levels of androgens than women who don't smoke.
                                  </li>
                                  <li>
                                    Caring for skin, hair, acne is another home treatment for PCOS.
                                  </li>
                                  <li>
                                    Eat a balanced diet that includes lots of fruits, vegetables, whole grains, and low-fat dairy products.
                                  </li>
                                </ul>
                              </p>
                            </div>
                          </div>
                      </div>    
                   </div>
                   <div class="bc problem_desc hidden">
                      <div class="bc_container">
                        <ul class="nav nav-pills" style="display: -webkit-inline-box;text-align:center;" >
                              <li id="div-button" class="active" style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="desc_bc" class="desc_bc">Description</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="sym_bc" class="sym_bc">Symtoms</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="treat_bc" class="treat_bc">Treatment</a>                          
                              </li>
                          </ul>
                      </div>
                      <div class="content">
                        <div class="content_item" id="desc_bc">
                          <p>
                            Breast cancer is a kind of cancer that develops from breast cells.
                            Breast cancer usually starts off in the inner lining of milk ducts or the lobules that supply them with milk. A malignant tumor can spread to other parts of the body. A breast cancer that started off in the lobules is known as lobular carcinoma, while one that developed from the ducts is called ductal carcinoma.
                          </p>
                          <p>
                            Breast cancer is the most common invasive cancer in females worldwide. It accounts for 16% of all female cancers and 22.9% of invasive cancers in women. 18.2% of all cancer deaths worldwide, including both males and females, are from breast cancer.
                            Breast cancer rates are much higher in developed nations compared to developing ones. There are several reasons for this, with possibly life-expectancy being one of the key factors - breast cancer is more common in elderly women; women in the richest countries live much longer than those in the poorest nations. The different lifestyles and eating habits of females in rich and poor countries are also contributory factors, experts believe.
                          </p>
                          
                        </div>
                        <div class="content_item hidden" id="sym_bc">
                          <p>
                            A symptom is only felt by the patient, and is described to the doctor or nurse, such as a headache or pain. A sign is something the patient and others can detect, for example, a rash or swelling.
                          </p>
                          <ul>
                            <li>
                              A lump in a breast
                            </li>
                            <li>
                              A pain in the armpits or breast that does not seem to be related to the woman's menstrual period
                            </li>
                            <li>
                              Pitting or redness of the skin of the breast; like the skin of an orange
                            </li>
                            <li>
                              A rash around (or on) one of the nipples
                            </li>
                            <li>
                              A swelling (lump) in one of the armpits
                            </li>
                            <li>
                              One of the nipples has a discharge; sometimes it may contain blood
                            </li>
                            <li>
                              The nipple changes in appearance; it may become sunken or inverted
                            </li>
                            <li>
                              The size or the shape of the breast changes
                            </li>


                          </ul>
                        </div>
                        <div class="content_item hidden" id="treat_bc">
                          <p>
                            A multidisciplinary team will be involved in a breast cancer patient's treatment. The team may consists of an oncologist, radiologist, specialist cancer surgeon, specialist nurse, pathologist, radiologist, radiographer, and reconstructive surgeon. Sometimes the team may also include an occupational therapist, psychologist, dietitian, and physical therapist.
                            The main breast cancer treatment options may include:
                          </p>
                          <ul>
                            <li>
                              Radiation therapy (radiotherapy)
                            </li>
                            <li>
                              Surgery
                            </li>
                            <li>
                              Biological therapy (targeted drug therapy)
                            </li>
                            <li>
                              Chemotherapy.
                            </li>
                          </ul>
                        </div>
                      </div>
                   </div>
                   <div class="cc problem_desc hidden">
                      <div class="cc_container">
                        <ul class="nav nav-pills" style="display: -webkit-inline-box;text-align:center;">
                              <li id="div-button" class="active" style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="desc_cc" class="desc_cc">Description</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="sym_cc" class="sym_cc">Symtoms</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="treat_cc" class="treat_cc">Treatment</a>                          
                              </li>
                          </ul>
                      </div>
                      <div class="content">
                        <div class="content_item" id="desc_cc">
                          <p>
                             Cervical cancer occurs when abnormal cells on the cervix camera.gif grow out of control. The cervix is the lower part of the uterus that opens into the vagina. Cervical cancer can often be successfully treated when it's found early. It is usually found at a very early stage through a Pap test.
                          </p>
                          <p>
                            Most cervical cancer is caused by a virus called human papillomavirus, or HPV. You can get HPV by having sexual contact with someone who has it. There are many types of the HPV virus. Not all types of HPV cause cervical cancer. Some of them cause genital warts, but other types may not cause any symptoms.
                          </p>
                          <p>
                            Most adults have been infected with HPV at some time. An infection may go away on its own. But sometimes it can cause genital warts or lead to cervical cancer. That's why it's important for women to have regular Pap tests. A Pap test can find changes in cervical cells before they turn into cancer. If you treat these cell changes, you may prevent cervical cancer.
                          </p>
                          <p>
                              Abnormal cervical cell changes rarely cause symptoms. But you may have symptoms if those cell changes grow into cervical cancer.
                          </p>
                        </div>
                        <div id="sym_cc" class="content_item hidden">
                          <ul>
                            <li>
                              Bleeding from the vagina that is not normal, such as bleeding between menstrual periods, after sex, or after menopause.
                            </li>
                            <li>
                              Pain in the lower belly or pelvis.
                            </li>
                            <li>
                              Pain during sex.
                            </li>
                            <li>
                              Vaginal discharge that isn't normal.
                            </li>
                          </ul>
                        </div>
                        <div id="treat_cc" class="content_item hidden">
                          <ul>
                            <li>
                              Surgery, such as a hysterectomy and removal of pelvic lymph nodes with or without removal of both ovaries and fallopian tubes.
                            </li>
                            <li>
                              Chemotherapy.
                            </li>
                            <li>
                              Radiation therapy.
                            </li>
                          </ul>
                        </div>
                      </div>
                   </div>
                   <div class="ot problem_desc hidden">
                      <div class="ot_container">
                        <ul class="nav nav-pills" style="display: -webkit-inline-box;text-align:center;">
                              <li id="div-button" class="active" style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="desc_ot" class="desc_ot">Description</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="sym_ot" class="sym_ot">Symtoms</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="treat_ot" class="treat_ot">Treatment</a>                          
                              </li>
                          </ul>
                      </div>
                      <div class="content">
                        <div class="content_item" id="desc_ot">
                          <p>
                            OVARIAN TORSION is an uncommon cause of acute abdominal pain in females, 
                            but it is a gynecologic emergency - diagnostic delay can result in loss of the ovary.
                            The ovary, and often the fallopian tube as well (adnexal torsion) become twisted around their
                            vascular pedicle. This twisting initially obstructs venous flow, which causes engorgement and edema. 
                            The engorgement can progress until arterial flow is compromised, leading to ischemia and infarction.
                            An ovary with a mass or cyst is more prone to twisting by virtue of its asymmetry. It is most common 
                            in the reproductive years, but can occur at any age.
                            Classic Presentation
                          </p>
                          <p>
                            The classic presentation of adnexal torsion is sudden onset of unilateral lower abdominal pain
                            which is initially visceral in character (ie, vague and poorly localized) and may be accompanied
                            by nausea and vomiting. It may radiate to the groin or flank. Sometimes the patient will describe 
                            several episodes of pain over the course of hours, days, or even weeks, if the ovary has been torsing
                            intermittently. A history of prior ovarian cyst or mass, prior ovarian torsion, or current pregnancy
                            (ie, corpus luteum cyst) should increase your suspicion for torsion.
                          </p>
                          <p>
                            Physical examination may reveal lower abdominal tenderness.
                            On pelvic exam, the patient may have adnexal tenderness or an adnexal mass.
                            Fever is uncommon, and usually low-grade if present.
                          </p>
                        </div>
                        <div class="content_item hidden" id="sym_ot">
                          <p>
                            <ul>
                              <li>
                                Sudden onset of unilateral pelvic pain
                              </li>
                              <li>
                                Nausea and Vomiting
                              </li>
                              <li>
                                Adnexal tenderness on the same side as the pain and less commonly an adnexal mass
                              </li>
                              <li>
                                Purulent cervical discharge
                              </li>
                              <li>
                                Cervical motion tenderness
                              </li>
                            </ul>
                          </p>
                        </div>
                        <div class="content_item hidden" id="treat_ot">
                          <p>
                            As with any emergency department patient, start with a primary assessment: airway, breathing, circulation. Anyone with a suspected torsion should have an intravenous (IV) line placed. Treat pain and nausea with IV medications as soon as you have IV access - there is no need to wait for the diagnosis. Keep the patient NPO in preparation for admission to the OR.
                          </p>
                          <p>
                            Treatment of adnexal torsion is surgical. The ovary must be untwisted as soon as possible to restore blood flow. While there is no absolute cutoff to ensure viability, some studies have indicated that the best outcomes are achieved if the ovary is detorsed within 8 hours. If on surgical examination the ovarian tissue is obviously necrotic, it may be removed. An ovarian mass or cyst may be resected. Most surgeons will try to salvage any normal ovarian tissue in a premenopausal patient. Unlike orchiopexy for testicular torsion, oophoropexy is still somewhat controversial, although with the current trend toward ovarian salvage more clinicians have advocated this procedure.
                          </p>
                        </div>
                      </div>
                   </div>
                   
                   <div class="pid problem_desc hidden">
                      <div class="pid_container">
                        <ul class="nav nav-pills" style="display: -webkit-inline-box;text-align:center;">
                              <li id="div-button" class="active" style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="desc_pid" class="desc_pid">Description</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="sym_pid" class="sym_pid">Symtoms</a>                          
                              </li>
                              <li id="div-button" class=""  style="padding:5px; width:30%">
                                    <a href="#" data-toggle="tab" aria-expanded="true" item ="treat_pid" class="treat_pid">Treatment</a>                          
                              </li>
                          </ul>
                      </div>
                      <div class="content">
                          <div id="desc_pid" class="content_item">
                            <p>
                              Pelvic inflammatory disease, commonly called PID, 
                              is an infection of the female reproductive organs. PID is one
                               of the most serious complications of a sexually transmitted disease 
                               in women: It can lead to irreversible damage to the uterus, ovaries,
                                fallopian tubes, or other parts of the female reproductive system, and
                                 is the primary preventable cause of infertility in women.
                              How Common Is Pelvic Inflammatory Disease?
                            </p>
                            <p>
                              Each year, more than 1 million women in the U.S. experience an episode of PID. As a result of PID, more than 100,000 women become infertile each year. In addition, a large proportion of the 100,000 ectopic (tubal) pregnancies that occur each year can be linked to PID. The rate of infection is highest among teenagers.
                            </p>
                            <p>
                              What Causes Pelvic Inflammatory Disease?
                            </p>  
                            <p>
                              Normally, the cervix prevents bacteria that enter the vagina from spreading to the internal reproductive organs. If the cervix is exposed to a sexually transmitted disease -- such as gonorrhea and/or chlamydia -- the cervix itself becomes infected and less able to prevent the spread of organisms to the internal organs. PID occurs when the disease-causing organisms travel from the cervix to the upper genital tract. Untreated gonorrhea and chlamydia cause about 90% of all cases of PID. Other causes include abortion, childbirth, and pelvic procedures.
                            </p>
                          </div>
                          <div id="sym_pid" class="content_item hidden">
                            <ul>
                              <li>
                                Dull pain or tenderness in the stomach or lower abdominal area, or pain in the right upper abdomen
                              </li>
                              <li>
                                Abnormal vaginal discharge that is yellow or green in color or that has an unusual odor
                              </li>
                              <li>
                                Painful urination
                              </li>
                              <li>
                                Painful intercourse
                              </li>
                              <li>
                                Chills or high fever
                              </li>
                              <li>
                                Nausea and vomiting
                              </li>
                            </ul>
                          </div>
                          <div id="treat_pid" class="content_item hidden">
                            <li>
                              Practicing safe sex
                            </li>
                            <li>
                              Getting tested for sexually transmitted infections
                            </li>
                            <li>
                              Avoiding douches
                            </li>
                            <li>Wiping from front to back after using the bathroom to stop bacteria from entering your vagina</li>
                          </div>
                      </div>
                   </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- /.container -->
    <div class="container" style="margin-top:50px;">
    </div>
</body>

<script>
$(".problem_desc .nav-pills li a").click(function(){
  var id = $(this).attr("item");
  $(".content_item").addClass("hidden");
  $("#"+id).removeClass("hidden");
});
$(".main_menu").click(function(){
    $(".main_menu").removeClass("active");
    $(this).addClass("active");
    var id = $(this).children("a").attr("item");
    $(".main_item").addClass("hidden");
    $("#"+id).removeClass("hidden");
})
$("#personal_details").submit(function(e){
    e.preventDefault();
    var ser = $("#personal_details").serialize();
    update_detail(ser,"PERSONAL");
});
$("#family_details").submit(function(e){
    e.preventDefault();
    var ser = $("#family_details").serialize();
    update_detail(ser,"FAMILY");
    
});
$("#doctor_details").submit(function(e){
    e.preventDefault();
    var ser = $("#doctor_details").serialize();
    update_detail(ser,"DOCTOR");
    
});

function disp(t)
{
    $('#problem_modal').modal('show');
    $(".problem_desc").addClass("hidden");
    $(".modal-body ."+t).removeClass("hidden");
    $("#desc"+t).removeClass("hidden");
}
function update_detail(ser,_mode)
{
 
    $.ajax({
      url: g_url+'controller/login/backend.php?'+ser,
      type: 'POST',
      dataType: "json",
     data:
      {
        mode:_mode
      },
      success: function(json)
      {
        var res=$('<div/>').addClass(json.css).html(json.msg);
        if(json.status==1)
        { 
            $('.form-status').empty().html("<div class='alert alert-success'>You have successfully updated your Course Goals! </div>");
            $("#goal_wrapper_menu div i").removeClass('glyphicon glyphicon-unchecked').removeClass('incomplete').addClass('complete').addClass('glyphicon glyphicon-check');
            $("#goal_wrapper_menu").attr('status',"1");
            $("#basic_details_wrapper_menu").attr('status',"-1");
            $("#goal_wrapper_menu , #basic_details_wrapper_menu").popover('destroy').removeAttr('data-toggle');
            $(".next").removeClass("hidden");
            setTimeout(function(){$(".form-status").empty();},5000);
        }
        else
        {
          var res=$('<div/>').addClass('alert alert-danger').html('<strong>Oh snap!</strong> We couldnt upload the file, please try again!');
          $('.form-status').empty().append(res);   
        }
      },
      error:function(json)
      {
          var res=$('<div/>').addClass('alert alert-danger').html('<strong>Oh snap!</strong> We couldnt upload the file, please try again!');
          $('.form-status').empty().append(res);
      }
    });    
}
function logout()
{

    $.ajax({
      url: g_url+'controller/login/backend.php',
      type: 'POST',
      dataType: "json",
     data:
      {
        mode:"LOGOUT"
      },
      success: function(json)
      {
        var res=$('<div/>').addClass(json.css).html(json.msg);
        if(json.status==1)
        { 
            window.open("index.php","_self");         
        }
        
      },
    }); 

}
</script>
</html>