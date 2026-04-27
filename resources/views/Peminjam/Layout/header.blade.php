<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/webadmin/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Mar 2026 22:44:14 GMT -->
<head>

        <meta charset="utf-8" />
        <title>Dashboard | webadmin - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- plugin css -->
        <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body data-layout="horizontal">

    <!-- <body data-layout="horizontal"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30">
                                </span>
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="26">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0"></h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <!-- <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/avatar-3.jpg') }}"
                                alt="Header Avatar"> -->
                                <i class="bx bx-user-circle icon nav-icon"></i>
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">Petugas</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Petugas</h6>
                                    <p class="mb-0 font-size-11 text-muted">Petugas@gmail.com</p>
                                </div>
                                <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
                                <a class="dropdown-item" href="/"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="28">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="26">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                           <li>
                                <a href="">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                </a>
                            </li>

                            <li class="menu-title" data-key="t-applications">Management</li>

                            <li>
                                <a href="/peminjaman">
                                    <i class="bx bx-cube icon icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-calendar">Peminjaman</span>
                                </a>
                            </li>

                            <li>
                                <a href="/pengembalian">
                                    <i class="bx bx-package icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-todo">Pengembalian</span>
                                </a>
                            </li>

                            <li>
                                <a href="/pelanggaran">
                                    <i class="bx bx bx-x-circle icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-filemanager">Pelanggaran</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
            <header class="ishorizontal-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-dark-sm.png') }}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="28">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-light-sm.png') }}" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="30">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 d-lg-none header-item" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="bx bx-menu align-middle"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Hi, Welcome Back!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-search icon-sm align-middle"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                                <form class="p-2">
                                    <div class="search-box">
                                        <div class="position-relative">
                                            <input type="text" class="form-control rounded bg-light border-0" placeholder="Search...">
                                            <i class="bx bx-search search-icon"></i>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @if (Auth::check())
                                <i class="bx bx-user-circle icon nav-icon"></i>
                                <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{ Auth::user()->nama }}</span>
                                
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">{{ Auth::user()->role }}</h6>
                                    <p class="mb-0 font-size-11 text-muted">{{ Auth::user()->email }}</p>
                                </div>
                                @endif
                                <!-- <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a> -->
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> 
                                        <span class="align-middle">
                                            Logout
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="index.html">
                                            <i class="bx bx-cube icon nav-icon"></i>
                                            <span data-key="t-dashboards">Alat</span>
                                        </a>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cube icon nav-icon"></i>
                                           <span data-key="t-elements">Riwayat</span> <div class="arrow-down"></div>
                                        </a>

                                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                            <div class="ps-2 p-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                            <div class="menu-title">Riwayat</div>
                                                            <div class="row g-0">
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Peminjaman</a>
                                                                        <a href="ui-lightbox.html" class="dropdown-item" data-key="t-lightbox">Pengembalian</a>
                                                                        <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Banding</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">

                        