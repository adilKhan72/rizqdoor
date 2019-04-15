<?php require("header.php");?><!--php required header-->

<?php $page = "editjobseekerdetails"; require("sidebarnav.php");?><!--php required header-->
        <main  class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3  border-bottom" style="background-color:#53BD6D;padding-top: .4rem; padding-bottom: 0rem; margin-top:10px; border-radius:5px; padding: 0px 10px; color:white;">
              
            <h3 class="h4">Profile:  <?= $joblist1->name?>

            </h3>
          <?php
     if($jobseekerdetailsupdate = $this->session->flashdata('jobseekerdetailsupdate'))
      { 
        ?><div class="alert alert-success">
  <strong>Success!</strong>
<?php
                echo $jobseekerdetailsupdate;
                ?>
                </div>
                <?php
              }
              ?>
          </div>     
          <div class="container">
  <div class="row">
      
          <div class="col-lg" style="background-color:#edf5e1; margin:10px; padding:5px; border-radius:5px; margin-bottom:20px;">
     <div class="text-center  display-4" style="font-size:2em; padding: 5px 0px">Edit User Details </div>
     <?php 
        if($joblist1  != null){
     ?>

<form action="<?= base_url('users/editjobseekerdetailssubmit'); ?>" id="userjobseekerupdate"   method="post" accept-charset="utf-8">
<input type="hidden"  name="id" value="<?php echo $joblist1->id; ?>">
<div class="form-group">
       <label for="exampleInputEmail1">Your Name</label>
           <?php 
$data = array(
        'name'          => 'name',
        'value'         => $joblist1->name,
        'required'=>'',
        'placeholder'     => 'Enter your full Name',
        'class' => 'form-control'
);
echo form_input($data);
echo form_error('name');
    ?>
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Email</label>

    <?php 
$data1 = array(
        'name'          => 'email',
        'value'         => $joblist1->email,
        'type' => 'email',
  'required'=>'',
        'placeholder'     => ' Email (You@Example.com)',
        'class' => 'form-control'
);
echo form_input($data1);
echo form_error('email');
    ?>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Date of birth below</label>

    <?php 
    $data1 = array(
        'name'          => 'dateofbirth',
        'value'         => $joblist1->dateofbirth,
        'type' => 'date',
        'class' => 'form-control'
);
echo form_input($data1);
echo form_error('dateofbirth');
    ?>

  </div>
  <div class="form-group">
    <label >Gender</label>

    <select name="gender" class="form-control">
        <option value="<?= $joblist1->gender; ?>" ><?= $joblist1->gender; ?></option>
        <option value="male" <?php echo  set_select('gender', 'male'); ?> >Male</option>
        <option value="female" <?php echo  set_select('gender', 'female'); ?> >Female</option>
        <option value="transgender" <?php echo  set_select('gender', 'transgender'); ?> >Transgender</option>
</select>
<?php echo form_error('gender');?>
  </div>
  <div class="form-group">
    <label>Country</label>

    <select name="country" id ="country" class="form-control">
      <option value="<?= $joblist1->country; ?>" selected="selected"><?= $joblist1->country; ?></option>
</select>
<?php echo form_error('country');?>
  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">City</label>

    <?php 
    $options = array(
$joblist1->city          => $joblist1->city
);
$statelist = ['id' => 'state', 'class' => 'form-control'];
echo form_dropdown('city', $options, 'name',$statelist);
echo form_error('city');
    ?>

  </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Nationality</label>

    <select id="" class="form-control" name="nationality">
  <option value="<?= $joblist1->nationality; ?>" selected><?= $joblist1->nationality; ?></option>

    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon" >Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select>
<?php echo form_error('nationality'); ?>
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Country Code</label>

    <select id="" class="form-control" name="countrycode">
  <option value="<?= $joblist1->countrycode; ?>" selected=""><?= $joblist1->countrycode; ?></option>
    <option data-countryCode="DZ" value="213">Algeria (+213)</option>
    <option data-countryCode="AD" value="376">Andorra (+376)</option>
    <option data-countryCode="AO" value="244">Angola (+244)</option>
    <option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
    <option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
    <option data-countryCode="AR" value="54">Argentina (+54)</option>
    <option data-countryCode="AM" value="374">Armenia (+374)</option>
    <option data-countryCode="AW" value="297">Aruba (+297)</option>
    <option data-countryCode="AU" value="61">Australia (+61)</option>
    <option data-countryCode="AT" value="43">Austria (+43)</option>
    <option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
    <option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
    <option data-countryCode="BH" value="973">Bahrain (+973)</option>
    <option data-countryCode="BD" value="880">Bangladesh (+880)</option>
    <option data-countryCode="BB" value="1246">Barbados (+1246)</option>
    <option data-countryCode="BY" value="375">Belarus (+375)</option>
    <option data-countryCode="BE" value="32">Belgium (+32)</option>
    <option data-countryCode="BZ" value="501">Belize (+501)</option>
    <option data-countryCode="BJ" value="229">Benin (+229)</option>
    <option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
    <option data-countryCode="BT" value="975">Bhutan (+975)</option>
    <option data-countryCode="BO" value="591">Bolivia (+591)</option>
    <option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
    <option data-countryCode="BW" value="267">Botswana (+267)</option>
    <option data-countryCode="BR" value="55">Brazil (+55)</option>
    <option data-countryCode="BN" value="673">Brunei (+673)</option>
    <option data-countryCode="BG" value="359">Bulgaria (+359)</option>
    <option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
    <option data-countryCode="BI" value="257">Burundi (+257)</option>
    <option data-countryCode="KH" value="855">Cambodia (+855)</option>
    <option data-countryCode="CM" value="237">Cameroon (+237)</option>
    <option data-countryCode="CA" value="1">Canada (+1)</option>
    <option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
    <option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
    <option data-countryCode="CF" value="236">Central African Republic (+236)</option>
    <option data-countryCode="CL" value="56">Chile (+56)</option>
    <option data-countryCode="CN" value="86">China (+86)</option>
    <option data-countryCode="CO" value="57">Colombia (+57)</option>
    <option data-countryCode="KM" value="269">Comoros (+269)</option>
    <option data-countryCode="CG" value="242">Congo (+242)</option>
    <option data-countryCode="CK" value="682">Cook Islands (+682)</option>
    <option data-countryCode="CR" value="506">Costa Rica (+506)</option>
    <option data-countryCode="HR" value="385">Croatia (+385)</option>
    <option data-countryCode="CU" value="53">Cuba (+53)</option>
    <option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
    <option data-countryCode="CY" value="357">Cyprus South (+357)</option>
    <option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
    <option data-countryCode="DK" value="45">Denmark (+45)</option>
    <option data-countryCode="DJ" value="253">Djibouti (+253)</option>
    <option data-countryCode="DM" value="1809">Dominica (+1809)</option>
    <option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
    <option data-countryCode="EC" value="593">Ecuador (+593)</option>
    <option data-countryCode="EG" value="20">Egypt (+20)</option>
    <option data-countryCode="SV" value="503">El Salvador (+503)</option>
    <option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
    <option data-countryCode="ER" value="291">Eritrea (+291)</option>
    <option data-countryCode="EE" value="372">Estonia (+372)</option>
    <option data-countryCode="ET" value="251">Ethiopia (+251)</option>
    <option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
    <option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
    <option data-countryCode="FJ" value="679">Fiji (+679)</option>
    <option data-countryCode="FI" value="358">Finland (+358)</option>
    <option data-countryCode="FR" value="33">France (+33)</option>
    <option data-countryCode="GF" value="594">French Guiana (+594)</option>
    <option data-countryCode="PF" value="689">French Polynesia (+689)</option>
    <option data-countryCode="GA" value="241">Gabon (+241)</option>
    <option data-countryCode="GM" value="220">Gambia (+220)</option>
    <option data-countryCode="GE" value="7880">Georgia (+7880)</option>
    <option data-countryCode="DE" value="49">Germany (+49)</option>
    <option data-countryCode="GH" value="233">Ghana (+233)</option>
    <option data-countryCode="GI" value="350">Gibraltar (+350)</option>
    <option data-countryCode="GR" value="30">Greece (+30)</option>
    <option data-countryCode="GL" value="299">Greenland (+299)</option>
    <option data-countryCode="GD" value="1473">Grenada (+1473)</option>
    <option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
    <option data-countryCode="GU" value="671">Guam (+671)</option>
    <option data-countryCode="GT" value="502">Guatemala (+502)</option>
    <option data-countryCode="GN" value="224">Guinea (+224)</option>
    <option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
    <option data-countryCode="GY" value="592">Guyana (+592)</option>
    <option data-countryCode="HT" value="509">Haiti (+509)</option>
    <option data-countryCode="HN" value="504">Honduras (+504)</option>
    <option data-countryCode="HK" value="852">Hong Kong (+852)</option>
    <option data-countryCode="HU" value="36">Hungary (+36)</option>
    <option data-countryCode="IS" value="354">Iceland (+354)</option>
    <option data-countryCode="IN" value="91">India (+91)</option>
    <option data-countryCode="ID" value="62">Indonesia (+62)</option>
    <option data-countryCode="IR" value="98">Iran (+98)</option>
    <option data-countryCode="IQ" value="964">Iraq (+964)</option>
    <option data-countryCode="IE" value="353">Ireland (+353)</option>
    <option data-countryCode="IL" value="972">Israel (+972)</option>
    <option data-countryCode="IT" value="39">Italy (+39)</option>
    <option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
    <option data-countryCode="JP" value="81">Japan (+81)</option>
    <option data-countryCode="JO" value="962">Jordan (+962)</option>
    <option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
    <option data-countryCode="KE" value="254">Kenya (+254)</option>
    <option data-countryCode="KI" value="686">Kiribati (+686)</option>
    <option data-countryCode="KP" value="850">Korea North (+850)</option>
    <option data-countryCode="KR" value="82">Korea South (+82)</option>
    <option data-countryCode="KW" value="965">Kuwait (+965)</option>
    <option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
    <option data-countryCode="LA" value="856">Laos (+856)</option>
    <option data-countryCode="LV" value="371">Latvia (+371)</option>
    <option data-countryCode="LB" value="961">Lebanon (+961)</option>
    <option data-countryCode="LS" value="266">Lesotho (+266)</option>
    <option data-countryCode="LR" value="231">Liberia (+231)</option>
    <option data-countryCode="LY" value="218">Libya (+218)</option>
    <option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
    <option data-countryCode="LT" value="370">Lithuania (+370)</option>
    <option data-countryCode="LU" value="352">Luxembourg (+352)</option>
    <option data-countryCode="MO" value="853">Macao (+853)</option>
    <option data-countryCode="MK" value="389">Macedonia (+389)</option>
    <option data-countryCode="MG" value="261">Madagascar (+261)</option>
    <option data-countryCode="MW" value="265">Malawi (+265)</option>
    <option data-countryCode="MY" value="60">Malaysia (+60)</option>
    <option data-countryCode="MV" value="960">Maldives (+960)</option>
    <option data-countryCode="ML" value="223">Mali (+223)</option>
    <option data-countryCode="MT" value="356">Malta (+356)</option>
    <option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
    <option data-countryCode="MQ" value="596">Martinique (+596)</option>
    <option data-countryCode="MR" value="222">Mauritania (+222)</option>
    <option data-countryCode="YT" value="269">Mayotte (+269)</option>
    <option data-countryCode="MX" value="52">Mexico (+52)</option>
    <option data-countryCode="FM" value="691">Micronesia (+691)</option>
    <option data-countryCode="MD" value="373">Moldova (+373)</option>
    <option data-countryCode="MC" value="377">Monaco (+377)</option>
    <option data-countryCode="MN" value="976">Mongolia (+976)</option>
    <option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
    <option data-countryCode="MA" value="212">Morocco (+212)</option>
    <option data-countryCode="MZ" value="258">Mozambique (+258)</option>
    <option data-countryCode="MN" value="95">Myanmar (+95)</option>
    <option data-countryCode="NA" value="264">Namibia (+264)</option>
    <option data-countryCode="NR" value="674">Nauru (+674)</option>
    <option data-countryCode="NP" value="977">Nepal (+977)</option>
    <option data-countryCode="NL" value="31">Netherlands (+31)</option>
    <option data-countryCode="NC" value="687">New Caledonia (+687)</option>
    <option data-countryCode="NZ" value="64">New Zealand (+64)</option>
    <option data-countryCode="NI" value="505">Nicaragua (+505)</option>
    <option data-countryCode="NE" value="227">Niger (+227)</option>
    <option data-countryCode="NG" value="234">Nigeria (+234)</option>
    <option data-countryCode="NU" value="683">Niue (+683)</option>
    <option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
    <option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
    <option data-countryCode="NO" value="47">Norway (+47)</option>
    <option data-countryCode="OM" value="968">Oman (+968)</option>
    <option data-countryCode="PK" value="92">Pakistan (+92)</option>
    <option data-countryCode="PW" value="680">Palau (+680)</option>
    <option data-countryCode="PA" value="507">Panama (+507)</option>
    <option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
    <option data-countryCode="PY" value="595">Paraguay (+595)</option>
    <option data-countryCode="PE" value="51">Peru (+51)</option>
    <option data-countryCode="PH" value="63">Philippines (+63)</option>
    <option data-countryCode="PL" value="48">Poland (+48)</option>
    <option data-countryCode="PT" value="351">Portugal (+351)</option>
    <option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
    <option data-countryCode="QA" value="974">Qatar (+974)</option>
    <option data-countryCode="RE" value="262">Reunion (+262)</option>
    <option data-countryCode="RO" value="40">Romania (+40)</option>
    <option data-countryCode="RU" value="7">Russia (+7)</option>
    <option data-countryCode="RW" value="250">Rwanda (+250)</option>
    <option data-countryCode="SM" value="378">San Marino (+378)</option>
    <option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
    <option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
    <option data-countryCode="SN" value="221">Senegal (+221)</option>
    <option data-countryCode="CS" value="381">Serbia (+381)</option>
    <option data-countryCode="SC" value="248">Seychelles (+248)</option>
    <option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
    <option data-countryCode="SG" value="65">Singapore (+65)</option>
    <option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
    <option data-countryCode="SI" value="386">Slovenia (+386)</option>
    <option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
    <option data-countryCode="SO" value="252">Somalia (+252)</option>
    <option data-countryCode="ZA" value="27">South Africa (+27)</option>
    <option data-countryCode="ES" value="34">Spain (+34)</option>
    <option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
    <option data-countryCode="SH" value="290">St. Helena (+290)</option>
    <option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
    <option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
    <option data-countryCode="SD" value="249">Sudan (+249)</option>
    <option data-countryCode="SR" value="597">Suriname (+597)</option>
    <option data-countryCode="SZ" value="268">Swaziland (+268)</option>
    <option data-countryCode="SE" value="46">Sweden (+46)</option>
    <option data-countryCode="CH" value="41">Switzerland (+41)</option>
    <option data-countryCode="SI" value="963">Syria (+963)</option>
    <option data-countryCode="TW" value="886">Taiwan (+886)</option>
    <option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
    <option data-countryCode="TH" value="66">Thailand (+66)</option>
    <option data-countryCode="TG" value="228">Togo (+228)</option>
    <option data-countryCode="TO" value="676">Tonga (+676)</option>
    <option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
    <option data-countryCode="TN" value="216">Tunisia (+216)</option>
    <option data-countryCode="TR" value="90">Turkey (+90)</option>
    <option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
    <option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
    <option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
    <option data-countryCode="TV" value="688">Tuvalu (+688)</option>
    <option data-countryCode="UG" value="256">Uganda (+256)</option>
    <option data-countryCode="GB" value="44">UK (+44)</option>
    <option data-countryCode="UA" value="380">Ukraine (+380)</option>
    <option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
    <option data-countryCode="UY" value="598">Uruguay (+598)</option>
    <option data-countryCode="US" value="1">USA (+1)</option>
    <option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
    <option data-countryCode="VU" value="678">Vanuatu (+678)</option>
    <option data-countryCode="VA" value="379">Vatican City (+379)</option>
    <option data-countryCode="VE" value="58">Venezuela (+58)</option>
    <option data-countryCode="VN" value="84">Vietnam (+84)</option>
    <option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
    <option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
    <option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
    <option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
    <option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
    <option data-countryCode="ZM" value="260">Zambia (+260)</option>
    <option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
</select>
<?php echo form_error('countrycode'); ?>

  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>

    <?php 
 $data = array(
        'name'          => 'mobilenumber',
        'value'         => $joblist1->mobilenumber,
        'type'          => 'number',
        'required'=>'',
        'placeholder'     => 'Enyer your Mobile Number',
        'class' => 'form-control'
);
echo form_input($data);
echo form_error('mobilenumber');

    ?>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Landline Number</label>

    <?php 
      $data = array(
        'name'          => 'landlinenumber',
        'value'         => $joblist1->landlinenumber,
        'type'          => 'number',
        'required'=>'',
        'placeholder'     => 'Enyer your LandLine Number',
        'class' => 'form-control'
);
echo form_input($data);
echo form_error('landlinenumber');
    ?>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Experience</label>

    <?php 
    $data9 = array(
        'name'          => 'experience',
        'value'         => $joblist1->experience,
        'required'=>'',
        'type' => 'number',
        'placeholder'     => '(OPTIONAL) Experience in years (1, 2 or 6,..) ',
        'class' => 'form-control'
);

echo form_input($data9);
echo form_error('experience');
    ?>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Specify Prefered Industory</label>

    <select name="industory" class="form-control" placeholder="Specify company industory">
<option value="<?= $joblist1->industory?>" selected><?= $joblist1->industory?></option>
<option value="Airlines/Aviation">Airlines/Aviation</option>
<option value="Alternative Dispute Resolution">Alternative Dispute Resolution</option>
<option value="Alternative Medicine">Alternative Medicine</option>
<option value="Animation">Animation</option>
<option value="Apparel & Fashion">Apparel & Fashion</option>
<option value="Architecture & Planning">Architecture & Planning</option>
<option value="Arts and Crafts">Arts and Crafts</option>
<option value="Automotive">Automotive</option>
<option value="Aviation & Aerospace">Aviation & Aerospace</option>
<option value="Banking">Banking</option>
<option value="Biotechnology">Biotechnology</option>
<option value="Broadcast Media">Broadcast Media</option>
<option value="Building Materials">Building Materials</option>
<option value="Business Supplies and Equipment">Business Supplies and Equipment</option>
<option value="Capital Markets">Capital Markets</option>
<option value="Chemicals">Chemicals</option>
<option value="Civic & Social Organization">Civic & Social Organization</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Commercial Real Estate">Commercial Real Estate</option>
<option value="Computer & Network Security">Computer & Network Security</option>
<option value="Computer Games">Computer Games</option>
<option value="Computer Hardware">Computer Hardware</option>
<option value="Computer Networking">Computer Networking</option>
<option value="Computer Software">Computer Software</option>
<option value="Construction">Construction</option>
<option value="Consumer Electronics">Consumer Electronics</option>
<option value="Consumer Goods">Consumer Goods</option>
<option value="Consumer Services">Consumer Services</option>
<option value="Cosmetics">Cosmetics</option>
<option value="Dairy">Dairy</option>
<option value="Defense & Space">Defense & Space</option>
<option value="Design">Design</option>
<option value="Education Management">Education Management</option>
<option value="E-Learning">E-Learning</option>
<option value="Electrical/Electronic Manufacturing">Electrical/Electronic Manufacturing</option>
<option value="Entertainment">Entertainment</option>
<option value="Environmental Services">Environmental Services</option>
<option value="Events Services">Events Services</option>
<option value="Executive Office">Executive Office</option>
<option value="Facilities Services">Facilities Services</option>
<option value="Farming">Farming</option>
<option value="Financial Services">Financial Services</option>
<option value="Fine Art">Fine Art</option>
<option value="Fishery">Fishery</option>
<option value="Food & Beverages">Food & Beverages</option>
<option value="Food Production">Food Production</option>
<option value="Fund-Raising">Fund-Raising</option>
<option value="Furniture">Furniture</option>
<option value="Gambling & Casinos">Gambling & Casinos</option>
<option value="Glass, Ceramics & Concrete">Glass, Ceramics & Concrete</option>
<option value="Government Administration">Government Administration</option>
<option value="Government Relations">Government Relations</option>
<option value="Graphic Design">Graphic Design</option>
<option value="Health, Wellness and Fitness">Health, Wellness and Fitness</option>
<option value="Higher Education">Higher Education</option>
<option value="Hospital & Health Care">Hospital & Health Care</option>
<option value="Hospitality">Hospitality</option>
<option value="Human Resources">Human Resources</option>
<option value="Import and Export">Import and Export</option>
<option value="Individual & Family Services">Individual & Family Services</option>
<option value="Industrial Automation">Industrial Automation</option>
<option value="Information Services">Information Services</option>
<option value="Information Technology and Services">Information Technology and Services</option>
<option value="Insurance">Insurance</option>
<option value="International Affairs">International Affairs</option>
<option value="International Trade and Development">International Trade and Development</option>
<option value="Internet">Internet</option>
<option value="Investment Banking">Investment Banking</option>
<option value="Investment Management">Investment Management</option>
<option value="Judiciary">Judiciary</option>
<option value="Law Enforcement">Law Enforcement</option>
<option value="Law Practice">Law Practice</option>
<option value="Legal Services">Legal Services</option>
<option value="Legislative Office">Legislative Office</option>
<option value="Leisure, Travel & Tourism">Leisure, Travel & Tourism</option>
<option value="Libraries">Libraries</option>
<option value="Logistics and Supply Chain">Logistics and Supply Chain</option>
<option value="Luxury Goods & Jewelry">Luxury Goods & Jewelry</option>
<option value="Machinery">Machinery</option>
<option value="Management Consulting">Management Consulting</option>
<option value="Maritime">Maritime</option>
<option value="Marketing and Advertising">Marketing and Advertising</option>
<option value="Market Research">Market Research</option>
<option value="Mechanical or Industrial Engineering">Mechanical or Industrial Engineering</option>
<option value="Media Production">Media Production</option>
<option value="Medical Devices">Medical Devices</option>
<option value="Medical Practice">Medical Practice</option>
<option value="Mental Health Care">Mental Health Care</option>
<option value="Military">Military</option>
<option value="Mining & Metals">Mining & Metals</option>
<option value="Motion Pictures and Film">Motion Pictures and Film</option>
<option value="Museums and Institutions">Museums and Institutions</option>
<option value="Music">Music</option>
<option value="Nanotechnology">Nanotechnology</option>
<option value="Newspapers">Newspapers</option>
<option value="Non-Profit Organization Management">Non-Profit Organization Management</option>
<option value="Oil & Energy">Oil & Energy</option>
<option value="Online Media">Online Media</option>
<option value="Outsourcing/Offshoring">Outsourcing/Offshoring</option>
<option value="Package/Freight Delivery">Package/Freight Delivery</option>
<option value="Packaging and Containers">Packaging and Containers</option>
<option value="Paper & Forest Products">Paper & Forest Products</option>
<option value="Performing Arts">Performing Arts</option>
<option value="Pharmaceuticals">Pharmaceuticals</option>
<option value="Philanthropy">Philanthropy</option>
<option value="Photography">Photography</option>
<option value="Plastics">Plastics</option>
<option value="Political Organization">Political Organization</option>
<option value="Primary/Secondary Education">Primary/Secondary Education</option>
<option value="Printing">Printing</option>
<option value="Professional Training & Coaching">Professional Training & Coaching</option>
<option value="Program Development">Program Development</option>
<option value="Public Policy">Public Policy</option>
<option value="Public Relations and Communications">Public Relations and Communications</option>
<option value="Public Safety">Public Safety</option>
<option value="Publishing">Publishing</option>
<option value="Railroad Manufacture">Railroad Manufacture</option>
<option value="Ranching">Ranching</option>
<option value="Real Estate">Real Estate</option>
<option value="Recreational Facilities and Services">Recreational Facilities and Services</option>
<option value="Religious Institutions">Religious Institutions</option>
<option value="Renewables & Environment">Renewables & Environment</option>
<option value="Research">Research</option>
<option value="Restaurants">Restaurants</option>
<option value="Retail">Retail</option>
<option value="Security and Investigations">Security and Investigations</option>
<option value="Semiconductors">Semiconductors</option>
<option value="Shipbuilding">Shipbuilding</option>
<option value="Sporting Goods">Sporting Goods</option>
<option value="Sports">Sports</option>
<option value="Staffing and Recruiting">Staffing and Recruiting</option>
<option value="Supermarkets">Supermarkets</option>
<option value="Telecommunications">Telecommunications</option>
<option value="Textiles">Textiles</option>
<option value="Think Tanks">Think Tanks</option>
<option value="Tobacco">Tobacco</option>
<option value="Translation and Localization">Translation and Localization</option>
<option value="Transportation/Trucking/Railroad">Transportation/Trucking/Railroad</option>
<option value="Utilities">Utilities</option>
<option value="Venture Capital & Private Equity">Venture Capital & Private Equity</option>
<option value="Veterinary">Veterinary</option>
<option value="Warehousing">Warehousing</option>
<option value="Wholesale">Wholesale</option>
<option value="Wine and Spirits">Wine and Spirits</option>
<option value="Wireless">Wireless</option>
<option value="Writing and Editing">Writing and Editing</option>
</select>
<?php echo form_error('industory'); ?>


  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Currency Type for Salary</label>

<select name="currencytype" class="form-control">
    <option value="<?= $joblist1->currencytype;?>" selected="selected"><?= $joblist1->currencytype;?></option>
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

<?php echo form_error('currencytype'); ?>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Your current Salary</label>

    <?php 
$data01 = array(
        'name'          => 'currentsalery',
        'value'         => $joblist1->currentsalery,
        'required'=>'',
        'type' => 'number',
        'placeholder'     => 'Enter your current Salary',
        'class' => 'form-control'
);
echo form_input($data01);
echo form_error('currentsalery');
    ?>

  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Your desired Salary</label>

    <?php 
$data01 = array(
        'name'          => 'desiredsalary',
        'value'         => $joblist1->desiredsalary,
        'required'=>'',
        'type' => 'number',
        'style' =>'margin-bottom:20px;',
        'placeholder'     => 'Enter your desired Salary',
        'class' => 'form-control'
);
echo form_input($data01);
echo form_error('desiredsalary');
    ?>

  </div>
 
  <div class="form-group">
<button type="submit" name="submit" class="btn btn-primary">Submit Changes</button>
  </div>




   
<?php ;} ?>
</div>
</div>
</div>
        </main>

      </div>
    </div>
<?php require("footer.php");?>
<!--php required footer-->