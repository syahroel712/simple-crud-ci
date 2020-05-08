<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('home'); ?>">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB ADMIN <sup></sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('home'); ?>">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Home</span></a>
  </li>
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('tampil-aduan'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Aduan</span></a>
  </li>
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('tampil-kategori'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Kategori</span></a>
  </li>
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('tampil-posting'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Posting</span></a>
  </li>
  <hr class="sidebar-divider">

  <li class="nav-item">
    <a class="nav-link" href="<?php echo base_url('tampil-member'); ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>Data Member</span></a>
  </li>
  <hr class="sidebar-divider">


  <!-- Divider -->
  <!-- <hr class="sidebar-divider d-none d-md-block"> -->

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- <?php if ($this->session->userdata('level') == '1') : ?> -->
<!-- <?php elseif ($this->session->userdata('level') == '2') : ?> -->
<!-- <?php else : ?> -->
<!-- <li><?php echo anchor('login', 'Login'); ?></li> -->
<!-- <?php endif; ?> -->