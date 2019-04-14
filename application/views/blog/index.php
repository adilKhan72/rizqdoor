<?php require("header.php");?><!--php required header-->
<?php require("sidebarnav.php");?><!--php required header-->
<main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
              
            <h3 class="h4">Azam systems & Technologies (Pvt.) Ltd.

            </h3>
            <?php
               if($loginsuccess = $this->session->flashdata('loginsuccess')){
                ?><div class="alert alert-success" style="margin-bottom: .3rem;">
  <strong>Success!</strong>
<?php
                echo $loginsuccess;
                ?></div><?php
             }
              if($blogdeleted = $this->session->flashdata('blogdeleted')){
                ?><div class="alert alert-success" style="margin-bottom: .3rem;">
  <strong>Success!</strong>
<?php
                echo $blogdeleted;
                ?></div><?php
             }
             
             if($blogedited = $this->session->flashdata('blogedited')){
                ?><div class="alert alert-success" style="margin-bottom: .3rem;">
  <strong>Success!</strong>
<?php
                echo $blogedited;
                ?></div><?php
             }
             
             if($blogposted = $this->session->flashdata('blogpostsuccess')){
                ?><div class="alert alert-success" style="margin-bottom: .3rem;">
  <strong>Success!</strong>
<?php
                echo $blogposted;
                ?></div><?php
             }
              ?>
          </div>
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
              <?php

    if( count($bloglist1) ): 
      foreach ($bloglist1 as $bloglist1): 

        $bloglist = $bloglist1;


      ?>
       <div class="alert alert-success " role="alert"> 

        <h5 class="alert-heading  text-capitalize inline">
        
        
        <span>
        <?= $bloglist->title ?>
        </span>
        <span class="text-right" style="float:right; color:#05386b;">
       Type : 

       <?php 
        echo $bloglist->blogtype;
       ?>
      </span>
      </h5>
      <div class="row">

        <div class="col-md-12"> 
          <p>
            <?= $bloglist->paragraph ?>
          </p>
     
        </div>

    </div>

    <div class="col-12 text-right">
      <?php $postblogid = $bloglist->id ?>
      <?= anchor("blog/deleteblog/".$postblogid,"Delete Blog",["class" => "btn btn-danger custom-button-width navbar-right abc","onclick" => "return confirm('Are you sure to delete this Job.')"])?>
      <?= anchor("Blog/editblog/".$postblogid,"Edit Blog",["class" => "btn btn-warning  custom-button-width navbar-right abc"]);?>
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
<?php require("footer.php");?><!--php required footer-->