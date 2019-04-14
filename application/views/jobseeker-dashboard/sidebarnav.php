<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" style="color:#636E7F; background-color: #EDFFD7;" href="<?= base_url(''); ?>">
                  Home Page
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "Dashboard"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/dashboard'); ?>">

                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "editjobseekerdetails"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/editjobseekerdetails'); ?>">

                  Edit Profile Details
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "changepassword"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/changepassword'); ?>">
                  Change Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "changecv"){echo 'color:#28a745; background-color: #edf5e1;';}?>"  href="<?= base_url('users/changecv'); ?>">
                 Replace Resume
                </a>
              </li>
               
            </ul>
          </div>
        </nav>