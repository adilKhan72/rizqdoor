<?php $page = "jobsapplied"; require("header.php");?><!--php required header-->

<div id="overlay" class="over">
        <p  onclick="off()" style="float:right; font-weight:bold; padding:10px; border: 1px solid #dee2e6; marign:10px; ">EXIT</p>
  <div style="margin:5%;">
   
  
   
   <div class="row">
   <div class="col-lg-4" style="padding:5px;"> 
   <h3>Title : <span id='title'></span><br/></h3>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
    <b> Email :</b> <span id='email'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Skills :</b> <span id='skills'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Description :</b> <span id='discription'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>No of Position :</b> <span id='noposition'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Job Field : </b><span id='jobfield'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>City :</b> <span id='city'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Country :</b> <span id='country'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Experience :</b> <span id='exp'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 

   <b>Salary  : </b><span id='salary'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Preferred Gender :</b> <span id='gender'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Posted Date : </b><span id='posteddate'></span><br/>
   </div>
   <div class="col-lg-4" style="padding:5px;"> 
   <b>Qualification :</b> <span id='qualification'></span><br/>
   </div>

   </div>
  </div>

</div>
      <div class="container-fluid">

       <main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
            <div class="row">

            <?php
            if($data2 != null){
            foreach ($data2 as $data2){
            ?>
                <div class="col-lg-4">
                <div class="card" style="margin:0.7rem">
  <div class="card-body">
    <h5 class="card-title"><?php echo $data2->jobtitle ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Applied At: <?php echo $data2->applieddate ?></h6>
    <p class="card-text">Skills: <?php echo $data2->skills ?> </p>
    <h6 class="card-subtitle mb-2 text-muted">Company: <?php echo $data2->companyname ?></h6>
    <h6 class="card-subtitle mb-2 text-muted">Country: <?php echo $data2->country ?></h6>
    <a href="#" class="card-link" id="select_job_id" value="<?php echo $data2->postjobid ?> ">
    View Full Job
    </a>





  </div>
</div>
</div>
<?php 
            }    
    }else{
?>
                <div class="col-lg-12">
                <div class="card" style="margin:0.7rem">
  <div class="card-body">
    <h5 class="card-title">No Jobs Applied for</h5>
    <h6 class="card-subtitle mb-2 text-muted">Apply for jobs from index</h6>
    <p class="card-text">Search the Jobs best suits your skills</p>
    <a href="<?= base_url('users/index'); ?>" class="card-link">Click here to see jobs</a>
  </div>
  <?php 
            }
  ?>

            </div> 
       </main>      
      
      </div>



      
    </div>
    <!-- /#page-content-wrapper -->

  </div>



<?php require("footer.php");?>