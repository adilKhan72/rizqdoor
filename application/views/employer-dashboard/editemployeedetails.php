<?php $page = "Dashboard"; require("header1.php");?><!--php required header-->
<main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
    <h1 class="h4" style="color:#05386b;">
    You are editing "<?php
    $joblist = $joblist1[0];
    echo $joblist->companyname;
    ?>"
    </h1>
     <?php 
if($employeeupdated = $this->session->flashdata('employeeupdated')){
 ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $employeeupdated;
                ?>
                </div>
                <?php
              }
              ?>
  </div>
 

       <div class="alert alert-success " role="alert"> 
      <div class="row">
        <div class="col-md-12"> 
            <?php   $attributes1 = array('id' => 'addmoreinfoemp'); echo form_open('employer/editemployeedetailssubmit',$attributes1);  ?>
                
        <input type="hidden"  name="id" value="<?php echo $joblist->id; ?>">
        
  <div class="form-group">
    <label for="exampleInputEmail1">Company Name</label>
    <?php echo form_error('companyname'); ?>
    <input type="text" class="form-control" name="companyname"  value="<?= $joblist->companyname?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">country</label>
    <select class="form-control" name="country" id="country">
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">city</label>
    <select  class="form-control" name="city" id="state">
      <option value="<?= $joblist->city?>" selected="selected"><?= $joblist->city?></option>
    </select>
  </div>
  




  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <?php echo form_error('email'); ?>
    <input type="email" class="form-control" name="email"  value="<?= $joblist->email?>">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>
        </div>
    </div>


    </div>

 
  
</main>

</div>
</div>
<?php require("footer1.php");?>
<!--php required footer-->