<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Register your Company</h1>
    <p class="afterheading">Already have an Account?
     <a href="<?= base_url('employer/login'); ?>">Log In!</a></p>
     <div class="formdiv">
     
     <?php   $attributes1 = array('id' => 'empsignup');  echo form_open('employer/signupsubmit',$attributes1); ?>
<!--The above example would create a form that points to your base URL plus the “email/send” URI segments, like this:
<form method="post" accept-charset="utf-8" action="http://example.com/index.php/email/send">
-->

   <?php
      $data = array(
        'name'          => 'companyname',
        'value'         => set_value('companyname'),
        'required'=>'',
        'pattern' => '^[a-zA-Z\s]+$',
        'placeholder'     => 'Enyer you Company name',
);

echo form_input($data);
echo form_error('companyname');




$options = array(

);
$countrylist = 'id = country';
echo form_dropdown('country', $options, 'name',$countrylist);
echo form_error('country');


$options = array(
'name'          => 'Select City'
);
$statelist = 'id = state';
echo form_dropdown('city', $options, 'name',$statelist);
echo form_error('city');

$data1 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'type' => 'email',
  'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
);

echo form_input($data1);
echo form_error('email');




$data6 = array(
        'name'          => 'password',
        'value'         => set_value('password'),
          'required'=>'',
        'placeholder'     => 'Password (Password must be atleast 8 characters)',
        'id' => 'myPasswordInput',
);

echo form_password($data6);
echo form_error('password');

$data7 = array(
        'name'          => 'passwordconfirm',
        'value'         => set_value('passwordconfirm'),
        'required'=>'',
        'placeholder'     => 'Confirm Password',
        'id' => 'myPasswordInputconfrim',
);

echo form_password($data7);
echo form_error('passwordconfirm');



echo form_submit('submit', 'Sign Up!');
 ?>

<label class="container">Show Password
        <input type="checkbox" onclick="showPassword()">
       <span class="checkmark"></span>      
      </label>

      <p class="formendtxt">
        RizqDoor.com never shares any of your activities through Facebook or Google without your explicit permission.
      </p>
     
    </form>
  </div>
  </div>
</div>
<?php require("footer.php");?><!--php required footer-->
