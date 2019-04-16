<?php $page = "changecv"; require("header.php");?><!--php required header-->
<div class="container-fluid">
<main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
    <h3 class="h4">
      Profile:  <?= $data1->name?>
    </h3>
    <?php
    if($cvupdate = $this->session->flashdata('cvupdate'))
    { 
      ?><div class="alert alert-success">
        <strong>Success!</strong>
        <?php
        echo $cvupdate;
        ?>
      </div>
      <?php
    }
    ?>
  </div>     
  <div class="container">
    <div class="row">
      <div class="col-lg" style="background-color:#edf5e1; margin:10px; padding:5px; border-radius:5px; margin-bottom:20px;">
       <div class="text-center  display-4 " style="font-size:2em; padding: 5px 0px; background-color: #53BD6D; color: wheat; margin-bottom: 10px;">
       Replace User Resume 
           <?php
if (isset($upload_error)) {
?>
<div class="formerror" style="font-size:0.8em; font-weight:600;">
<?php
 echo "(Maximum file size is 1500 MB pdf|docx|doc)";
?>
</div>
<?php
} ?> 
     </div>
       <?php 
       if($data1 != null){
         ?>
         <div class="row">
          <div class="text-center  display-3 col-lg-4" style="font-size:1.2em; padding: 3px 0px;  margin-bottom: 10px; color:#53BD6D;">
            <?= $data1->resume?>
          </div>
          <div class="text-center  display-3 col-lg-4" style="font-size:1.2em; padding: 3px 0px;  margin-bottom: 10px;">
            <a class="cvupdatebutton" href="<?= base_url('registered_user_cv_uploads');?>/<?= $data1->resume?>" target="_blank"  style=""> 
              View Resume 
            </a>
          </div>
          <div class="text-center cvupdatebutton  display-3 col-lg-4" style="font-size:1.2em; padding: 3px 0px;  margin-bottom: 10px;" onclick="showcvform()">
           <p > Change Resume</p>
         </div>
       </div>
       <div class="test" id="test" style="height: 0px;">
        <div class="text-center  display-4 " style="font-size:2em; padding: 5px 0px; background-color: #53BD6D; color: wheat; margin-bottom: 10px;">Replace User Resume </div>
        <div class="row">
          <div class="text-center cvupdatebutton  display-3 col-lg-12" style="font-size:1.2em;  margin-bottom: 10px;" >

            <form action="<?= base_url('users/changecvsubmit'); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<div class="input-group">
  <div class="custom-file">
    <input type="file" name="cvupload" id="inputGroupFile04" onchange="return fileValidationforjobseekerdashboard()" required="">

    <?php
if (isset($upload_error)) {
?>
<div class="formerror" style="color:red;">
<?php
 echo $upload_error;
?>
</div>
<?php
}else{
  ?>
<div class="formerror" >
<?php
  echo " ";
  ?>
</div>
<?php
}?>

  </div>
  
    
      <input type="submit" name="submit" value="upload"  />

</div>
</form>



          </div>
        </div>
      </div>
      <?php ;} ?>
    </div>
  </div>
</main>
</div>
</div>
</div>
<?php require("footer.php");?>
<!--php required footer-->