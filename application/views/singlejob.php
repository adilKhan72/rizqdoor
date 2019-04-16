<?php require("header.php");?><!--php required header-->

<div class="jobcategorysinglejob"><!-- country category start-->
  
  

<?php
if( $singlejob != null ){
?>
<?php
if($subscribesuccess = $this->session->flashdata('subscribesuccess'))
       {
        ?>
        <div style="display:block; "><p style="display:block;width:300px; margin:auto; padding:20px 0px 0px 0px; color:#379683; font-weight: 500;font-size: 1.3em; ">Thank you for Subcription</p></div>
        <?php
      }
        ?>
<div class="grid-containersinglejob" style="padding-top: 30px;text-align:center;height: 80px;margin-bottom: 25px;">
  <div href="#" class="grid-itemsinglejob" style="padding: 0px;">

<?php echo form_open('users/subscribesubmit'); ?>
  <input type="email" name="email" placeholder="Please Enter your Email" style="color:grey; display: inline-block; box-sizing: border-box; width: 100%;font-weight: 500;font-size: 1.1em;padding: 20px;    border: 0px solid black;" required="">
</div>

<input type="hidden" name="jobtitle" value="<?php echo $singlejob->jobtitle ?>" />
<input type="hidden" name="city" value="<?php echo $singlejob->city ?>" />
<input type="hidden" name="jobid" value="<?php echo $singlejob->id ?>" />

<div href="#" class="grid-itemsinglejob" style="padding: 0px;">

<input type="submit" name="submit" value="Subscribe for Similar Jobs!" style="display: block;width: 100%; box-sizing: border-box; height: 100%; font-weight: 500;font-size: 1.3em;">


</form>   
</div>

</div>
<div class="grid-containersinglejob" style="padding-top: 10px;">
  <div href="#" class="grid-itemsinglejob" style="text-align: left;">
<h5 style=" color:grey;  color:#379683; font-size: 1.25rem; font-weight: 500;  padding-bottom: 5px; ">
        
        <?= $singlejob->jobtitle ?>  
        </h5>    
        
      
      <div style="display :block; font-weight: 400;font-size: 1rem; text-align:justify ; padding: 10px 0px;  color:#05386b;">
        <?= $singlejob->discription ?>
</div>


<p style=" color:grey; font-weight: 4 00; font-size: 1rem;">
<?= $singlejob->posteddate ?>
</p>
</div>


 <div href="#" class="grid-itemsinglejob gridsingmarbot" style="text-align: left;">
 <table class="table text-capitalize table-sm" style=" height: 70%;  color:#05386b; border-top: 0px solid #dee2e6; width: 100%">
         <h5 style=" color:grey;  color:#379683; font-size: 1.5rem; font-weight: 500;  padding-bottom: 5px; ">
     Details...  
        </h5> 
          <thead style="border-top: 0px solid #dee2e6;">
            <tr>
              <th scope="col" style="border-top: 0px solid #dee2e6;">Skills</th>
              <th scope="col" style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->skills ?>
              </th>

            </tr>
          </thead>
          <tbody>
            <tr style="border-top: 0px solid #dee2e6;">
              <th scope="row" style="border-top: 0px solid #dee2e6;" > No: Positions</th>
              <th style="border-top: 0px solid #dee2e6;"> 
               <?= $singlejob->noposition ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Job Field</th>
              <th style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->jobfield ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">City</th>
              <th style="border-top: 0px solid #dee2e6;">
              <?= $singlejob->city ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Country</th>
              <th style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->country ?>
              </th>

            </tr>
             <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Qualification</th>
              <th style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->qualification ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Required Experience</th>
              <th style="border-top: 0px solid #dee2e6;">
               <?= $singlejob->exp . " Year" ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Salary</th>
              <th style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->currencytype." : " ?>  <?= $singlejob->salary ?>
              </th>

            </tr>
            <tr>
              <th scope="row" style="border-top: 0px solid #dee2e6;">Prefered Gender</th>
              <th style="border-top: 0px solid #dee2e6;">
                <?= $singlejob->gender ?>
              </th>

            </tr>
          </tbody>
        </table>

        <?php $empid = $singlejob->employerid ?> 
        <?php $singlejob = $singlejob->id ?>

<a class="button" href="<?= base_url("users/applyforjob/".$singlejob);?>" title="" style="
text-decoration: none;
color:white;
padding: 10px 0px;
    background-color: #379683;; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: block;
    margin: 4px 2px;
    cursor: pointer;
    width: 100% ; 
    font-size: 1.25rem; 
    font-weight: 500;
">Apply for this Job</a>  


<a class="button" href="<?= base_url("users/Companyprof/".$empid);?>" title="" style="
text-decoration: none;
color:white;
padding: 10px 0px;
    background-color: #379683;; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: block;
    margin: 4px 2px;
    cursor: pointer;
    width: 100% ; 
    font-size: 1.25rem; 
    font-weight: 500;
">View Company Profile</a>  
</div>

<?php } ?>

</div>

</div>


<?php require("footer.php");?><!--php required footer-->