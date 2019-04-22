  <!-- /#wrapper -->
    <!-- Script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous" type='text/javascript'></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous" type='text/javascript'></script>
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js" type='text/javascript'></script>
    <script>
      feather.replace()
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" type='text/javascript'></script><!-- jquery validator plugin for forms -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js" type='text/javascript'></script><!-- jquery validator plugin for forms -->
    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" type='text/javascript'></script>
    <script src="<?= base_url('assets/bootbox.all.min.js'); ?>" type='text/javascript'></script>
    
 


  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
    <script>


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
    $("#userjobseekerpassupdate").validate({
      rules:{
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

//validatin a signupjobseeker form
    $("#userjobseekerupdate").validate({
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
      }
    });


//validatin a company info form
    $("#addmoreinfocommm").validate({
      rules:{
        companybranchname: {
          required: true
        },
        compinfo: {
          required: true,
          descriptionchecking: true
        },
        howmanyemployees: {
          required: true

        },
        countrycode: {
          required: true
        },
        phone: {
          required: true,
          digits: true
        },
        companyfield: {
          required: true
          
        },
        address: {
          required: true
         
        }
      }
    });

//validatin a employee info form
    $("#addmoreinfoemp").validate({
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
          required: true
        }
      }
    });

    //validatin a postajob form
    $("#postajobedit").validate({
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


});

function showPasswordjobseekereditdetails() {

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

function showcvform() {

  var x = document.getElementById("test");
 

  if (x.style.height !== "0px") {
    x.style.height = "0px";

  } else {
    x.style.height = "110px";
  }
}

function showprfilepicform() {

  var x = document.getElementById("test");
 

  if (x.style.height !== "0px") {
    x.style.height = "0px";

  } else {
    x.style.height = "60px";
  }
}

function fileValidationforjobseekerdashboard(){
    var fileInput = document.getElementById('inputGroupFile04');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf|\.docx|\.doc)$/i;
    var size = fileInput.files[0].size;
    if(size > 1200000){
        
      bootbox.alert({
    message: ' Your file size = ' + size/1000000 + ' (MB)  Please upload file having size not more than 1MB',
    size: 'large'
});
        
        fileInput.value = '';
        return false;
    }else if(!allowedExtensions.exec(filePath)){

      bootbox.alert({
    message: 'Please upload file having extensions .pdf/.docx/.doc',
    size: 'large'
});
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
function fileValidationforjobseekerprofilepicture(){
    var fileInput = document.getElementById('inputGroupFile04');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpeg|\.png|\.jpg)$/i;
    var size = fileInput.files[0].size;
    if(size > 12222222){
                    bootbox.alert({
    message: ' Your file size = ' + size/1000000 + ' (MB) Please upload file having size not more than 10MB',
    size: 'large'
});
       
        fileInput.value = '';
        return false;
    }else if(!allowedExtensions.exec(filePath)){
                         bootbox.alert({
    message: 'Please upload file having extensions .jpeg/.png/.jpg',
    size: 'large'
});

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
    </script>
    <script src="<?= base_url('assets/employerdashboard/javascript/javascript.js'); ?>" type='text/javascript'></script><!-- custom Javascript -->
    <script src="<?= base_url('assets/javascript/countries.js'); ?>" type='text/javascript'></script><!-- custom Javascript -->
    <script language="javascript">

  populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
  populateCountries("country2");
  populateCountries("country2");
      
  function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>

  <script type='text/javascript'>
  $(document).ready(function(){
    // $('#subscriptionhide').click(function(){

    //   $('#subdatashowhide').css('display','hidden');

    // }); 

    $('#subscriptionshow').click(function(){
      var isHidden  = $('#dvData').is(':hidden');
      if($('#subdatashowhide').is(':hidden')){

        // subdatashowhide
        if($('#elementsofsub').length){
          $('#subdatashowhide').css('display','block');
        $('#subscriptionshow').text("Hide Subscriptions Details");
}else{
  var username = $('#useremail').attr("value");
    $.ajax({
     url:'<?=base_url('Users/regusersubscription')?>',
     method: 'post',
     data: {username: username},
     dataType: 'json',
     success: function(response){
   
      for (var i = 0; i < response.length; i++) {
        var id = response[i].id;  
        var email = response[i].email;   
      var jobtitle = response[i].jobtitle;
      $("#subdatashowhide").prepend("<tr id='elementsofsub'><td>"+ email +"</td><td>"+ jobtitle +"</td></tr>");    
        }
        
     }
   });
   $('#subdatashowhide').css('display','block');
        $('#subscriptionshow').text("Hide Subscriptions Details");
}


   
    }else{
      $('#subdatashowhide').css('display','none');
      $('#subscriptionshow').text("Show Subscriptions Details");
    }
  });



   $('a').click(function(){
    var username = $(this).attr("value");
    $.ajax({
     url:'<?=base_url('Users/jobsappliedsingle')?>',
     method: 'post',
     data: {username: username},
     dataType: 'json',
     success: function(response){

      var title = response[0].jobtitle;   
      var email = response[0].email;
      var skills = response[0].skills;
      var discription = response[0].discription;
      var noposition = response[0].noposition;
      var jobfield = response[0].jobfield;
      var city = response[0].city;
      var country = response[0].country;
      var exp = response[0].exp;
      var gender = response[0].gender;
      var posteddate = response[0].posteddate;
      var qualification = response[0].qualification;
      var currencytype = response[0].currencytype;
      var salary = response[0].salary;


      $('#title').text(title);
      $('#email').text(email);
      $('#skills').text(skills);
      $('#discription').text(discription);
      $('#noposition').text(noposition);
      $('#jobfield').text(jobfield);
      $('#city').text(city);
      $('#country').text(country);
      $('#exp').text(exp);
      $('#salary').text(currencytype + ' : ' + salary);
      $('#gender').text(gender);
      $('#posteddate').text(posteddate);
      $('#qualification').text(qualification);
      
        $('#overlay').css('display','block');
      
        
     }
   });
  });
 
 


 });
 </script>
</body>

</html>