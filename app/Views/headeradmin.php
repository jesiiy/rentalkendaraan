<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Header Admin</title>
  <link rel="shortcut icon" type="image/png" href="<?=base_url('assets2/images/logos/seodashlogo.png')?>" />
  <link rel="stylesheet" href="<?=base_url('assets2/css/styles.min.css')?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


</head>
<style>
    /* General styles */
    body {
      background-color: #f4f4f4; /* Light gray background */
      font-family: Arial, sans-serif;
    }
    
    /* Sidebar */
    .sidebar-nav {
      background-color: #ffffff; /* White sidebar */
      border-right: 1px solid #ddd; /* Subtle border */
    }
    
    /* Sidebar items */
    .sidebar-item a {
      color: #333 !important; /* Dark gray text */
      text-decoration: none;
      padding: 10px 15px;
      display: block;
    }
    
    /* Header Logo */
    .brand-logo {
      display: flex;
      align-items: center;
      padding: 15px;
    }

    .brand-logo img {
      width: 35px; /* Small logo */
      height: auto;
      margin-right: 10px;
    }

    .brand-logo h3 {
      font-size: 16px;
      font-weight: bold;
      color: Pink;
      margin: 0;
    }
  </style>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo">
          <img src="<?=base_url('img/logopink2.jpg')?>" alt="Logo">
          <h3>Pink Panther Petugas</h3>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="fa-solid fa-house-user"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="dashboardadmin" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:home-smile-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-6"></i>
              <span class="hide-menu">Components</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="tabelkendaraan" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Tabel Kendaraan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="tabelpelanggan" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:layers-minimalistic-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Tabel Pelanggan</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="laporansewa" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:danger-circle-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Laporan</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-6" class="fs-6"></iconify-icon>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="login" aria-expanded="false">
                <span>
                  <iconify-icon icon="solar:login-3-bold-duotone" class="fs-6"></iconify-icon>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            </div>
          </div>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->s