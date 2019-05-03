<?php require("header.php");?><!--php required header-->
<div class="jobcategory"><!-- country category start-->
<div class="divform">
<div class="rizqdoorslogan">
  <?php
     if(count($searchdata))
       {
        ?>
         <div class="resultpageform">
         <input id="titlesearchinresult" type="text" name="searchtitle" value="<?= $searchdata['searchtitle'] ?>" required="" pattern="^[a-zA-Z\s]+$" title="Only Alphabets allowed" placeholder="Search Job Title">
<?php
if($searchdata['country'] == ""){
?>
<input type="hidden" id="custIdabc" name="custIdabc" value="Select Country">
<select name="country" id="country">
<option value="" >Select Country</option>
</select>
<?php
}else{
?>
<input type="hidden" id="custIdabc" name="custIdabc" value="<?= $searchdata['country'] ?>">
<select name="country" id="country">
<option value="" ><?= $searchdata['country'] ?></option>
</select>
<?php
}
?>
    <?php
if($searchdata['city'] == ""){
?>
<input type="hidden" id="custIddef" name="custIddef" value="Select City">
<select name="city" id="state">
<option value="" >Select City</option>
</select>
<?php
}else{
?>
<input type="hidden" id="custIddef" name="custIddef" value="<?= $searchdata['city'] ?>">
<select name="city" id="state">
<option value="" ><?= $searchdata['city'] ?></option>
</select>
<?php
}
?>     


  </div>
        </p>
        <?php
      }
        ?>
        </div></div>
<?php

     if($applied = $this->session->flashdata('applied'))
       {
        ?><h1 class="country">
        <p class="afterheading" style="">
          <?php
            echo 'Applied Successfully';
          ?>
        </p> </h1>
        <?php
      }

      if($nodatamatch = $this->session->flashdata('nodatamatch'))
       {
        ?><h1 class="country">
        <p class="afterheading" id="nodatamatch" style="color:#C21E0F; font-size: 0.7em;">
          <?php
            echo $nodatamatch;
          ?>
        </p></h1>
        <?php
      }
        ?>


  <div id="resultsbyajaxresults" class="grid-container6">
    <div class="item6-left">
  
    <div class="filtersdiv">
      <p  class="filterheadingclass" style="font-size: 1.3em;">Filters</p>
      </div>
      <div class="filtersdiv">
  <p class="filterheadingclass">Min Salary</p>
  <input id="salaryrange" type="range" class="custom-range" min="0" max="200000" step="2500" id="customRange3">
  <select id="salarytyperesults" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected="selected">Please Select Currency Type</option>
    <option value="USD" >United States Dollars</option>
    <option value="EUR">Euro</option>
    <option value="GBP">United Kingdom Pounds</option>
    <option value="DZD">Algeria Dinars</option>
    <option value="ARP">Argentina Pesos</option>
    <option value="AUD">Australia Dollars</option>
    <option value="ATS">Austria Schillings</option>
    <option value="BSD">Bahamas Dollars</option>
    <option value="BBD">Barbados Dollars</option>
    <option value="BEF">Belgium Francs</option>
    <option value="BMD">Bermuda Dollars</option>
    <option value="BRR">Brazil Real</option>
    <option value="BGL">Bulgaria Lev</option>
    <option value="CAD">Canada Dollars</option>
    <option value="CLP">Chile Pesos</option>
    <option value="CNY">China Yuan Renmimbi</option>
    <option value="CYP">Cyprus Pounds</option>
    <option value="CSK">Czech Republic Koruna</option>
    <option value="DKK">Denmark Kroner</option>
    <option value="NLG">Dutch Guilders</option>
    <option value="XCD">Eastern Caribbean Dollars</option>
    <option value="EGP">Egypt Pounds</option>
    <option value="FJD">Fiji Dollars</option>
    <option value="FIM">Finland Markka</option>
    <option value="FRF">France Francs</option>
    <option value="DEM">Germany Deutsche Marks</option>
    <option value="XAU">Gold Ounces</option>
    <option value="GRD">Greece Drachmas</option>
    <option value="HKD">Hong Kong Dollars</option>
    <option value="HUF">Hungary Forint</option>
    <option value="ISK">Iceland Krona</option>
    <option value="INR">India Rupees</option>
    <option value="IDR">Indonesia Rupiah</option>
    <option value="IEP">Ireland Punt</option>
    <option value="ILS">Israel New Shekels</option>
    <option value="ITL">Italy Lira</option>
    <option value="JMD">Jamaica Dollars</option>
    <option value="JPY">Japan Yen</option>
    <option value="JOD">Jordan Dinar</option>
    <option value="KRW">Korea (South) Won</option>
    <option value="LBP">Lebanon Pounds</option>
    <option value="LUF">Luxembourg Francs</option>
    <option value="MYR">Malaysia Ringgit</option>
    <option value="MXP">Mexico Pesos</option>
    <option value="NLG">Netherlands Guilders</option>
    <option value="NZD">New Zealand Dollars</option>
    <option value="NOK">Norway Kroner</option>
    <option value="PKR">Pakistan Rupees</option>
    <option value="XPD">Palladium Ounces</option>
    <option value="PHP">Philippines Pesos</option>
    <option value="XPT">Platinum Ounces</option>
    <option value="PLZ">Poland Zloty</option>
    <option value="PTE">Portugal Escudo</option>
    <option value="ROL">Romania Leu</option>
    <option value="RUR">Russia Rubles</option>
    <option value="SAR">Saudi Arabia Riyal</option>
    <option value="XAG">Silver Ounces</option>
    <option value="SGD">Singapore Dollars</option>
    <option value="SKK">Slovakia Koruna</option>
    <option value="ZAR">South Africa Rand</option>
    <option value="KRW">South Korea Won</option>
    <option value="ESP">Spain Pesetas</option>
    <option value="XDR">Special Drawing Right (IMF)</option>
    <option value="SDD">Sudan Dinar</option>
    <option value="SEK">Sweden Krona</option>
    <option value="CHF">Switzerland Francs</option>
    <option value="TWD">Taiwan Dollars</option>
    <option value="THB">Thailand Baht</option>
    <option value="TTD">Trinidad and Tobago Dollars</option>
    <option value="TRL">Turkey Lira</option>
    <option value="VEB">Venezuela Bolivar</option>
    <option value="ZMK">Zambia Kwacha</option>
    <option value="EUR">Euro</option>
    <option value="XCD">Eastern Caribbean Dollars</option>
    <option value="XDR">Special Drawing Right (IMF)</option>
    <option value="XAG">Silver Ounces</option>
    <option value="XAU">Gold Ounces</option>
    <option value="XPD">Palladium Ounces</option>
    <option value="XPT">Platinum Ounces</option>
