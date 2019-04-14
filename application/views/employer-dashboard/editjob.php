<?php require("header.php");?><!--php required header-->
<?php $page = "joblisting"; require("sidebarnav.php");?><!--php required header-->
<main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    
    <h1 class="h4" style="color:#05386b;">
    Edit Job "<?php
    $joblist = $joblist1[0];
    echo $joblist->jobtitle;
    ?>"
    </h1>
     <?php 
if($jobupdated = $this->session->flashdata('jobupdated')){
 ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $jobupdated;
                ?>
                </div>
                <?php
              }
              ?>
  </div>
 

       <div class="alert alert-success " role="alert"> 
      <div class="row">
        <div class="col-md-12"> 
            <?php $attributes = array('id' => 'postajobedit'); echo form_open('postedjob/editjobsubmit',$attributes);  ?>
                
        <input type="hidden"  name="id" value="<?php echo $joblist->id; ?>">
        
  <div class="form-group">
    <label for="exampleInputEmail1">Job Title</label>
    <?php echo form_error('jobtitle'); ?>
    <input type="text" class="form-control" name="jobtitle"  value="<?= $joblist->jobtitle?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email"  value="<?= $joblist->email?>">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Job Discription</label>


 <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
      new nicEditor({buttonList : ['fontFamily','fontFormat','fontSize','left','center','right','justify','removeformat','hr','ol','ul','bold','italic','underline','strikeThrough','subscript','superscript','html']}).panelInstance('area5');
        
  });
  //]]>
  </script>

  <textarea style="width:100%; min-height:150px; max-height:150px; background-color:white;" name="discription" required="" placeholder=" Write a Brief Job discription" class="textarea" id="area5">
  <?=$joblist->discription?>
  </textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Job Skills</label>
    <?php echo form_error('skills'); ?>
    <input type="text" class="form-control" name="skills" pattern="^[a-zA-Z,]+$" value="<?= $joblist->skills?>">
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Job Vaccancies</label>
     <?php echo form_error('noposition'); ?>
    <input type="number" class="form-control" name="noposition"  value="<?= $joblist->noposition?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Job Field</label>
    <?php echo form_error('jobfield'); ?>
    
    <?php
$options1 = array(
        $joblist->jobfield         => $joblist->jobfield,
        'Accounts, Finance &amp; Financial Services'         => 'Accounts, Finance &amp; Financial Services',
        'Administration'           => 'Administration',
        'Advertising'           => 'Advertising',
        'Architects &amp; Construction'           => 'Architects &amp; Construction',
        'Client Services &amp; Customer Support'           => 'Client Services &amp; Customer Support',
        'Computer Networking'           => 'Computer Networking',
        'Corporate Affairs'           => 'Corporate Affairs',
        'Creative Design'           => 'Creative Design',
        'Data Entry'           => 'Data Entry',
        'Database Administration (DBA)'           => 'Database Administration (DBA)',
        'Distribution &amp; Logistics'           => 'Distribution &amp; Logistics',
        'Executive Management'           => 'Executive Management',
        'Field Operations'           => 'Field Operations',
        'Hardware'           => 'Hardware',
        'Health &amp; Medicine'           => 'Health &amp; Medicine',
        'Hotel/Restaurant Management'           => 'Hotel/Restaurant Management',
        'Human Resources'           => 'Human Resources',
        'Import &amp; Export'           => 'Import &amp; Export',
        'Industrial Production'           => 'Industrial Production',
        'Intern'           => 'Intern',
        'Investment Operations'           => 'Investment Operations',
        'Legal Affairs'           => 'Legal Affairs ',
        'Maintenance/Repair'           => 'Maintenance/Repair',
        'Management Consulting'           => 'Management Consulting',
        'Management Information System (MIS)'           => 'Management Information System (MIS)',
        'Manufacturing'           => 'Manufacturing',
        'Maritime &amp; Shipping'           => 'Maritime &amp; Shipping',
        'Marketing'           => 'Marketing',
        'Media - Print &amp; Electronic'           => 'Media - Print &amp; Electronic',
        'Merchandising'           => 'Merchandising',
        'Monitoring &amp; Evaluation'           => 'Monitoring &amp; Evaluation',
        'Operations'           => 'Operations',
        'Planning &amp; Development'           => 'Planning &amp; Development',
        'Procurement'           => 'Procurement',
        'Product Development'           => 'Product Development',
        'Product Management'           => 'Product Management',
        'Project Management'           => 'Project Management',
        'Public Relations'           => 'Public Relations',
        'Quality Assurance (QA)'           => 'Quality Assurance (QA)',
        'Quality Control'           => 'Quality Control',
        'Researcher'           => 'Researcher',
        'Retail'           => 'Retail',
        'Safety &amp; Environment'           => 'Safety &amp; Environment',
        'Sales &amp; Business Development'           => 'Sales &amp; Business Development',
        'Search Engine Optimization (SEO)'           => 'Search Engine Optimization (SEO)',
        'Secretarial, Clerical &amp; Front Office'           => 'Secretarial, Clerical &amp; Front Office',
        'Security'           => 'Security',
        'Software &amp; Web Development'           => 'Software &amp; Web Development',
        'Supply Chain Management'           => 'Supply Chain Management',
        'Systems Analyst'           => 'Systems Analyst',
        'Teachers/Education, Training &amp; Development'           => 'Teachers/Education, Training &amp; Development',
        'Telemarketing'           => 'Telemarketing',
        'Warehousing'           => 'Warehousing',
        'Writer'           => 'Writer',
);

$fieldll = 'class = form-control';
echo form_dropdown('jobfield', $options1, $joblist->jobfield, $fieldll);
echo form_error('jobfield');
    ?>
</div>


  <div class="form-group">
    <label for="exampleInputEmail1">Qualification</label>
    
<select name="qualification" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Qualification">
<option value="<?= $joblist->qualification?>"><?= $joblist->qualification?></option>
<option value="Middle School">Middle School</option>
<option value="High School">High School</option>
<option value="Intermediate">Intermediate</option>
<option value="Bachelor">Bachelor</option>
<option value="Master">Master</option>
<option value="Doctorate">Doctorate</option>
</select>
   
  </div>

  

    <div class="form-group">
    <label for="exampleInputEmail1">country</label>
    <select class="form-control" name="country" id="country">
      <option value="<?= $joblist->country?>" selected="selected"><?= $joblist->country?></option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">city</label>
    <select  class="form-control" name="city" id="state">
      <option value="<?= $joblist->city?>" selected="selected"><?= $joblist->city?></option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Job Required Experience</label>
    <?php echo form_error('exp'); ?>
    <input type="number" class="form-control" name="exp"  value="<?= $joblist->exp?>">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Currency Type</label>
    <?php echo form_error('currencytype'); ?>

    <select name="currencytype" class="form-control" >
    <option value="<?= $joblist->currencytype?>" selected="selected"><?= $joblist->currencytype?></option>
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
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Job salary</label>
    <?php echo form_error('salary'); ?>
    <input type="number" class="form-control" name="salary"  value="<?= $joblist->salary?>">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  
</form>
        </div>
    </div>


    </div>

 
  
</main>

</div>
</div>

<?php require("footer.php");?>
<!--php required footer-->