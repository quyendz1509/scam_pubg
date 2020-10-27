<?php

if (isset($_SESSION['pas'])) {
header('location: home');
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from xpanthersolutions.com/html/neon/html/vertical/page-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:37:40 GMT -->
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Neon is a Responsive Bootstrap 4 Admin Dashboard Template">
    <meta name="keywords" content="admin, admin template, admin panel, dashboard template, ui kits, web app, crm, cms, responsive, bootstrap 4, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Neon - Responsive Bootstrap 4 Admin Dashboard & UI Kits</title>

    <!-- Fevicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <!-- Start CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
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

    <div class="xp-authenticate-bg"></div>
    <!-- Start XP Container -->
    <div id="xp-container" class="xp-container">

        <!-- Start Container -->
        <div class="container">

            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">

                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">

                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center mt-0 m-b-15">
                                    <a href="index.html" class="xp-web-logo"><img src="./assets/images/logo.svg" height="40" alt="logo"></a>
                                </h3>
                                <div class="p-3"> 
                                    <form>
                                        <div class="text-center mb-3">
                                            <h4 class="text-black">QUẢN TRỊ VIÊN</h4>
                                            <p class="text-muted">Nếu bạn đang truy cập trái phép thì xin mời bạn đi ra !</p>
                                        </div>
                                        <div class="xp-user-logo text-center mb-3">
                                            <img src="https://image.freepik.com/free-vector/hacker-operating-laptop-icon-hacker-laptop-hacker-technology-icon-white-isolated_138676-494.jpg" class="rounded-circle img-fluid" alt="user-img">
                                        </div>
                                        <p class="text-muted text-center m-b-30">Nhập mật khẩu truy cập !</p>

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" placeholder="Password" required>
                                        </div>                          
                                        <button id="login" type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">Đăng nhập</button>
                                    </form>
                                </div>
                                <div id="done"></div>
                            </div>
                        </div>

                        <script>
                            $(document).ready(function() {
                             $('#login').click(function(event) {
                              var  password = $('#password').val();
                              if (password == "") {
                                Swal.fire({
                                  icon: 'error',
                                  title: 'Oops...',
                                  text: 'Vui lòng nhập mật khẩu !',
                              })
                            }else{
                                $.ajax({
                                    url: 'xuly1.php',
                                    type: 'POST',
                                    method: 'POST',
                                    data: {password:password},
                                })
                                .done(function(responsive) {
                                    $('#done').html(responsive);
                                })
                                .fail(function(responsive) {
                                    $('#done').html(responsive);
                                })
                            }
                            event.preventDefault();
                        }); 
                         });
                     </script>

                 </div>
                 <!-- End XP Auth Box -->

             </div>
             <!-- End XP Col -->
         </div>
         <!-- End XP Row -->
     </div>
     <!-- End Container -->
 </div>
 <!-- End XP Container -->

 <!-- Start JS -->        
 <script src="./assets/js/jquery.min.js"></script>
 <script src="./assets/js/popper.min.js"></script>
 <script src="./assets/js/bootstrap.min.js"></script>
 <script src="./assets/js/modernizr.min.js"></script>
 <script src="./assets/js/detect.js"></script>
 <script src="./assets/js/jquery.slimscroll.js"></script>
 <script src="./assets/js/sidebar-menu.js"></script>

 <!-- Main JS -->
 <script src="./assets/js/main.js"></script>
 <!-- End JS -->

</body>

<!-- Mirrored from xpanthersolutions.com/html/neon/html/vertical/page-lock-screen.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jan 2020 15:37:43 GMT -->
</html>