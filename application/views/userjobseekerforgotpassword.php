<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Forgot password!</h1>

    


    <div class="formdiv">

     <?php echo form_open('users/forgotpasswordsubmit'); ?>

     <p class="formendtxt">
       Enter your email to get your password. 
      </p>
        <?php
       
      $data1 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'type' => 'email',
        'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
      );
      echo form_input($data1);
      echo form_error('email');
      ?>
<div class="formerror">
<?php
       if(isset($invalid))
       {
       echo $invalid;
       }
       ?>
</div>
      <?php   echo form_submit('submit', 'Send email!'); ?>

      
      
    </form>
  </div>
</div>
</div>
<?php require("footer.php");?><!--php required footer-->
