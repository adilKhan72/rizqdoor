<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $page; ?></title>

  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/icon-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/logo-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="icon" href="<?= base_url('assets/images/logo_header_browser.gif" type="image/gif" sizes="16x16'); ?>">

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/stylesheet/simple-sidebar.css'); ?> ">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/jobseekerdashboard/stylesheet/style.css'); ?>"><!-- custom stylesheet for designing-->
  <style>
.cvupdatebutton{
    color:#53BD6D;
    border:none;
    cursor: pointer;
    font-weight: 500;
  }
.cvupdatebutton:hover{
 color:#53BD6D;
    border:0px;
    text-decoration: none;
    cursor: pointer;
}
.test{
  height: 0px;
  overflow: hidden;
  transition: height 1s;
}

/**
 * Profile image component
 */
.profile-header-container{
    margin: 0 auto;
    text-align: center;
}

.profile-header-img {
    padding: 10px;
}

.profile-header-img > img.img-circle {
    width: 150px;
    height: 150px;
    border: 2px solid #51D2B7;
}

.profile-header {
    margin-top: 30px;
}

/**
 * Ranking component
 */
.rank-label-container {
    margin-top: -19px;
    /* z-index: 1000; */
    text-align: center;
    cursor: pointer;
}

.label.label-default.rank-label {
    background-color: rgb(81, 210, 183);
    padding: 5px 10px 5px 10px;
    border-radius: 27px;
}
.rank-label > a{
  color:black;
}
.rank-label > a:hover, .label-default:hover, .rank-label:hover, .label.label-default:hover{
  text-decoration: none;
  background-color: #53BD6D;
}
.logojobsekerdashboard{
  color:#28a745; 

  text-decoration:none;
}
.logojobsekerdashboard:hover{
  color:#28a745; 
 
  text-decoration:none;
}


.over{
  position: absolute;
  display: none;
  width: 80%;
  height: auto;
  margin:auto;
  top: 60px;
  left: 0;
  right: 0;
  background-color: #f8f9fa ;
  border-radius:4px;
  border: 1px solid #dee2e6 ;
  z-index: 200;
  cursor: pointer;
}

  </style>
</head>

<body>
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading">
  <a  href="<?= base_url('users/index'); ?>" class="logojobsekerdashboard">
  <i id="logo" class="icon-LOGO">  
  izqdoor
</i> 
</a>
  </div>
  <div class="list-group list-group-flush">

    <a style="<?php if($page == "Dashboard"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/dashboard'); ?>" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a style="<?php if($page == "editjobseekerdetails"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/editjobseekerdetails'); ?>" class="list-group-item list-group-item-action bg-light">Edit Profile Details</a>
    <a style="<?php if($page == "changepassword"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/changepassword'); ?>" class="list-group-item list-group-item-action bg-light">Change Password</a>
    <a  style="<?php if($page == "changecv"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/changecv'); ?>" class="list-group-item list-group-item-action bg-light">Replace Resume</a>
    <a  style="<?php if($page == "jobsapplied"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/jobsapplied'); ?>" class="list-group-item list-group-item-action bg-light">
    Jobs Applied</a>

  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-dark" id="menu-toggle">Toggle Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?= $data1->name ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?= base_url('users/logout'); ?>">Log Out!</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>