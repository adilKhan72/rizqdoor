<?php require("header.php");?><!--php required header-->
<?php require("slider-form.php");?><!--php required Slider-->
<div class="jobcategory"><!-- country category start-->
<h1 class="country">Blogs</h1>
	<div class="grid-container5">

    <?php 
    if(count($result)){
        foreach($result as $result){
         $blogid =  $result->id 
    ?>
  <a href="<?= base_url('blog/singleblog/'.$blogid);?>"class="grid-item5" style="text-align: left;margin-top:20px;">
<h5  style=" font-size: 1.25rem; text-transform: capitalize; font-weight: 500; color:#05386b;  padding-bottom: 5px;">
     
         <?= $result->title ?>
          
        </h5>    
        
      
      <div style="display :block; color:#05386b;  font-weight: 400;font-size: 0.9rem; text-align:justify ; padding: 10px 0px;">
  <?= $result->paragraph ?>
</div>
<p style=" color:grey; font-weight: 400; font-size: 1rem; padding-bottom: 10px;">
 <?= $result->blogtype ?>
</p>
</a>
<?php
}
}
?>
</div>


<div class="center">
<?php // $this->pagination->create_links(); ?>
</div>

</div>
<?php require("footer.php");?><!--php required footer-->