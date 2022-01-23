
<?php
     if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <form class="form-horizontal span6" action="controller.php?action=add" method="POST">

                <div id="form">
                <div class="row">
                   <div class="col-lg-12">
                      <h1 class="page-header">Add New Job Vacancy</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                 </div> 

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "COMPANYNAME">Company Name:</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="COMPANYID" name="COMPANYID">
                          <option value="None">Select</option>
                          <?php 
                            $sql ="Select * From tblcompany";
                            $mydb->setQuery($sql);
                            $res  = $mydb->loadResultList();
                            foreach ($res as $row) {
                              # code...
                              echo '<option value='.$row->COMPANYID.'>'.$row->COMPANYNAME.'</option>';
                            }

                          ?>
                        </select>
                      </div>
                    </div>
                  </div>  

                     <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "CATEGORY">Category :</label>

                      <div class="col-md-8">
                        <select class="form-control input-sm" id="CATEGORY" name="CATEGORY">
                          <option value="None">Select</option>
                          <?php 
                            $sql ="Select * From tblcategory";
                            $mydb->setQuery($sql);
                            $res  = $mydb->loadResultList();
                            foreach ($res as $row) {
                              # code...
                              echo '<option value='.$row->CATEGORY.'>'.$row->CATEGORY.'</option>';
                            }

                          ?>
                        </select>
                      </div>
                    </div>
                  </div>  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "OCCUPATIONTITLE">Occupation Title:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="OCCUPATIONTITLE" name="OCCUPATIONTITLE" placeholder="Occupation Title"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                    <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "REQ_NO_EMPLOYEES">Required no. of Employees:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="REQ_NO_EMPLOYEES" name="REQ_NO_EMPLOYEES" placeholder="Required no. of Employees"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SALARIES">Salary:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="SALARIES" name="SALARIES" placeholder="Salary"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "DURATION_EMPLOYEMENT">Duration of Employment:</label> 
                      <div class="col-md-8">
                         <input class="form-control input-sm" id="DURATION_EMPLOYEMENT" name="DURATION_EMPLOYEMENT" placeholder="Duration of Employment"   autocomplete="none"/> 
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "QUALIFICATION_WORKEXPERIENCE">Qualification/Work Experience:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="QUALIFICATION_WORKEXPERIENCE" name="QUALIFICATION_WORKEXPERIENCE" placeholder="Qualification/Work Experience"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div> 

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "JOBDESCRIPTION">Job Description:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="JOBDESCRIPTION" name="JOBDESCRIPTION" placeholder="Job Description"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div>  

                 <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "PREFEREDSEX">Prefered Sex:</label> 
                      <div class="col-md-8">
                          <select class="form-control input-sm" id="PREFEREDSEX" name="PREFEREDSEX">
                          <option value="None">Select</option>
                           <option>Male</option>
                           <option>Female</option>
                           <option>Male/Female</option>
                        </select>
                      </div>
                    </div>
                  </div>  

                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "SECTOR_VACANCY">Sector of Vacancy:</label> 
                      <div class="col-md-8">
                        <textarea class="form-control input-sm" id="SECTOR_VACANCY" name="SECTOR_VACANCY" placeholder="Sector of Vacancy"   autocomplete="none"></textarea> 
                      </div>
                    </div>
                  </div>   
                  
                  <div class="form-group">
                    <div class="col-md-8">
                      <label class="col-md-4 control-label" for=
                      "idno"></label>  

                      <div class="col-md-8">
                         <button class="btn btn-primary btn-sm" name="save" type="button" id="btn-post"><span class="fa fa-save fw-fa"></span>Post Job</button>
                      <!-- <a href="index.php" class="btn btn-info"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;<strong>Back</strong></a> -->
                     
                     </div>
                    </div>
                  </div> 
    </div>


                  <div id="gcash" style="display: none">
                    <div style="background-color: #011a7d; width: 100%; height: 120px; text-align: center; align-content: center">
                      <h1 style="color: white; padding-top: 40px">GCash</h1>
                    </div>
                    <div style="background-color: #eee; padding: 20px">
                    <div style="width: 400px; margin: auto;">
                      <h3>Merchant: TanggapTrabaho Job Posting</h3>
                      <h3>Amount Due: PHP 50.00</h3>
                    </div>
                    </div>
                    <div>
                      <div style="width: 400px; margin: auto">
                      <h3 style="font-weight: bold">Login to pay with GCash</h3>
                      <h4 style="color: #88898c">Enter you 4 digt MPIN</h4>
                      <div class="mb-3">
                        <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="****"><br>
                        <button class="btn btn-primary btn-lg" style="width: 100%" name="save" type="submit" id="btn-next">Next</button>
                      </div>
                    </div>
                    </div>
                  </div>
 
          
        </form>

        <script>
          var btn = document.getElementById("btn-post");
          var next = document.getElementById("btn-next");
          var form = document.getElementById("form");
          var gcash = document.getElementById("gcash");

          btn.addEventListener("click", function() {
            form.style.display = "none";
            gcash.style.display = "block";
          });

          next.addEventListener("click", function() {
            form.style.display = "block";
            gcash.style.display = "none";
          });
        </script>
      
 