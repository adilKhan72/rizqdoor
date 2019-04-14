<?php require("headerforloggedinjobseeker.php");?><!--php required header-->
<?php require("slider-form.php");?><!--php required Slider-->

<div class="jobcategory"><!-- country category start-->
  <h1 class="country">New Jobs Posted

<?php

if($applied = $this->session->flashdata('alreadyapplied'))
       {
        ?>
        <p class="" style="font-size: 0.5em; color:#E83C0C;">
          <?php
            echo 'You have already applied for this job please select another';
          ?>
        </p>
        <?php
      }

     if($applied = $this->session->flashdata('applied'))
       {
        ?>
        <p class="afterheading" style="">
          <?php
            echo 'Applied Successfully';
          ?>
        </p>
        <?php
      }

      if($nodatamatch = $this->session->flashdata('nodatamatch'))
       {
        ?>
        <p class="afterheading" id="nodatamatch" style="color:#C21E0F; font-size: 0.7em;">
          <?php
            echo $nodatamatch;
          ?>
        </p>
        <?php
      }
        ?>

  </h1>
  <div class="grid-container5" style="">
<?php
if( count($joblist1) ){
 
      foreach ($joblist1 as $joblist1){

        $array = $joblist1[0];
        $joblist = $joblist1[1];
        $postjobid = $joblist->id;
      ?>

    
  <a href="<?= base_url('users/singlejobforresjobseker/'.$postjobid);?>"class="grid-item5" style="text-align: left;">
<h5 id="<?= $joblist->id ?>" style=" font-size: 1.25rem;  font-weight: 500; color:#05386b;  padding-bottom: 5px;">
     
          <?= $joblist->jobtitle ?> 
          
        </h5>    
        <div class="text-right" style=" display :block;  color:#05386b; font-weight: 400;">
      <?php 
        echo $array->companyname;
       ?>
<span class="text-right" style=" color:#05386b; float:right; font-weight: 400;">
      <?= $joblist->city ?>
      </span>
      </div>
      
      <div class="discriptions" id="descriptionss" style="  display :block; color:#05386b;  
  font-weight: 400;
  font-size: 0.9rem; 
  text-align:justify ; 
  padding: 10px 0px;
  height: 60px;
  overflow:hidden;
  margin-bottom: 10px;">
  <?php
 
//$discr20 =str_word_count($joblist->discription ,1,'<>/&=:-\ .,!@$#%^&*_-+?";');
//$arrlength = count($discr20);
//print_r($discr20);
//$discr201 = array_slice($discr20,0,10);
// print_r($discr201);
// if ($arrlength < 35) {
//   echo $joblist->discription;
// }else{
//  $text = array();
//  $discr201 = array_slice($discr20);
//  foreach($discr201 as $value) {
//   $text[] = $value;
// }
//$text1 =  implode(" ",$discr20);
echo $joblist->discription;
// }
 ?>
</div>
<p style=" color:grey; font-weight: 400; font-size: 1rem; padding-bottom: 10px;">

<?= $joblist->posteddate ?>
<span class="text-right" style=" color:#05386b; float:right; font-weight: 400;">
      <?php
      $user = $this->session->userdata('jobseekeruser_id');
      if($joblist->userjobseekerid == $user){
      ?>
        <span style="color:grey;">Already Applied  At : <?= $joblist->applieddate; ?></span>
      <?php
      }else{
      ?>
        <span style="color:#379683;"> Easy Apply</span>
      <?php
      }
      ?>
      </span>
</p>
</a>
<?php }} ?>
</div>


<div class="center">
<?= $this->pagination->create_links(); ?>
</div>

  

  <h1 class="country">Jobs by Country
  </h1>
  <div class="grid-container1"  style="">
  <?php

    if( count($joblistbycountry) ){
      foreach ($joblistbycountry as $joblistbycountry){
  ?>
    <div class="grid-item1">

      <p class="numbers">

     <?= $joblistbycountry['0']; ?> 

    </p>
     <a class="arefjob" href="<?= base_url('users/jobsbycountry/'.$joblistbycountry['countryname']);?>" title="">

     <?= $joblistbycountry['countryname']; ?> 

   </a>
   </div>
    <?php
      }
    }
    ?>
  </div>



<h1 class="country">Jobs by Industry
  </h1>
  <div class="grid-container1"  style="">
  <?php

    if( count($joblistbyindustory) ){
      foreach ($joblistbyindustory as $joblistbyindustory){
  ?>
    <div class="grid-item1">

      <p class="numbers">

     <?= $joblistbyindustory['0']; ?> 

    </p>
     <a class="arefjob" href="<?= base_url('users/jobsbyindustory/'.$joblistbyindustory['id']);?>" title="">

     <?= $joblistbyindustory['job-field']; ?> 

   </a>
   </div>
    <?php
      }
    }
    ?>
  </div>
<!--
  <div class="linkmorejobs">
   <a href="" title="">Browse More Jobs</a>
 </div>
 <div class="freespace-for-Ad">
  
</div>
-->
<div class="hiring">
  <h1 class="country">Who's Hiring on RizqDoor.com</h1>
    <div class="grid-container2">
    <div class="grid-item2 item2-1"></div>
    <div class="grid-item2 item2-2"></div>
    <div class="grid-item2 item2-3"></div>
    <div class="grid-item2 item2-4"></div>
  </div>
</div><!-- country category ends-->
<?php require("footer.php");?><!--php required footer-->