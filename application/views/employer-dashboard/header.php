<!doctype html>
<html lang="en">
  <head>

    <title>Employer-Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/employerdashboard/stylesheet/style.css'); ?>"><!-- custom stylesheet for designing-->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/icon-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/custom-font-icons/logo-style.css'); ?> "><!-- custom stylesheet for icons -->
  <link rel="icon" href="<?= base_url('assets/images/logo_header_browser.gif" type="image/gif" sizes="16x16'); ?>">

  </head>
  <body>
  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0 " href="<?= base_url('employer/dashboard'); ?>" style="overflow: auto; font-family: monospace; font-size: 1.3em;">
     <i id="logo" class="icon-LOGO" style="">iqDoor</i>
</a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?= base_url('employer/logout'); ?>">Sign out</a>
        </li>
      </ul>
    </nav>