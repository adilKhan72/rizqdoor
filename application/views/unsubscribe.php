<?php require("header.php");?><!--php required header-->

<div class="jobcategorysinglejob"><!-- country category start-->
  
  


<?php
if($unsubscribesuccess = $this->session->flashdata('unsubscribesuccess'))
       {
        ?>
        <div style="display:block; "><p style="display:block;width:300px; margin:auto; padding:20px 0px 200px 0px; color:#379683; font-weight: 500;font-size: 1.3em; ">Unsubscribed Successfully</p></div>
        <?php
      }else{
        ?>
<div class="grid-containersinglejob" style="padding-bottom: 300px; padding-top: 60px; text-align:center;height: 80px; margin-bottom: 0px; ">
  <div href="#" class="grid-itemsinglejob" style="padding: 0px;">

<?php echo form_open('users/unsubscribesubmit'); ?>
  <input type="email" name="email" placeholder="Please Enter your Email" style="color:grey; display: inline-block; box-sizing: border-box; width: 100%;font-weight: 500;font-size: 1.1em;padding: 20px;    border: 0px solid black;" required="">
</div>



<div href="#" class="grid-itemsinglejob" style="padding: 0px;">

<input type="submit" name="submit" value="Unsubscribe from Job Alerts" style="display: block;width: 100%; box-sizing: border-box; height: 100%; font-weight: 500;font-size: 1.3em;">


</form>   
</div>

</div>


<?php
}
?>


</div>


<?php require("footer.php");?><!--php required footer-->