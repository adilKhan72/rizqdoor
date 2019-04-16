<?php $page = "joblisting"; require("header1.php");?><!--php required header-->
<main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3 class="h4" style="color:#05386b;">
<?= count($joblist)?>
    Candidates applied for  <?php 
  echo '<i class="text-success" >"'.$joblist2->jobtitle.'"</i>';
  ?>
  Job.
  </h3>
</div>

 <div class="row">

<?php

if( count($joblist) ): 
  foreach ($joblist as $joblist): {

  }
  ?>
  <div class="col-md-6">
  <div class="alert alert-info " role="alert"> 
    <h5 class="alert-heading  text-capitalize inline">
     <span>
      <?= $joblist->name ?>
    </span>
 </h5>

 <div class="row">

  <div class="col-md-12"> 
    <p>
      <?= $joblist->coverletter ?>
    </p>
   

   <table class="table text-capitalize table-sm" style="border-top: 0px solid #dee2e6;">
      <tr >
        <th scope="col" style="border-top: 0px solid #dee2e6;" >Email</th>
        <th scope="col" style="border-top: 0px solid #dee2e6;">
         <?= $joblist->email ?>
       </th>

     </tr>
 
    <tr>
      <th scope="row" style="border-top: 0px solid #dee2e6;">Phone Number</th>
      <th style="border-top: 0px solid #dee2e6;">
        <?= $joblist->phone ?>
      </th>

    </tr>
    
</table>
</div>

</div>

<div class="col-12 text-right">
  <?php $cvlink = $joblist->cv ?>
   <?= anchor("".$cvlink,"View CV",["class" => "btn btn-success  custom-button-width navbar-right abc","target" => "_blank"]);?>
  <!-- <?= anchor("".$cvlink,"Send Email",["class" => "btn btn-primary custom-button-width navbar-right abc"]);?>-->
 


</div>

</div>
</div>
<?php endforeach; ?>
</div>
<?php else: ?>
 <div class="alert alert-success" role="alert">
   <h4 class="alert-heading">
     No Record Found
   </h4>
 </div>
<?php endif; ?>

</main>

</div>
</div>
<?php require("footer1.php");?>
<!--php required footer-->