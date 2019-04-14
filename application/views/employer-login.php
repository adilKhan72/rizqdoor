<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Company Log In</h1>

    


    <div class="formdiv">

     <?php  $attributes1 = array('id' => 'emplogin');  echo form_open('employer/loginsubmit', $attributes1 ); ?>

     <?php
     if($signupsuccess = $this->session->flashdata('signupsuccess'))
       {?>
        <p class="afterheading">
          <?php
          echo $signupsuccess;
          ?>
        </p>
        <?php
      }else{
        ?>
        <p class="afterheading">
          Don't have an account?
          <a href="<?= base_url('employer/signup'); ?>">Register here!</a>
        </p>

        <?php
      }
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
      if($error = $this->session->flashdata('loginforjobposting')){
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
if($logooutsuccess = $this->session->flashdata('forgotemailsend')){
?>

<div style="text-align :center;background-color: #379683;margin:10px 0%;padding: 7px 0px; font-weight: bold;    color:white ;
    font-size: 1em;
    font-family: monospace;
    text-align: center;
">
        <?php
        echo $forgotemailsend;
        ?>
        </div>
        <?php
      }
      ?>

        <?php
      }
      if($logooutsuccess = $this->session->flashdata('logooutsuccess')){
        ?>
<div style="text-align :center;background-color: #379683;margin:10px 0%;padding: 7px 0px; font-weight: bold;    color:white ;
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

      if(isset($_COOKIE["email"])) {

      $data1 = array(
        'name'          => 'email',
        'value'         => $_COOKIE['email'],
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

if(isset($_COOKIE["password"])) {
      $data6 = array(
        'name'          => 'password',
        'value'         => $_COOKIE['password'],
        'required'=>'',
        'placeholder'     => 'Password (Password must be atleast 8 characters)',
'id' => 'myPasswordInputloginpage',
      );
}else{
$data6 = array(
        'name'          => 'password',
        'value'         => set_value('password'),
        'required'=>'',
        'placeholder'     => 'Password (Password must be atleast 8 characters)',
'id' => 'myPasswordInputloginpage',
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
<div class="formerror" style="color:#379683;font-weight: bold;">
<?php
       if(isset($forgotpass))
       {
       echo $forgotpass;
       }
       ?>
</div>
<?php
if(isset($_COOKIE["password"])) {
?>
      <label class="container">Keep me Logged In!
        <input type="checkbox" name="keepmelogin" checked="">
        <span class="checkmark"></span>
        <span class="frgtpass"><a href="<?= base_url('employer/forgotpassword'); ?>">Forgot password?</a></span>
      </label>
<?php
}else{
?>
<label class="container">Remember me!
        <input type="checkbox" name="keepmelogin">
        <span class="checkmark"></span>
        <span class="frgtpass"><a href="<?= base_url('employer/forgotpassword'); ?>">Forgot password?</a></span>
      </label>
<?php
}
?>


<label class="container">Show Password
        <input type="checkbox" onclick="showPasswordonloginpage()">
       <span class="checkmark"></span>      
      </label>



      <?php   echo form_submit('submit', 'Login!'); ?>

      <p class="formendtxt">
        RizqDoor.com never shares any of your activities through Facebook or Google without your explicit permission.
      </p>
      
    </form>
  </div>
</div>
</div>
<?php require("footer.php");?><!--php required footer-->
