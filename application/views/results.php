<?php require("header.php");?><!--php required header-->

<div class="jobcategory"><!-- country category start-->
  <?php

     if(count($searchdata))
       {
        ?>
        <p class="afterheading" style="font-size:1.5em; font-family:monospace; padding: 10px 0px; background-color: white;margin: 10px 0px 20px 0px;">
          <span style="color:grey;">Search Result For : 
          <?php

            echo " Job Title > " ;
            ?></span><?php
            echo $searchdata['searchtitle'].'|';
            ?><span style="color:grey;"><?php
            echo " City >";
            ?></span><?php
            echo $searchdata['city'].'|';
            ?><span style="color:grey;"><?php
            echo  " Country >";
            ?></span><?php
            echo $searchdata['country'].'|';
          ?>
        </p>
        <?php
      }
        ?>

  
    
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

 
  <div class="grid-container5">
<?php
if( count($joblist1) ){
 
      foreach ($joblist1 as $joblist1){

        $array = $joblist1[0];
        $joblist = $joblist1[1];
      ?>

<?php $postjobid = $joblist->id ;
?>
    
  <a href="<?= base_url("users/singlejob/".$postjobid);?>"class="grid-item5" style="text-align: left;">
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