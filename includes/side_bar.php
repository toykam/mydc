<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo ($activatedMenu == 'dashboard') ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo site_url(); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'admin') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
          <i class="fas fa-fw fa-users"></i>
          <span>Admins</span>
        </a>
        <div id="users" class="collapse <?php echo ($activatedMenu == 'admin') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Admin Management:</h6>
            <!-- <a class="collapse-item" href="<?php //echo site_url('/participants') ?>">Dashboard</a> -->
            <a class="collapse-item" href="<?php echo site_url('/admin/index.php'); ?>">All Admin</a>
            <a class="collapse-item" href="<?php echo site_url('/admin/add_admin.php'); ?>">Add new Admin</a>
          </div>
        </div>
      </li>


      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'participants') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">
          <i class="fas fa-fw fa-users"></i>
          <span>Participants</span>
        </a>
        <div id="users" class="collapse <?php echo ($activatedMenu == 'participants') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Participant Management:</h6>
            <!-- <a class="collapse-item" href="<?php //echo site_url('/participants') ?>">Dashboard</a> -->
            <a class="collapse-item" href="<?php echo site_url('/participants/all_participants.php'); ?>">All Participants</a>
            <a class="collapse-item" href="<?php echo site_url('/participants/add_new_participant.php'); ?>">Add new Participant</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'kitchen') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kitchen" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-users"></i>
          <span>Kitchen</span>
        </a>
        <div id="kitchen" class="collapse <?php echo ($activatedMenu == 'kitchen') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kitchen Management:</h6>
            <a class="collapse-item" href="<?php echo site_url('/kitchen'); ?>">Dashboard</a>
            <a class="collapse-item" href="<?php echo site_url('/kitchen/reports.php'); ?>">Reports</a>
            <a class="collapse-item" href="<?php echo site_url('/kitchen/members.php'); ?>">Members</a>
            <a class="collapse-item" href="<?php echo site_url('/kitchen/add_member.php'); ?>">Add new member</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'security') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#security" aria-expanded="true" aria-controls="security">
          <i class="fas fa-fw fa-users"></i>
          <span>Security</span>
        </a>
        <div id="security" class="collapse <?php echo ($activatedMenu == 'security') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Security Management:</h6>
            <a class="collapse-item" href="<?php echo site_url('/security'); ?>">Dashboard</a>
            <a class="collapse-item" href="<?php echo site_url('/security/reports.php'); ?>">Reports</a>
            <a class="collapse-item" href="<?php echo site_url('/security/members.php'); ?>">Members</a>
            <a class="collapse-item" href="<?php echo site_url('/security/add_member.php'); ?>">Add new member</a>
            <a class="collapse-item" href="<?php echo site_url('/security/post.php'); ?>">Assign Post</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'programs') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#programmes" aria-expanded="true" aria-controls="programmes">
          <i class="fas fa-fw fa-users"></i>
          <span>Programs</span>
        </a>
        <div id="programmes" class="collapse <?php echo ($activatedMenu == 'programs') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Programme Management:</h6>
            <a class="collapse-item" href="<?php echo site_url('/programs'); ?>">Dashboard</a>
            <a class="collapse-item" href="<?php echo site_url('/programs/reports.php'); ?>">Reports</a>
            <a class="collapse-item" href="<?php echo site_url('/programs/facilitators.php'); ?>">Facilitators</a>
            <a class="collapse-item" href="<?php echo site_url('/programs/add_facilitator.php'); ?>">Add new facilitator</a>
            <a class="collapse-item" href="<?php echo site_url('/programs/programs.php'); ?>">Programs</a>
            <a class="collapse-item" href="<?php echo site_url('/programs/add_programs.php'); ?>">Add Programs</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo ($activatedMenu == 'clinic') ? 'active' : ''; ?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#clinic" aria-expanded="true" aria-controls="clinic">
          <i class="fas fa-fw fa-users"></i>
          <span>Clinic</span>
        </a>
        <div id="clinic" class="collapse <?php echo ($activatedMenu == 'clinic') ? 'show' : ''; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Clinic Management:</h6>
            <a class="collapse-item" href="<?php echo site_url('/clinic'); ?>">Dashboard</a>
            <a class="collapse-item" href="<?php echo site_url('/clinic/reports.php'); ?>">Reports</a>
            <a class="collapse-item" href="<?php echo site_url('/clinic/staff.php'); ?>">Staff</a>
            <a class="collapse-item" href="<?php echo site_url('/clinic/add_staff.php'); ?>">Add new staff</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>