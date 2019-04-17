<?php $page = "Dashboard"; require("header.php");?><!--php required header-->


      <div class="container-fluid">

       <main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
    <h3 class="h4">
      Profile:  <?= $data1->name?>
    </h3>
    <?php
    if($profilepicupdated = $this->session->flashdata('profilepicupdated'))
    { 
      ?><div class="alert alert-success">
        <strong>Success!</strong>
        <?php
        echo $profilepicupdated;
        ?>
      </div>
      <?php
    }
    ?>
  </div>  
  <div class="container">
    <div class="row">
      <div class="profile-header-container">   



        <?php if($data1->profilepic == ""){?>
          <div class="profile-header-img">
            <img class="img-circle" src="<?= base_url('registered_user_profilepic_uploads/avatar.png'); ?>" />
            <!-- badge -->
            <div class="rank-label-container">
              <span class="label label-default rank-label">
                <a onclick="showprfilepicform()">Upload Image</a>
              </span>
            </div>
          </div>
        <?php  }else{ ?>
         <div class="profile-header-img">
          <img class="img-circle" src="<?= base_url('registered_user_profilepic_uploads/'.$data1->profilepic); ?>" />
          <!-- badge -->
          <div class="rank-label-container">
            <span class="label label-default rank-label">
              <a onclick="showprfilepicform()">Update Image</a>
            </span>
          </div>
        </div>
      <?php  } ?>
    </div> 
  </div>
</div>

<div class="test" id="test" style="height:0px;">
           <div class="row">
          <div class="text-center cvupdatebutton  display-3 col-lg-12" style="font-size:1.1em;  margin-bottom: 10px;" >


<form action="<?= base_url('users/uploadpicture'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" onchange="return fileValidationforjobseekerprofilepicture()" required="">
<div class="input-group">
  <div class="custom-file">
    <input type="file" name="profilepicupload" id="inputGroupFile04"  required="">

    <?php
if (isset($upload_error)) {
?>
<div class="formerror" style="color:red;">
<?php
 echo $upload_error;
 echo "(Maximum file size is 1500 MB pdf|docx|doc)";
?>
</div>
<?php
}else{
  ?>
<div class="formerror" >
<?php
  echo "";
  ?>
</div>
<?php
}?>
    

  </div>

    
<?php if($data1->profilepic == ""){?>
                  <input  type="submit" name="submit" value="Upload"  />
        <?php  }else{ ?>
                  <input  type="submit" name="submit" value="Update"  />
      <?php  } ?>

      
    

</div>
</form>



          </div>
        </div>
      </div>


<div class="container">
  <div class="row">

    <div class="col-lg-6" style="background-color:#edf5e1; border-radius:5px 0px 0px 5px; margin-bottom:20px;">
     <div class=" display-4" style="font-size:2em; padding: 5px 0px"> User Profile Details </div>
     <?php 
     if($data1 != null ){
       ?>
       <table class="table table-hover">
        <thead class="">
          <tr>
            <th scope="col">Email</th>
            <th scope="col"><?= $data1->email?></th>
          </tr>
          <tr>
            <th scope="col">Name</th>
            <th scope="col"><?= $data1->name?></th>
          </tr>
          <tr>
            <th scope="col">Date of birth</th>
            <th scope="col"><?= $data1->dateofbirth?></th>
          </tr>
          <tr>
            <th scope="col"> Gender </th>
            <th scope="col"><?= $data1->gender?></th>
          </tr>
          <tr>
            <th scope="col">Country</th>
            <th scope="col"><?= $data1->country?></th>
          </tr>
          <tr>
            <th scope="col">City</th>
            <th scope="col"><?= $data1->city?></th>
          </tr>
          <tr>
            <th scope="col">Nationality</th>
            <th scope="col"><?= $data1->nationality?></th>
          </tr>
          <tr>
            <th scope="col">Landline Number</th>
            <th scope="col"><?= $data1->landlinenumber?></th>
          </tr>
          <tr>
            <th scope="col">Country Code</th>
            <th scope="col"><?= $data1->countrycode?></th>
          </tr>
          <tr>
            <th scope="col">Mobile Number</th>
            <th scope="col"><?= $data1->mobilenumber?></th>
          </tr>
          <tr>
            <th scope="col">Experience</th>
            <th scope="col"><?= $data1->experience?> Years</th>
          </tr>
          <tr>
            <th scope="col">Industory</th>
            <th scope="col"><?= $data1->industory?></th>
          </tr>
          <tr>
            <th scope="col">Currency Type</th>
            <th scope="col"><?= $data1->currencytype?></th>
          </tr>
          <tr>
            <th scope="col">Current Salery</th>
            <th scope="col"><?= $data1->currentsalery?></th>
          </tr>
          <tr>
            <th scope="col">Desired Salary</th>
            <th scope="col"><?= $data1->desiredsalary?></th>
          </tr>
          <tr>
            <th scope="col">Resume</th>
            <th scope="col"><a href="<?= base_url('registered_user_cv_uploads');?>/<?= $data1->resume?>" target="_blank"><?= $data1->resume?></a></th>
          </tr>


          <tr><th colspan="2">

            <a href="<?= base_url('users/editjobseekerdetails');?>" type="button"  class="btn btn-success btn-block"  style="color:white; font-weight:bold;">Edit Profile details</a>
          </th>
        </tr>
      </thead>
    </table>
    <?php ;} ?>
  </div>
  <div class="col-lg-6" style="background-color:#edf5e1;  border-radius:0px 5px 5px 0px; margin-bottom:20px;">
    <div class=" display-4" style="font-size:2em; padding: 5px 0px"> User Statistics </div>
    <table class="table">

    <tr>
      <th scope="col">Total Jobs Applied for</th>
      <th scope="col"><?php if($data2 != null) {echo count($data2);}else{echo 'You Have Not Applied Yet';} ?></th>
    </tr>

    <tr>
      <th scope="row">Total Subcriptions</th>
      <th><?php if($data4 != null) {
        echo count($data4);
        }else{echo 'You Have Not Subscribed';} ?></th>
    </tr>

</table>
  </div>
</div>
</div>
</main>      
      
      </div>



      
    </div>
    <!-- /#page-content-wrapper -->

  </div>


  <?php require("footer.php");?>