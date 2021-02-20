
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar 
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

         Sidebar - Brand //
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon ">
                <i class="fas fa-store"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Kerupuk Ikan</div>
        </a>

         Divider  //
        <hr class="sidebar-divider my-0">

         Nav Item - Dashboard //
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

         Divider //
        <hr class="sidebar-divider">

         Heading //
        <div class="sidebar-heading">
            Rasa
        </div>
       

         Nav Item - Tables //
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Kerupuk Manis</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Kerupuk Pedas</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Kerupuk Asin</span></a>
        </li>

        <!-- Divider //
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) //
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message //
        <div class="sidebar-card">
            <img class="sidebar-card-illustration mb-2" src="assets/img/undraw_rocket.svg" alt="">
            <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
            <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
        </div>

    </ul> 
    End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            
                <!-- Sidebar Toggle (Topbar) 
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button> -->
                
                <a class="sidebar-brand d-flex align-items-center justify-content-center merah" href="<?php echo base_url('welcome/index')?>">
                <div class="sidebar-brand-icon ">
                    <i class="fas fa-store"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kerupuk Ikan</div>
                </a>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-5 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Mau cari kerupuk ikan apa boi?"
                            aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-danger" type="button">
                                <i class="fas fa-search fa-sm "></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                            aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                        placeholder="Search for..." aria-label="Search"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="navbar float-sm-left">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php
                                $keranjangs= 'Keranjang: '.$this->cart->total_items
                                (). ' items'
                                ?>
                            
                            <?php echo anchor('dashboard/detail_keranjang',$keranjangs )?>
                            </li>
                        </ul>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <ul class="na navbar-nav navbar-right">
                            <?php if($this->session->userdata('username')) {?>
                                <li><a class="btn btn-sm" href="dashboard/ubah_profile">
                                <?php echo $this->session->userdata(
                                    'username') ?></a></li>
                               
                               

                                <li class="ml-2"><?php echo anchor('auth/logout',
                                    '<div class="btn btn-sm btn-danger">Keluar</div>') ?>
                                </a>
                            </li> 
                            <?php  } else { ?>
                                <li><?php echo anchor('auth/login', 
                                '<div class="btn btn-sm btn-primary">Masuk</div>'); ?></li>
                            
                            <?php }?>
                            
                            
                    </ul>

                </div>
                    
                

                    <!-- Nav Item - Keranjang
                    <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart fa-fw"></i>
                                <! Counter - Messages 
                                <span class="badge badge-danger badge-counter"></span>
                            </a>
                            <!-- Dropdown - Messages 
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Keranjang Belanja
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Lihat Selengkapnya</a>
                            </div>
                        </li> -->

                </ul>

            </nav>
            <!-- End of Topbar -->