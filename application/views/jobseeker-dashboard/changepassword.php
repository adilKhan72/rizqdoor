<?php require("header.php");?><!--php required header-->

<?php $page = "changepassword"; require("sidebarnav.php");?><!--php required header-->
        <main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
              
            <h3 class="h4">Profile:  <?= $joblist1->name?>

            </h3>
          <?php
     if($jobseekerpasswordsupdate = $this->session->flashdata('jobseekerpasswordsupdate'))
      { 
        ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $jobseekerpasswordsupdate;
                ?>
                </div>
                <?php
              }
              ?>
          </div>     
          <div class="container">
  <div class="row">
      
          <div class="col-lg" style="background-color:#edf5e1; margin:10px; padding:5px; border-radius:5px; margin-bottom:20px;">
     <div class="text-center  display-4" style="font-size:2em; padding: 5px 0px">Change User Password </div>
     <?php 
        if($joblist1 != null){
     ?>

<form action="<?= base_url('users/editjobseekerpasswordsubmit'); ?>" id="userjobseekerpassupdate"   method="post" accept-charset="utf-8">
<input type="hidden"  name="id" value="<?php echo $joblist1->id; ?>">
<div class="form-group">
       <label for="exampleInputEmail1">Password</label>
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
    <label for="exampleInputEmail1">Confirm Password</label>

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
        <input type="checkbox" onclick="showPasswordjobseekereditdetails()">
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
<?php require("footer.php");?>
<!--php required footer-->