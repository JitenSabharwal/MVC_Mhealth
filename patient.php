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
        
    </head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Start Bootstrap</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <!-- <a href="#">About</a> -->
                    </li>
                    <li>
                        <!-- <a href="#">Services</a> -->
                    </li>
                    <li>
                        <!-- <a href="#">Contact</a> -->
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Patient</p>
                <div class="list-group">
                    <a href="#" class="list-group-item active menu" value="personal_details" onclick="_switch($(this))">Personal Details</a>
                    <a href="#" class="list-group-item menu" value="doctor_details" onclick="_switch($(this))">Doctor Details</a>
                    <a href="#" class="list-group-item menu" value="family_details" onclick="_switch($(this))">Family Details</a>
                    <a href="#" class="list-group-item" onclick="logout()">Logout</a>
                </div>
            </div>

            <div class="col-md-9">
                <div class="col-sm-12">
                    <div class="col-sm-offset-2">
                        <form id="personal_details">
                            <div class="col-sm-12">
                                <center>
                                    <h3>Personal Details</h3>
                                </center>
                                    <hr/>
                            </div>
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>DOB</label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" class="form-control" name="age" required>
                            </div>
                            <div class="form-group">
                                <label>Contact</label>
                                <input type="number" class="form-control" name="contact" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                            <div class="form-group">
                                <label>Blood Group</label>
                                <input type="text" class="form-control" name="blood_group" required>
                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" required>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Marital Status</label>
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
                                </center>
                                    <hr/>
                            </div>
                            
                           <div class="form-group">
                                <label>Doctor Name</label>
                                <input type="text" class="form-control" name="doc_name" required>
                            </div>
                            <div class="form-group">
                                <label>Doctor Contact</label>
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
                                </center>
                                    <hr/>
                            </div>
                            
                           <div class="form-group">
                                <label>Realtive Name</label>
                                <input type="text" class="form-control" name="rel_name" required>
                            </div>
                            <div class="form-group">
                                <label>Relative Contact</label>
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

    </div>
    <!-- /.container -->
    <div class="container">
    </div>
</body>
<script>

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