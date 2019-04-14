<?php require("header.php");?><!--php required header-->

<div class="jobcategorysinglejob"><!-- country category start-->
	
	

<?php
if( count($singlejob) ){
?>

<div class="grid-containersinglejob" style="padding-top: 10px;">
  <div href="#" class="grid-itemsinglejob" style="text-align: left; margin:10px;">
<h5 style=" color:grey; text-transform: capitalize; color:#379683; font-size: 1.25rem; font-weight: 500;  padding-bottom: 5px; ">
  <?php
        if($singlejob->companybranchname == ""){
           echo $singlejob->companyname;
      }else{
          echo $singlejob->companybranchname;
    }
    ?>
        </h5>    
        
      
      <div style="display :block; font-weight: 400;font-size: 1rem; text-align:justify ; padding: 10px 0px;  color:#05386b;">
        <?= $singlejob->compinfo ?>
</div>

<table>
  <?php
    if($singlejob->companybranchname == ""){
          ?>
      <tr>
    <td>Company Details</td>
    <td>The Employer Didn't Added Aditional Info yet.</td>
  </tr>
          <?php
      }else{
           ?>
             <tr>
    <td>Number of Employees</td>
    <td><?= $singlejob->howmanyemployees ?></td>
  </tr>
  <tr>
    <td>Company's Field of Business</td>
    <td><?= $singlejob->companyfield ?></td>
  </tr>
  <tr>
    <td>Country Code: +<?= $singlejob->countrycode ?></td>
    <td>Phone: <?= $singlejob->phone ?></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><?= $singlejob->address ?></td>
  </tr>
          <?php
    }
    ?>

</table>



</div>
<?php } 
if( count($Companyprofjobs) ){
   
?>
<div href="#" class="grid-itemsinglejob" style="text-align: left; margin:10px; padding:5px 10px;">
<h5 style=" color:grey; text-transform: capitalize; color:#379683; font-size: 1.25rem; font-weight: 500;  padding-bottom: 5px; ">
        Jobs Posted 
        </h5>  
        <?php
        foreach($Companyprofjobs as $Companyprofjobs){
         $jobid = $Companyprofjobs->id;
        ?>
        
        <a href="<?= base_url('users/singlejob/'.$jobid)?>" style="text-decoration:none; background-color:#edf5e1; padding:10px;  text-transform: capitalize; color:grey; font-size: 1rem; font-weight: 500; display:block; margin-bottom:10px;">
            <?= $Companyprofjobs->jobtitle ?> <i style="float:right; "><?= $Companyprofjobs->city ?></i>
        </a>

 <?php
        }
 ?>



</div>

 <?php
    }
 ?>


</div>

</div>


<?php require("footer.php");?><!--php required footer-->