   <!-- Start XP Breadcrumbbar -->                    
   <div class="xp-breadcrumbbar">
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <h4 class="xp-page-title">Dashboard</h4>
        </div>
        <div class="col-md-12 col-lg-12">
            <div class="xp-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>          
</div>
<!-- End XP Breadcrumbbar -->

<!-- Start XP Contentbar -->    
<div class="xp-contentbar">

    <!-- Start Widget -->

    <!-- Start XP Row -->
    <div class="row"> 
        <!-- Start XP Col -->   
        <div class="col-md-12 col-lg-12 col-xl-12">

            <!-- Start XP Row -->
            <div class="row">                             
                <!-- Start XP Col -->
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <div class="card col-md-12 m-b-30">
                        <div class="card-header bg-white">
                            <h5 class="card-title text-black mb-0">Quản Lý</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable-buttons" class="table table-striped table-bordered" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#id</th>
                                            <th>User ID</th>
                                            <th>Tài khoản</th>
                                            <th>Mật Khẩu</th>
                                            <th>Thời Gian</th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach (get_sp() as $ds): ?>
                                            <tr>
                                                <td><?= $ds['id'] ?></td>
                                                <td><?= $ds['taikhoan'] ?></td>
                                                <td><?= $ds['user_id'] ?></td>
                                                <td><?= $ds['pass'] ?></td>
                                                <td> <strong class="text-danger"><?= $ds['date'] ?></strong></td>

                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col --> 
            </div>
            <!-- End XP Row -->

        </div>          
        <!-- End XP Col -->
        
        <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="row">


                <!-- Start XP Col -->                       
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-success-gradient m-b-30">
                        <div class="card-body">
                            <div class="xp-widget-box text-white text-center pt-3">
                                <p class="xp-icon-timer mb-4"><i class="icon-trophy"></i></p>
                                <h4 class="mb-2 font-20">Congratulations, Alex!</h4>
                                <p class="mb-3">Welcome aboard, Thank you for joining our Team.</p>
                                <button class="btn btn-white btn-rounded text-success">Ok, got it!</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-md-6 col-lg-6 col-xl-6">
                    <div class="card bg-danger-gradient m-b-30">
                        <div class="card-body">
                            <div class="xp-widget-box xp-widget-newsletter text-white text-center pt-3">
                                <p class="xp-icon-timer mb-4"><i class="icon-paper-plane"></i></p>
                                <h4 class="mb-2 font-20">Subscribe to Newsletter</h4>
                                <p class="mb-3">Please, provide your email address to get latest updates.</p>
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Enter Email" aria-label="Search" aria-describedby="button-addon-news">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon-news">GO</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End XP Col -->
            </div>
        </div>
        <!-- End XP Col -->

    </div>
    <!-- End XP Row -->


    <!-- Start Project -->
    <!-- End XP Row -->


</div>
                                                <!-- End XP Contentbar -->