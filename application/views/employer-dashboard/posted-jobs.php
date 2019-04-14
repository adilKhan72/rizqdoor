<?php require("header.php");?><!--php required header-->
<?php $page = "joblisting"; require("sidebarnav.php");?><!--php required header-->
<main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
    <h1 class="h4" style="color:#05386b;">
<?php echo count($joblist1)?>
     Jobs Posted 
    </h1>
     <?php 
if($deletres = $this->session->flashdata('jobdeleted')){
 ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $deletres;
                ?>
                </div>
                <?php
              }
              ?>
  </div>
 


              <?php

    if( count($joblist1) ): 
      foreach ($joblist1 as $joblist1): 

        $array = $joblist1[0];
        $joblist = $joblist1[1];


      ?>
       <div class="alert alert-success " role="alert"> 
      <h5 class="alert-heading  inline">
       <span>
        <?= $joblist->jobtitle ?>
        </span>
        <span class="text-right" style="float:right; color:#05386b;">
       applicants : 

       <?php 
        echo $array;
       ?>
      </span>
      </h5>
      <div class="row">

        <div class="col-md-6" style="text-align: justify;"> 
          <p>
            <?= $joblist->discription ?>
          </p>
     
        </div>
        <div class="col-md-6"> 

         <table class="table  table-sm" style="border-top: 0px solid #dee2e6;">
          <thead style="border-top: 0px solid #dee2e6;">
            <tr>
              <th scope="col" style="border-top: 0px solid #dee2e6;">Posted Date</th>
              <td scope="col" style="border-top: 0px solid #dee2e6;">
                 <?= $joblist->posteddate ?>
              </td>

            </tr>
            <tr>
              <th scope="col" style="border-top: 0px solid #dee2e6;">Skills</th>
              <td scope="col" style="border-top: 0px solid #dee2e6;">
                 <?= $joblist->skills ?>
              </td>

            </tr>
          </thead>
          <tbody>
            <tr style="border-top: 0px solid #dee2e6;">
              <th scope="row" style="border-top: 0px solid #dee2e6;" > No: Positions</th>
              <td style="border-top: 0px solid #dee2e6;"> 
                <?= $joblist->noposition ?> Vaccancy
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Job Field</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->jobfield ?>
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Job Field</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->qualification ?>
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">City</th>
              <td style="border-top: 0px solid #dee2e6;">
              <?= $joblist->city ?>
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Country</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->country ?>
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Required Experience</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->exp ?> Years
              </td>

            </tr>
            currencytype
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Salary</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->currencytype." : " ?>   <?= $joblist->salary ?>
              </td>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Gender</th>
              <td style="border-top: 0px solid #dee2e6;">
                <?= $joblist->gender ?>
              </td>

            </tr>
             <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;color:#28a745;">Job Duaration</th>
              <th style="border-top: 0px solid #dee2e6; color:#28a745">
                <?php
                if($joblist->dayofduaration > 0){
                    echo $joblist->dayofduaration;
                }else{
                    echo "Default";
                }
                ?>
              </th>

            </tr>
          </tbody>
        </table>
      </div>

    </div>

    <div class="col-12 text-right">
      <?php $postjobid = $joblist->id ?>
      <?= anchor("postedjob/deletejob/".$postjobid,"Delete Job",["class" => "btn btn-danger custom-button-width navbar-right abc","onclick" => "return confirm('Are you sure to delete this Job.')"])?>
      <?= anchor("postedjob/editjob/{$joblist->id}","Edit Job",["class" => "btn btn-warning  custom-button-width navbar-right abc"]);?>
     <?= anchor("postedjob/viewcandidateappliedjob/{$joblist->id}","View Candidates",["class" => "btn btn-success  custom-button-width navbar-right abc"]);?>

    </div>

    </div>
  <?php endforeach; ?>

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
<?php require("footer.php");?>
<!--php required footer-->