<h1><ul>Sputum Test</ul></h1>
<?php session_start();?>
    <form role="form" class="test"  method="post" name="sputum">
    
    		  <div style="margin-left:50px;">
                        <div class="form-group col-md-3" style="clear:both;">
                        <label for="InputName">TB No.</label>
                        <?php echo $_SESSION['tb_no'];?>
                      </div>

                      <div class="form-group col-md-3" style="clear:both;">
                        <label for="InputName">Nikshay No.</label>
                        <?php echo $_SESSION['nikshay_no'];?>
                     	</div>
	
                        <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Paitent Name</label>
                        <?php echo $_SESSION['sub_name'];?>
                       </div>
                      <div style="clear:both;">
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Date of Test</label>
                        <input type="date" class="form-control" placeholder="Name of PHI" name="date_of_test" required>
                      </div>
                      </div>
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Lab No</label>
                        <input type="text" class="form-control" placeholder="Lab No." name="lab_no" required>
                      </div>
                      
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">DMC</label>
                        <input type="text" class="form-control" placeholder="DMC" name="dmc" required>
                      </div>
                     
                      <div class="form-group col-md-3" style="width:250px" >
                        <label for="InputName">Result</label>
                        <input type="text" class="form-control" placeholder="Results" name="result" required>
                      </div>
                      
                      <div class="form-group col-md-3" style="clear:both;" >
                        <label for="InputName">Weight</label>
                        <input type="text" class="form-control" placeholder="Weight in kg" name="weight" required>
                      </div>
                     <div class="form-group" style="clear:both">
                        <button type="submit" class="btn btn-primary" value="submit" name="subsubmit" onclick="test_sputum()"      style="clear:both">Submit</button>
                    </div>

        </div>
 
	