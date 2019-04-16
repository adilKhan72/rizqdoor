<?php $page = "changepassword"; require("header1.php");?><!--php required header-->

        <main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
              
            <h3 class="h4">Profile:  <?= $joblist1->companyname?>

            </h3>
          <?php
     if($employerpasswordsupdate = $this->session->flashdata('employerpasswordsupdate'))
      { 
        ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $employerpasswordsupdate;
                ?>
                </div>
                <?php
              }
              ?>
          </div>     
          <div class="container">
  <div class="row">
      
          <div class="col-lg" style="background-color:#edf5e1; margin:10px; padding:5px; border-radius:5px; margin-bottom:20px;">
     <div class="text-center  display-4" style="font-size:2em; padding: 5px 0px">Edit User Password </div>
     <?php 
        if($joblist1 != null){
     ?>

<form action="<?= base_url('employer/editemployerpasswordsubmit'); ?>" id="useremployerpassupdate"   method="post" accept-charset="utf-8">
<input type="hidden"  name="id" value="<?php echo $joblist1->id; ?>">
<div class="form-group">
       <label for="exampleInputEmail1">Your Name</label>
           <?php 
$data = array(
        'name'          => 'password',
        'type' => 'password',
        'value'         => $joblist1->password,
        'required'=>'',
        'id' => 'myPasswordInput',
        'class' => 'form-control'
);
echo form_input($data);
echo form_error('password');
    ?>
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Email</label>

    <?php 
$data7 = array(
        'name'          => 'passwordconfirm',
        'value'         => $joblist1->password,
        'type' => 'password',
        'required'=>'',
        'id' => 'myPasswordInputconfrim',
        'class' => 'form-control'
);

echo form_password($data7);
echo form_error('passwordconfirm');
    ?>

  </div>

  
 <label class="container">Show Password
        <input type="checkbox" onclick="showPasswordemployereditdetails()">
       <span class="checkmark"></span>      
      </label>
  <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit Changes</button>
  </div>



</form>
   
<?php ;} ?>
</div>
</div>
</div>
        </main>

      </div>
    </div>
<?php require("footer1.php");?>
<!--php required footer-->