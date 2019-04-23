<?php require("header.php");?><!--php required header-->
<div class="jobcategory"><!-- country category start-->
<div class="divform">
<div class="rizqdoorslogan">
  <?php
     if(count($searchdata))
       {
        ?>
         <form action="<?= base_url('users/search')?> " method="post" class="resultpageform" accept-charset="utf-8">
         <input type="text" name="searchtitle" value="<?= $searchdata['searchtitle'] ?>" required="" pattern="^[a-zA-Z\s]+$" title="Only Alphabets allowed" placeholder="Title, Skill...">

<select name="country">
<?php
if($searchdata['country'] != "" && $searchdata['country'] != null ){
?>
<option value="" >Select Country</option>
<option value="<?= $searchdata['country'] ?>" selected="selected"><?= $searchdata['country'] ?></option>
<?php
}else{
?>
<option value="" >Select Country</option>
<?php
}
?>


       </select>
<select name="city">
<?php
if($searchdata['city'] != "" && $searchdata['city'] != null ){
?>
<option value="" >Select City</option>
<option value="<?= $searchdata['city'] ?>" selected="selected"><?= $searchdata['city'] ?></option>
<?php
}else{
?>
<option value="" >Select City</option>
<?php
}
?>

</select>
<input type="submit" name="submit" value="Search Jobs">
  </form>
        </p>
        <?php
      }
        ?>
        </div></div>
<?php

     if($applied = $this->session->flashdata('applied'))
       {
        ?><h1 class="country">
        <p class="afterheading" style="">
          <?php
            echo 'Applied Successfully';
          ?>
        </p> </h1>
        <?php
      }

      if($nodatamatch = $this->session->flashdata('nodatamatch'))
       {
        ?><h1 class="country">
        <p class="afterheading" id="nodatamatch" style="color:#C21E0F; font-size: 0.7em;">
          <?php
            echo $nodatamatch;
          ?>
        </p></h1>
        <?php
      }
        ?>


  <div class="grid-container6">
    <div class="item6-left">
  
    <div class="filtersdiv">
      <p  class="filterheadingclass" style="font-size: 1.3em;">Filters</p>
      </div>
      <div class="filtersdiv">
  <p class="filterheadingclass">Min Salary</p>
  <input id="salaryrange" type="range" class="custom-range" min="100" max="400000" step="100" id="customRange3">
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>Currency Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<p id="showsalaryrange" class="filterheadingclass" style="font-weight:500; font-size:1em;text-align:right;">
Min Salary

</p>
  </div>





  

  <div class="filtersdiv">
  <p class="filterheadingclass">Experience</p>
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>One Year</option>
  <option value="1">Two Years</option>
  <option value="2">Three Years</option>
  <option value="3">Four Years</option>
  <option value="3">Five Years</option>
  <option value="3">Six Years</option>
  <option value="3">Seven Years</option>
  <option value="3">Eight Years</option>
  <option value="3">Nine Years</option>
  <option value="3">Ten Years</option>
  <option value="3">Eleven Years</option>
  <option value="3">Thwelve Years</option>
  <option value="3">Thirten Years</option>
  <option value="3">Fourten Years</option>
  <option value="3">Fiften Years</option>
  <option value="3">Sisten Years</option>
  <option value="3">Seventen Years</option>
</select>

  </div>






  <div class="filtersdiv">
  <p class="filterheadingclass">Companies</p>
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>Currency Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>


  <div class="filtersdiv">
  <p class="filterheadingclass">Qualification</p>
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>Middle School</option>
  <option value="1">High School</option>
  <option value="2">Intermediate</option>
  <option value="3">Bachelor</option>
  <option value="3">Master</option>
  <option value="3">Doctorate</option>
</select>
  </div>

  <div class="filtersdiv">
  <p class="filterheadingclass">Gender</p>
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>No preference</option>
  <option value="1">Male</option>
  <option value="2">Female</option>
</select>
  </div>

  <div class="filtersdiv">
  <p class="filterheadingclass">Functional Area</p>
  <select class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option selected>Currency Type</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
  </div>






</div

    </div>
<?php
if( count($joblist1) ){
 
      foreach ($joblist1 as $joblist1){

        $array = $joblist1[0];
        $joblist = $joblist1[1];
      ?>

<?php $postjobid = $joblist->id ;
?>
    
  <a href="<?= base_url("users/singlejob/".$postjobid);?>"class="grid-item6" style="text-align: left;">
<h5 id="<?= $joblist->id ?>" style=" font-size: 1.25rem; text-transform: capitalize; font-weight: 500; color:#05386b;  padding-bottom: 5px;">
     
          <?= $joblist->jobtitle ?> 
          
        </h5>    
        <div class="text-right" style="text-transform: capitalize; display :block;  color:#05386b; font-weight: 400;">
      <?php 
        echo $array->companyname;
       ?>
        <span class="text-right" style="text-transform: capitalize; color:#05386b; float:right; font-weight: 400;">
      <?= $joblist->city ?>

      </span>
      </div>
      
      <div class="discriptions" id="descriptionss" style="">
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
</p>
</a>
<?php }} ?>
</div>


<div class="center">
<?php //echo $this->pagination->create_links(); ?>
</div>

</div>


<?php require("footer.php");?><!--php required footer-->