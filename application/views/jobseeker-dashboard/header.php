<!doctype html>
<html lang="en">
  <head>
    <title>Jobseeker-Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/jobseekerdashboard/stylesheet/style.css'); ?>"><!-- custom stylesheet for designing-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/icon-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/logo-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="icon" href="<?= base_url('assets/images/logo_header_browser.gif" type="image/gif" sizes="16x16'); ?>">
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


  </style>
  </head>
  <body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 " href="<?= base_url('users/dashboard'); ?>" style="overflow: auto; font-family: monospace; font-size: 1.3em;">
     <i id="logo" class="icon-LOGO" style="">iqDoor</i>
</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('users/logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>