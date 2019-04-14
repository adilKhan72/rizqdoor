<div class="slider-custom-img"><!-- slider start-->
	<div class="divform">
		<p class="rizqdoorslogan"><i class="icon-LOGO " id="logosize"></i>izqDoor</p>
		<p class="rizqdoorslogan2">
                 
            The World's Leading Job Portal!
      </p>

    <?php 
    
    if($nodatamatch = $this->session->flashdata('nodatamatch'))
       {
        ?>
        <p class="afterheading didnotmatchalert" id="nodatamatch" style="">
          <?php
            echo $nodatamatch;
          ?>
        </p>
        <?php
      }else{
          ?>
          
          <?php
      }
    echo form_open('users/search'); 
echo form_error('searchtitle');
      $data = array(
        'name'          => 'searchtitle',
        'required' => '',
        'pattern' => '^[a-zA-Z\s]+$',
'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Title, Skill...',
);

echo form_input($data);


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




/*

$data4 = array(
        'name'          => 'city',
        'value'         => set_value('city'),
        'pattern' => '^[a-zA-Z]+$',
'title' => 'Only Alphabets allowed',
        'placeholder'     => 'City',
);

echo form_input($data4); 
echo form_error('city');

$data5 = array(
        'name'          => 'country',
        'value'         => set_value('country'),
                'pattern' => '^[a-zA-Z]+$',
'title' => 'Only Alphabets allowed',
        'placeholder'     => 'Country',
);

echo form_input($data5);
echo form_error('country');

*/

echo form_submit('submit', 'Search Jobs');

echo form_close();

    ?>
  </form>
</div>

</div><!-- slider ends-->