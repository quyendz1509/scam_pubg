<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/html/neon/html/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:28:10 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a Responsive Bootstrap 4 Admin Dashboard Template">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Neon - Responsive Bootstrap 4 Admin Dashboard & UI Kits</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Start CSS -->
    <!-- Chartist Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/chartist-js/chartist.min.css">

    <!-- Datepicker CSS -->
    <link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/addaf87e34.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.4/dist/sweetalert2.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.5.4/dist/sweetalert2.all.min.js"></script>
    <!-- End CSS -->

</head>

<body class="xp-vertical">
    <!-- Search Modal -->
    <div class="modal search-modal fade" id="xpSearchModal" tabindex="-1" role="dialog" aria-labelledby="xpSearchModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="xp-searchbar">
                <form>
                    <div class="input-group">
                      <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                      <div class="input-group-append">
                        <button class="btn" type="submit" id="button-addon2">GO</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- Start XP Container -->
<div id="xp-container">

    <!-- Start XP Leftbar -->
    <div class="xp-leftbar">    

        <!-- Start XP Sidebar -->
        <div class="xp-sidebar">

            <!-- Start XP Logobar -->
            <div class="xp-logobar text-center">
                <a href="home" class="xp-logo"><img src="assets/images/logo.svg" class="img-fluid" alt="logo"></a>
            </div>
            <!-- End XP Logobar -->

            <!-- Start XP Navigationbar -->
            <div class="xp-navigationbar">
                <ul class="xp-vertical-menu">
                    <li class="xp-vertical-header">Main</li>
                    <li>
                        <a href="../quanly/">
                          <i class="icon-speedometer"></i><span>Dashboard</span>
                      </a>
                  </li>
                 
            
            
            
        </ul>
    </div>
    <!-- End XP Navigationbar -->

</div>
<!-- End XP Sidebar -->

</div>
<!-- End XP Leftbar -->

<!-- Start XP Rightbar -->
<div class="xp-rightbar">

    <!-- Start XP Topbar -->
    <div class="xp-topbar">

        <!-- Start XP Row -->
        <div class="row"> 

            <!-- Start XP Col -->
            <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                <div class="xp-menubar">
                    <a class="xp-menu-hamburger" href="javascript:void();">
                     <i class="icon-menu font-20 text-white"></i>
                 </a>
             </div>
         </div> 
         <!-- End XP Col -->

         <!-- Start XP Col -->
         <div class="col-10 col-md-11 col-lg-11 order-1 order-md-2">
            <div class="xp-profilebar text-right">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <div class="xp-search">
                            <a href="#" class="text-white" data-toggle="modal" data-target="#xpSearchModal"><i class="icon-magnifier"></i></a>                                        
                        </div>
                    </li>

<li class="list-inline-item mr-0">
    <div class="dropdown xp-userprofile">
        <a class="dropdown-toggle" href="#" role="button" id="xp-userprofile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/topbar/user.jpg" alt="user-profile" class="rounded-circle img-fluid"><span class="xp-user-live"></span></a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="xp-userprofile">

            <a class="dropdown-item" href="dangxuat"><i class="icon-power text-danger mr-2"></i> Logout</a>
        </div>
    </div>                                   
</li>
</ul>
</div>
</div>
<!-- End XP Col -->

</div> 
<!-- End XP Row -->
<?php
session_start()
 ?>
</div>
<!-- End XP Topbar -->