</select>
<p id="selectedornot" class="filterheadingclass" style="color:#CC5328 ;font-weight:500; font-size:1em;text-align:right;">
</p>
<p id="showsalaryrange" class="filterheadingclass" style="font-weight:500; font-size:1em;text-align:right;">
Min Salary: 10000

</p>

  </div>





  

  <div class="filtersdiv">
  <p class="filterheadingclass">Experience</p>
  <select id="expinresults" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected>Select Experience</option>
  <option value="1">One Year</option>
  <option value="2">Two Years</option>
  <option value="3">Three Years</option>
  <option value="4">Four Years</option>
  <option value="5">Five Years</option>
  <option value="6">Six Years</option>
  <option value="7">Seven Years</option>
  <option value="8">Eight Years</option>
  <option value="9">Nine Years</option>
  <option value="10">Ten Years</option>
  <option value="11">Eleven Years</option>
  <option value="12">Thwelve Years</option>
  <option value="13">Thirten Years</option>
  <option value="14">Fourten Years</option>
  <option value="15">Fiften Years</option>
  <option value="16">Sisten Years</option>
  <option value="17">Seventen Years</option>
</select>

  </div>






  <div class="filtersdiv">
  <p class="filterheadingclass">Companies</p>
  <select id="companyinresults" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected>Select Available Company</option>
</select>
  </div>


  <div class="filtersdiv">
  <p class="filterheadingclass">Qualification</p>
  <select id="qualificationinresults" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected>Select Qualification</option>
  <option value="Middle School">Middle School</option>
  <option value="High School">High School</option>
  <option value="Intermediate">Intermediate</option>
  <option value="Bachelor">Bachelor</option>
  <option value="Master">Master</option>
  <option value="Doctorate">Doctorate</option>
</select>
  </div>

  <div class="filtersdiv">
  <p class="filterheadingclass">Gender</p>
  <select id="genderinresultes" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected>No preference</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
  </div>

  <div class="filtersdiv">
  <p class="filterheadingclass">Functional Area</p>
  <select id="jobfieldinresults" class="custom-select custom-select-sm" style="margin:10px 0px;">
  <option value="0" selected>Select Functional Area</option>
