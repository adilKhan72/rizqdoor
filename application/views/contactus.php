<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Send us a message</h1>
     <div class="formdiv">
     
<?php echo form_open('users/contactsubmit'); 

if($applied = $this->session->flashdata('applied')){
?>
<p style="text-align:center; width:100%; color:#05386b;">
<?php
echo $applied;
?>
</p>
<?php
}

 $data = array(
        'name'          => 'title',
        'value'         => set_value('title'),
        'required'=>'',
        'pattern' => '^[a-zA-Z\s]+$',
        'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Enter Message Title',
);

echo form_input($data);
echo form_error('title');




$data2 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'type' => 'email',
        'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
);

echo form_input($data2);
echo form_error('email');



$data3 = array(
        'name'          => 'discription',
        'value'         => set_value('discription'),
        'required'=>'',
        'placeholder'     => 'Write your message here...',
        'class'  => 'textarea'
);

echo form_textarea($data3);
echo form_error('discription');



echo form_submit('submit', 'Send Messege');

?>


    </form>
  </div>
  </div>
</div>
<?php require("footer.php");?><!--php required footer-->
