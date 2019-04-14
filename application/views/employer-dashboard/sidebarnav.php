<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" style="color:#EDFFD7; background-color: #F5F09D;" href="<?= base_url(''); ?>">
                  Home Page
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "Dashboard"){echo 'color:#28a745;  background-color: #edf5e1;';}?>"  href="<?= base_url('employer/dashboard'); ?>">

                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style=""  href="<?= base_url('employer/postjob'); ?>">

                  Post A Job
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "joblisting"){echo 'color:#28a745;  background-color: #edf5e1;';}?>"  href="<?= base_url('postedjob/joblisting'); ?>">
                  Posted Jobs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="<?php if($page == "candidatelisting"){echo 'color:#28a745;  background-color: #edf5e1;';}?>"  href="<?= base_url('Appliedcandidate/candidatelisting'); ?>">
                  Candidates
                </a>
              </li>
               
            </ul>
          </div>
        </nav>