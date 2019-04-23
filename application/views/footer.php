<div class="footer" ><!-- footer category start-->
  <div class="grid-container4">
    <div class="grid-item4 item4-1" >
      <p class="head">About RizqDoor.com</p>
      <p class="">Rizqdoor.com is the leading marketplace for job seekers and employers. We help employers to find and hire the best candidates for their jobs. We also help job seekers in finding the right job that matches their skill-set. Every day, numerous job vacancies are listed on rizqdoor.com from top employers.</p>
      <div class="about" style="padding: 20px 0px;">
        <p class="follow">Follow RizqDoor.com</p>
        <a href="https://web.facebook.com/RIZQ-DOOR-366092810605208/?modal=admin_todo_tour"  target="_blank"><i  class="customico-facebook"></i></a>
        <a href="https://twitter.com/DoorRizq?lang=en"  target="_blank"><i  class="customico-twitter"></i></a>
        <a href="https://www.linkedin.com/in/rizq-door-404318178/"  target="_blank"><i  class="customico-linkedin"></i></a>
        <a href="https://plus.google.com/u/6/103012607035402876844"  target="_blank"><i  class="customico-google-plus"></i></a>
        <a href="https://www.pinterest.com/rizqdoor/"  target="_blank"><i  class="customico-pinterest"></i></a>
        <a href="https://www.instagram.com/rizqdoor/"  target="_blank"><i  class="customico-instagram"></i></a>
      </div>
    </div>
    <div class="grid-item4 item4-2" >
      <p class="head"class="follow" >Company</p>
      <a href="<?= base_url('users/aboutus'); ?>" >About Us</a>
      <a href="<?= base_url('users/contactus'); ?>">Contact Us</a>
      <a href="<?= base_url('users/careers'); ?>">Careers</a>
      <a href="<?= base_url('users/underconstruction'); ?>">Advertise With Us</a>
      <a href="<?= base_url('users/underconstruction'); ?>">Community Services</a>
    </div>
    <div class="grid-item4 item4-3">
      <p class="head"class="follow" >Quick Links</p>
      <a href="<?= base_url('users/underconstruction'); ?>">Blog</a>
      <a href="<?= base_url('users/underconstruction'); ?>">Help</a>
      <a href="<?= base_url('employer/Dashboard'); ?>">EmployerDashboard</a>
      <a href="<?= base_url('employer/login'); ?>">Employer Sign-In</a>
      <a href="<?= base_url('employer/signup'); ?>">Employer Sign-Up</a>
      <!-- <a href="">Never Miss An Email!</a>-->
      <a href="<?= base_url('blog/admin_dashboard'); ?>">Admin</a>
    </div>  
  </div>
  <p class="" style="text-align:center; padding:20px 0px;color: white;">
    &copy; <b>2019 Rizqdoor.com, Inc.</b> All Rights Reserved.         
    <a class="" href="<?= base_url('users/termandcondition'); ?>" style="color: #edf5e1;">Terms of Use</a> -
    <a href="<?= base_url('users/privacypolicy'); ?>" class=""  style="color: #edf5e1;">Privacy Statement</a> -
    <a href="<?= base_url('users/cookiepolicy'); ?>" class=""  style="color: #edf5e1;">Cookie Policy </a>
  </p>
</div><!-- footer category ends-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url('assets/javascript/javascript.js'); ?>"></script><!-- custom Javascript -->
<script src="<?= base_url('assets/javascript/countries.js'); ?>"></script><!-- custom Javascript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script><!-- jquery validator plugin for forms -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js"></script><!-- jquery validator plugin for forms -->

<script language="javascript">

