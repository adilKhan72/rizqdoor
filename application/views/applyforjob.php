<?php require("header.php");?><!--php required header-->

<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Apply for Job</h1>
   
     <div class="formdiv">

          <?php 

          echo form_open_multipart('users/applyforjobsubmit/'.$single);?>
     
    <?php


    $data = array(
        'name'          => 'name',
        'value'         => set_value('name'),
        'required'  => '',
'type' => 'text',
'pattern' => '^[a-zA-Z\s]+$',
'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Name',
);

echo form_input($data);
echo form_error('name');


$data1 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'required'  => '',
        'type' => 'email',
        'placeholder'     => ' Email (You@Example.com)',
);

echo form_input($data1);
echo form_error('email');

$data3 = array(
        'name'          => 'phone',
        'required'  => '',
        'maxlength' => '10',
        'minlength' => '10',
        'type' => 'number',
        'value'         => set_value('phone'),
        'placeholder'     => 'Phone number (Ex : 3429762998)',
);

echo form_input($data3);
echo form_error('phone');

$data3 = array(
        'name'          => 'coverletter',
        'required'  => '',
        'value'         => set_value('coverletter'),
        'placeholder'     => 'Cover Letter...',
        'class'  => 'textarea'
);
echo form_error('coverletter');
echo form_textarea($data3);


// $data4 = array(
//         'name'          => 'cvupload',
//         'id'   =>   'cvupload',
//         'required'  => '',
//         'class'  => 'inputfile inputfile-6'
// );

// echo form_upload($data4);

?>
<input type="file" name="cvupload" id="cvupload" required="" class="inputfile inputfile-6"  onchange="return fileValidation()"  />


          <label  for="cvupload"><span>
            <i >Upload your Resume&hellip;</i>
          </span> 
            <strong class="inputfile inputfile-6" >
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="17" viewBox="0 0 20 17">
                <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
              </svg> 
            
          </strong>
        </label>

<?php
if (isset($upload_error)) {

?>
<div class="formerror" style="color:red;">
<?php
 echo $upload_error. "(Maximum file size is 1500 MB pdf|docx|doc)";
?>
</div>
<?php

}
  echo form_submit('submit', 'Upload'); ?>

     
    </form>
  </div>
  </div>
</div>

<?php require("footer.php");?><!--php required footer-->