<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Admin Log In</h1>

    


    <div class="formdiv">

     <?php   $attributes1 = array('id' => 'emplogin');   echo form_open('blog/loginsubmit',$attributes1); ?>

     <?php
    
      if($error = $this->session->flashdata('loginforaccess')){
        ?>
<div style="text-align :center;background-color: #C21E0F;margin:10px 0%;padding: 7px 0px; font-weight: bold;    color:white ;
    font-size: 1em;
    font-family: monospace;
    text-align: center;
">
        <?php
        echo $error;
        ?>
        </div>
        <?php
      }
      if($logooutsuccess = $this->session->flashdata('logooutsuccess')){
        ?>
<div style="text-align :center;background-color:#379683;margin:10px 0%;padding: 7px 0px; font-weight: bold;    color:white ;
    font-size: 1em;
    font-family: monospace;
    text-align: center;
">
        <?php
        echo $logooutsuccess;
        ?>
        </div>
        <?php
      }

if(isset($_COOKIE["admin_email"])) {
      $data1 = array(
        'name'          => 'email',
        'value'         => $_COOKIE['admin_email'],
        'type' => 'email',
        'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
      );
}else{

       $data1 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'type' => 'email',
        'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
      );
}
      echo form_input($data1);
      echo form_error('email');

if(isset($_COOKIE["admin_password"])) {
      $data6 = array(
        'name'          => 'password',
        'value'         => $_COOKIE['admin_password'],
        'required'=>'',
        'placeholder'     => 'Password (Password must be atleast 8 characters)',
      );
}else{
       $data6 = array(
        'name'          => 'password',
        'value'         => set_value('password'),
        'required'=>'',
        'placeholder'     => 'Password (Password must be atleast 8 characters)',
      );
}

      echo form_password($data6);
      echo form_error('password');
      ?>
<div class="formerror">
<?php
       if(isset($invalid))
       {
       echo $invalid;
       }
       ?>
</div>
<?php
if(isset($_COOKIE["admin_password"])) {
?>
      <label class="container">Keep me Logged In!
        <input type="checkbox" name="keepmelogin" checked="">
        <span class="checkmark"></span>
      </label>
<?php
}else{
?>
<label class="container">Keep me Logged In!
        <input type="checkbox" name="keepmelogin">
        <span class="checkmark"></span>
      </label>
<?php
}
?>


      <?php   echo form_submit('submit', 'Login!'); ?>


      
    </form>
  </div>
</div>
</div>
<?php require("footer.php");?><!--php required footer-->
