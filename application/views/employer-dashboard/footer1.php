  <!-- /#wrapper -->
   
  <script type='text/javascript' src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script type='text/javascript' src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Icons -->
    <script type='text/javascript' src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script type='text/javascript'>
      feather.replace()
    </script>
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script><!-- jquery validator plugin for forms -->
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js"></script><!-- jquery validator plugin for forms -->
    <!-- Graphs -->
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script type='text/javascript' src="<?= base_url('assets/bootbox.all.min.js'); ?>"></script>
    
  <!-- Bootstrap core JavaScript -->
  <script type='text/javascript' src="assets/javascript/jquery.min.js"></script>
  <script type='text/javascript' src="assets/javascript/bootstrap.bundle.min.js"></script>

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

//validatin a signupjobseeker form
$("#useremployerpassupdate").validate({
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

function showPasswordemployereditdetails() {

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

</script>
<script src="<?= base_url('assets/employerdashboard/javascript/javascript.js'); ?>"></script><!-- custom Javascript -->
<script src="<?= base_url('assets/javascript/countries.js'); ?>"></script><!-- custom Javascript -->
<script language="javascript">

populateCountries("country", "state"); // first parameter is id of country drop-down and second parameter is id of state drop-down
populateCountries("country2");
populateCountries("country2");

</script>
<script type='text/javascript'>
  $(document).ready(function(){

    var username = $('empid').attr("value");
    $.ajax({
     url:'<?=base_url('employer/statistics')?>',
     method: 'get',
     data: {username: username},
     dataType: 'json',
     success: function(response){
      console.log(response);   
    
    var appliedjobseekers = response.appliedjobseekers;
    var postedjobs = response.postedjobs; 
     $('#appliedjobseekers').text(appliedjobseekers);     
     $('#postedjobs').text(postedjobs);
     }
   });

 
 });
 </script>

</body>

</html>