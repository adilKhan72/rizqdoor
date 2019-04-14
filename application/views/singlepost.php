<?php require("header.php");?><!--php required header-->

<div class="jobcategorysinglejob"><!-- country category start-->
	
<?php
     if(count($result)){
     ?>

<div class="grid-containersingleblog" style="padding-top: 10px; box-sizing:border-box; ">
  <div href="#" class="grid-itemsingleblog" style="text-align: left;">
<h5 style=" color:grey;  color:#379683; font-size: 1.25rem; font-weight: 500;  padding-bottom: 5px; ">
        <?= $result->title ?>
     
        </h5>    
        
      
      <div style="display :block; font-weight: 400;font-size: 1rem; text-align:justify ; padding: 10px 0px;  color:#05386b;">
       <?= $result->paragraph ?>
</div>


<p style=" color:grey; font-weight: 4 00; font-size: 1rem;">
<?= $result->blogtype ?>
</p>
</div>






</div>
<?php 
}
?>
</div>


<?php require("footer.php");?><!--php required footer-->