<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Customers"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Data";
                $title = "Data Pengguna";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-4">
                                        <div class="search-box me-2 mb-2 d-inline-block">
                                            <div class="position-relative">
                                                <input type="text" class="form-control" placeholder="Cari...">
                                                <i class="bx bx-search-alt search-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="text-sm-end">
                                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Pengguna Baru</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Avatar</th>
                                                <th>Username</th>
                                                <th>Telpon / Email</th>
                                                <th>Alamat</th>
                                                <th>Tanggal Bergabung</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    1.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Najla Putri Afifah</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    2.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Sevia Dwi Yanti</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    3.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Ihzra Fahrullizian Yusuf</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    4.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Bennefit Christy Saragih</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    5.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Alif Reyhan Putra</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    6.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Stephen Rash</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    7.
                                                </td>
                                                <td>
                                                    <div class="avatar-md me-4">
                                                        <img src="./assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="">
                                                    </div>
                                                </td>
                                                <td>Stephen William</td>
                                                <td>
                                                    <p class="mb-1">325-250-1106</p>
                                                    <p class="mb-0">StephenRash@teleworm.us</p>
                                                </td>

                                                <td>2470 Grove Street
                                                    Bethpage, NY 11714</td>
                                                <td>07 Oct, 2019</td>
                                                <td><a href="#" class="dropdown-item"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i></a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <ul class="pagination pagination-rounded justify-content-end mb-2">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                            <i class="mdi mdi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                            <i class="mdi mdi-chevron-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->




            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>


</body>

</html>