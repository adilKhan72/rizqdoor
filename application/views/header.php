<!DOCTYPE html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RizqDoor</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="discription" content="content">
  <meta name="keyword" content="content">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/stylesheet/style.css'); ?>"><!-- custom stylesheet for desing-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/icon-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/logo-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="icon" href="<?= base_url('assets/images/logo_header_browser.gif" type="image/gif" sizes="16x16'); ?>">
  <style>
.resultpageform{
  display: block;
  padding:20px 0px;
}

.rizqdoorsloganresultpage{
  text-align: center;
}

/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */

</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134176839-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134176839-1');
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body>

<div class="se-pre-con"></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
  <div class="topnav" id="myTopnav"><!-- Top Navbar Start-->
   <a href="<?= base_url(''); ?>" class="logo active" ><i id="logo" class="icon-LOGO"></i></a>
   <a class="postjoblinkmenu" href="<?= base_url('employer/postjob'); ?>" onmouseover="abc2()" onmouseout="cba()" >Post a Job/Employer </a>
   <!--
   <div class="dropdown">
    <button class="dropbtn" onmouseover="abc1()" onmouseout="cba()">Find Jobs By   
      <i class=" icon-arrow-down customico-arrow-down-customizing" id="dropdown"></i>
    </button>
    <div class="dropdown-content" onmouseover="abc1()" onmouseout="cba()">
      <a href="#">By Job Role</a>
      <a href="#">By Location</a>
    </div>
  </div> 
   -->
  <div class="dropdown">
    <button class="dropbtn" onmouseover="abc3()" onmouseout="cba()"><a href="<?= base_url('blog'); ?>" title="">Blog 
      <i class=" icon-arrow-down customico-arrow-down-customizing" id="dropdown"></i></a>  
    </button>
 
    <div class="dropdown-content"  onmouseover="abc3()" onmouseout="cba()">
        <?php
   $type = "Finding-a-Job"
   ?>
      <a href="<?= base_url('blog/category/'.$type); ?>">Finding a Job</a>
      <?php
   $type = "Career-Planning"
   ?>
      <a href="<?= base_url('blog/category/'.$type); ?>">Career Planning</a>
      <?php
   $type = "Market-Insights"
   ?>
      <a href="<?= base_url('blog/category/'.$type); ?>">Market Insights</a>
      <?php
   $type = "Our-News"
   ?>
      <a href="<?= base_url('blog/category/'.$type); ?>">Our News</a>
      <?php
   $type = "Employer-Corner"
   ?>
      <a href="<?= base_url('blog/category/'.$type); ?>">Employer Corner</a>
    </div>
 
  </div> 

    <a class="rightlogin" href="<?= base_url('users/login'); ?>"   onmouseover="abc5()" onmouseout="cba()">Job Seeker &nbsp; Sign In/Up</a>
  <a href="javascript:void(0);"  class="icon" onclick="navResponsive()">
    <i class="customico-menu" id="topnavicon"></i>
  </a>
</div><!-- Top Navbar End-->