$(document).ready(function(){
//adding a custom method
$.validator.addMethod('descriptionchecking', function(value, element) { 
  return value.length != "";
},'please fill the discription field');

//adding a custom method
$.validator.addMethod('countrynull', function(value, element) { 
  return value != "-1";
},'please select Country in Country field');

//adding a custom method
$.validator.addMethod('citynull', function(value, element) { 
  return value != "name";
},'please select City in City field');

//adding a custom method
$.validator.addMethod('passwordlength', function(value, element) { 
  return value.length >= 8;
},'password must be 8 characters or greater than 8 characters');


//adding a custom method
$.validator.addMethod('dateofbirthcrieteria', function(value, element) { 
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

today = yyyy + '-' + mm + '-' + mm ;

  return value < today;
  
},'Date of Birth must be less than Current Date');


//validatin a signupjobseeker form
    $("#userjobseekersignup").validate({
      rules:{
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        city: {
          required: true,
          citynull: true
        },
        country: {
          required: true,
          countrynull: true
        },
        dateofbirth: {
          required: true,
          dateofbirthcrieteria:true
        },
        currencytype: {
          required: true,
        },
        salary: {
          required: true,
          digits: true
        },
        nationality: {
        required: true,
        },
        gender: {
        required: true
        },
        landlinenumber: {
          required: true,
           digits: true
        },
        mobilenumber: {
          required: true,
           digits: true
        },
        countrycode: {
          required: true,
        },
        experience: {
          required: true,
           digits: true
        },
        industory: {
          required: true
        },
        currentsalery: {
          required: true
        },
        desiredsalary: {
          required: true
        },
        password: {
          required: true,
          passwordlength: true,
           equalTo: "#myPasswordInputconfrim"
        },
        passwordconfirm: {
          required: true,
          equalTo: "#myPasswordInput"
        }
      }
    });

//validatin a postajob form
    $("#postajob").validate({
      rules:{
        jobtitle: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        discription: {
          required: true,
          descriptionchecking: true
        },
        skills: {
          required: true
        },
        noposition: {
          required: true,
          digits: true
        },
        city: {
          required: true,
          citynull: true
        },
        country: {
          required: true,
          countrynull: true
        },
        exp: {
          required: true,
          digits: true
        },
        currencytype: {
          required: true,
        },
        salary: {
          required: true,
          digits: true
        },
        dayofduaration: {

        },
        gender: {

        },
        qualification: {
          required: true
        },
        jobfield: {
          required: true
        }
      }
    });

    //validatin a employee sign up form
    $("#empsignup").validate({
      rules:{
        companyname: {
          required: true
        },
        city: {
          required: true,
          citynull: true
        },
        country: {
          required: true,
          countrynull: true

        },
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          passwordlength: true
        },
        passwordconfirm: {
          required: true,
          equalTo: "#myPasswordInput"
        }
      }
    });

    //validatin a employee login form
    $("#emplogin").validate({
      rules:{
        email: {
          required: true,
          email: true
        },
        password: {
          required: true,
          passwordlength: true
        }
      }
    });

    $(document).on('input', '#salaryrange', function() {
    var salaryvalue = $('#salaryrange').html( $(this).val() );
    console.log(salaryvalue);
    $('#showsalaryrange').text(" Min Salary " + salaryvalue[0]['value']);
});
});



	populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
	populateCountries("country2");
	populateCountries("country2");

       function showPasswordonloginpage() {
  var ss = document.getElementById("myPasswordInputloginpage");
 
  if (ss.type === "password" ) {
    ss.type = "text";
    
  } else {
    ss.type = "password";
    
  }

} 
function showPassword() {

  var x = document.getElementById("myPasswordInput");
  var xx = document.getElementById("myPasswordInputconfrim");

  if (x.type === "password" || xx.type === "password") {
    x.type = "text";
    xx.type = "text";
  } else {
    x.type = "password";
    xx.type = "password";
  }

} 

//binds to onchange event of your input field
$('#cvupload').bind('change', function() {

  //this.files[0].size gets the size of your file.
  alert(this.files[0].size);

});

function fileValidation(){
    var fileInput = document.getElementById('cvupload');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf|\.docx|\.doc)$/i;
    var size = fileInput.files[0].size;
    if(size > 1200000){
        
        alert( ' Your file size = ' + size + ' Please upload file having size not more than 1MB');
        fileInput.value = '';
        return false;
    }else if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .pdf/.docx/.doc');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                

            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
function fileValidationforjobseekersignup(){
    var fileInput = document.getElementById('cvupload');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf|\.docx|\.doc)$/i;
    var size = fileInput.files[0].size;
    if(size > 1200000){
        
        alert( ' Your file size = ' + size + ' Please upload file having size not more than 1MB');
        fileInput.value = '';
        return false;
    }else if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .pdf/.docx/.doc');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                

            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
      
</script>
</body>
</html>