<option value="Accounts, Finance &amp;amp; Financial Services">Accounts, Finance &amp; Financial Services</option>
<option value="Administration">Administration</option>
<option value="Advertising">Advertising</option>
<option value="Architects &amp;amp; Construction">Architects &amp; Construction</option>
<option value="Client Services &amp;amp; Customer Support">Client Services &amp; Customer Support</option>
<option value="Computer Networking">Computer Networking</option>
<option value="Corporate Affairs">Corporate Affairs</option>
<option value="Creative Design">Creative Design</option>
<option value="Data Entry">Data Entry</option>
<option value="Database Administration (DBA)">Database Administration (DBA)</option>
<option value="Distribution &amp;amp; Logistics">Distribution &amp; Logistics</option>
<option value="Executive Management">Executive Management</option>
<option value="Field Operations">Field Operations</option>
<option value="Hardware">Hardware</option>
<option value="Health &amp;amp; Medicine">Health &amp; Medicine</option>
<option value="Hotel/Restaurant Management">Hotel/Restaurant Management</option>
<option value="Human Resources">Human Resources</option>
<option value="Import &amp;amp; Export">Import &amp; Export</option>
<option value="Industrial Production">Industrial Production</option>
<option value="Intern">Intern</option>
<option value="Investment Operations">Investment Operations</option>
<option value="Legal Affairs">Legal Affairs </option>
<option value="Maintenance/Repair">Maintenance/Repair</option>
<option value="Management Consulting">Management Consulting</option>
<option value="Management Information System (MIS)">Management Information System (MIS)</option>
<option value="Manufacturing">Manufacturing</option>
<option value="Maritime &amp;amp; Shipping">Maritime &amp; Shipping</option>
<option value="Marketing">Marketing</option>
<option value="Media - Print &amp;amp; Electronic">Media - Print &amp; Electronic</option>
<option value="Merchandising">Merchandising</option>
<option value="Monitoring &amp;amp; Evaluation">Monitoring &amp; Evaluation</option>
<option value="Operations">Operations</option>
<option value="Planning &amp;amp; Development">Planning &amp; Development</option>
<option value="Procurement">Procurement</option>
<option value="Product Development">Product Development</option>
<option value="Product Management">Product Management</option>
<option value="Project Management">Project Management</option>
<option value="Public Relations">Public Relations</option>
<option value="Quality Assurance (QA)">Quality Assurance (QA)</option>
<option value="Quality Control">Quality Control</option>
<option value="Researcher">Researcher</option>
<option value="Retail">Retail</option>
<option value="Safety &amp;amp; Environment">Safety &amp; Environment</option>
<option value="Sales &amp;amp; Business Development">Sales &amp; Business Development</option>
<option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
<option value="Secretarial, Clerical &amp;amp; Front Office">Secretarial, Clerical &amp; Front Office</option>
<option value="Security">Security</option>
<option value="Software &amp;amp; Web Development">Software &amp; Web Development</option>
<option value="Supply Chain Management">Supply Chain Management</option>
<option value="Systems Analyst">Systems Analyst</option>
<option value="Teachers/Education, Training &amp;amp; Development">Teachers/Education, Training &amp; Development</option>
<option value="Telemarketing">Telemarketing</option>
<option value="Warehousing">Warehousing</option>
<option value="Writer">Writer</option>

</select>
  </div>

</div>

    
<?php
if( count($joblist1) ){
 
      foreach ($joblist1 as $joblist1){

        $array = $joblist1[0];
        $joblist = $joblist1[1];
      ?>

<?php $postjobid = $joblist->id ;
?>
    
  <a  href="<?= base_url("users/singlejob/".$postjobid);?>"class="grid-item6 intro" style="text-align: left;">
<h5 id="<?= $joblist->id ?>" style=" font-size: 1.25rem; text-transform: capitalize; font-weight: 500; color:#05386b;  padding-bottom: 5px;">
     
          <?= $joblist->jobtitle ?> 
          
        </h5>    
        <div class="text-right" style="text-transform: capitalize; display :block;  color:#05386b; font-weight: 400;">
      <?php 
        echo $array->companyname;
       ?>
        <span class="text-right" style="text-transform: capitalize; color:#05386b; float:right; font-weight: 400;">
      <?= $joblist->city ?>

      </span>
      </div>
      
      <div class="discriptions" id="descriptionss" style="">
  <?php

echo $joblist->discription;
 ?>
</div>
<div class="text-right" style="text-transform: capitalize; display :block; color:grey; font-weight: 400; font-size: 1rem; padding-bottom: 10px;">
      <?php 
        echo $joblist->posteddate;
       ?>
        <span class="text-right" style="text-transform: capitalize; float:right; font-weight: 400;">
      Sal : <?= $joblist->salary ?> : <?= $joblist->currencytype ?>

      </span>
      </div>
</a>

<?php }} ?>
</div>
</div>


<div class="center">
<?php //echo $this->pagination->create_links(); ?>
</div>

</div>


<?php require("footer.php");?><!--php required footer-->