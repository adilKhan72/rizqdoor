<?php require("header.php");?><!--php required header-->
<div class="main-div jobcategory"><!--country category start-->
  <div class="main-login">
    <h1 class="country " style="padding-bottom:20px; ">Post a Job!</h1>
     <div class="formdiv">
     
<?php 
$attributes = array('id' => 'postajob');
echo form_open('employer/postjobsubmit',$attributes); 


 $data = array(
        'name'          => 'jobtitle',
        'value'         => set_value('title'),
        
        'pattern' => '^[a-zA-Z\s]+$',
        'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Job Title',
);

echo form_input($data);
echo form_error('jobtitle');


$data2 = array(
        'name'          => 'email',
        'value'         => set_value('email'),
        'type' => 'email',
     
        'placeholder'     => ' Email (You@Example.com)',
);

echo form_input($data2);
echo form_error('email');


?>



  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
      new nicEditor({buttonList : ['fontFamily','fontFormat','fontSize','left','center','right','justify','removeformat','hr','ol','ul','bold','italic','underline','strikeThrough','subscript','superscript','html']}).panelInstance('area5');
        
  });
  //]]>
  </script>

  <textarea style="width:100%; min-height:150px;" required="" name="discription"  placeholder=" Write a Brief Job discription" class="textarea"  id="area5">...</textarea>

<?php

echo form_error('discription');

$data4 = array(
        'name'          => 'skills',
        'value'         => set_value('skills'),
        'required'=>'',
        'pattern' => '^[a-zA-Z,]+$',
'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Required Skills (Html,Css,Javascript,...)',
);

echo form_input($data4);
echo form_error('skills');

$data5 = array(
        'name'          => 'noposition',
        'value'         => set_value('noposition'),
        'required'=>'',
        'type' => 'number',
        'placeholder'     => 'No of Postions',
);

echo form_input($data5);
echo form_error('noposition');


$options1 = array(
        ''         => 'Job Field',
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
$joblist = 'id = joblists';
echo form_dropdown('jobfield', $options1, 'Job Field',$joblist);
echo form_error('jobfield');

$options1 = array(
        ''          =>'Minimum level of education',
        'Middle School'         => 'Middle School',
        'High School'         => 'High School',
        'Intermediate'         => 'Intermediate',
        'Bachelor'         => 'Bachelor',
        'Master'         => 'Master',
        'Doctorate'         => 'Doctorate',
        
);

echo form_dropdown('qualification', $options1, '');
echo form_error('qualification');

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



$data9 = array(
        'name'          => 'exp',
        'value'         => set_value('exp'),
        'required'=>'',
        'type' => 'number',
        'placeholder'     => 'Required experience in years (1, 2 or 6,..)',
);

echo form_input($data9);
echo form_error('exp');

?>

<select name="currencytype">
    <option value="" selected="selected">Select Currency Types</option>
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

<?php
echo form_error('currencytype');
$data01 = array(
        'name'          => 'salary',
        'value'         => set_value('salary'),
        'required'=>'',
        'type' => 'number',
        'placeholder'     => 'Enter the Salary your are offering',
);

echo form_input($data01);
echo form_error('salary');


$data009 = array(
        'name'          => 'dayofduaration',
        'value'         => set_value('dayofduaration'),
        'type' => 'number',
        'placeholder'     => 'Specify days (duration) for this job IF NEEDED',
);

echo form_input($data009);
echo form_error('dayofduaration');

$options = array(
        'both'         => 'Optional Gender Preference',
        'male'         => 'Male',
        'female'           => 'Female',
);

echo form_dropdown('gender', $options, 'both');

echo form_submit('submit', 'Post Job!');

?>

<div style="margin-bottom:15px;">
        RizqDoor.com never shares any of your activities through Facebook or Google without your explicit permission.</div>
      </p>
      <!--
      <p class="formendtxt" style="color:#05386b; font-weight: 500;">
        * This option takes effect only for employers Job posting.
      </p>
      -->
    </form>
  </div>
  </div>
</div>
<?php require("footer.php");?><!--php required footer-->
