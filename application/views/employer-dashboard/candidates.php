<?php $page = "candidatelisting"; require("header1.php");?><!--php required header-->
<main  class="col-md-12 ml-sm-auto col-lg-12 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
     <?php 
if($deletres = $this->session->flashdata('candidatedeleted')){
 ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $deletres;
                ?>
                </div>
                <?php
              }
              ?>
    <h3 class="h4" style="color:#05386b;">

<?= count($joblist)?>

    Candidates applied.
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
    <h5 class="alert-heading inline">
     <span>
      <?= $joblist->name ?>
    </span>
 </h5>

 <div class="row">

  <div class="col-md-12" style="text-align: justify;"> 
    <p>
      <?= $joblist->coverletter ?>
    </p>
   

   <table class="table  table-sm" style="border-top: 0px solid #dee2e6;">
      <tr >
        <th scope="col" style="border-top: 0px solid #dee2e6;" >Applied Job : </th>
        <th scope="col" style="border-top: 0px solid #dee2e6;">
         <?= $joblist->jobtitle ?>
       </th>

     </tr>
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
  <?php $candidateid = $joblist->id ?>
  <?= anchor("appliedcandidate/removecandidate/".$candidateid,"Remove",["class" => "btn btn-danger  custom-button-width navbar-right abc"]);?>

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