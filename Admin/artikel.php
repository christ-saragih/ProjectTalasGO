<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Artikel"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>
    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
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
                $maintitle = "Artikel";
                $title = "Data Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


               
                    </div>

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
                                            <a href="tambah-artikel.php"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Artikel Baru</button></a>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel1.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Mengenal Talas Lebih Jauh, Umbi yang<br> Biasa Diolah menjadi Makanan Ringan</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Alma Erin Mentari</span></h5><p>28 SEPTEMBER 2021, 10:07 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="tambah_artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel2.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Talas, Oleh-Oleh Asal Bogor yang Kaya Nutrisi</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Ariefiani Harahap</span></h5><p>03 OKTOBER 2019, 16.14 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="edit-artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel3.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Bogor Kota Talas</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Aan Madrus</span></h5><p>7 November 2017, 04:22 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="edit-artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel4.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Proses Mengolah Talas Beneng Hingga Jadi Tepung</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Pertanianku</span></h5> <p>11 Mei 2018, 14:00 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="edit-artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel5.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Melirik Talas Sebagai Potensi Pangan <br> Masyarakat Indonesia</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Ahmad Supardi</span></h5> <p>28 AGUSTUS 2020, 20.00 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="edit-artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/artikel/artikel6.jpeg" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="align-items-end mt-4">
                                            <center><div>
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">5 Cara Mengolah Talas agar Nggak Gatal Saat <br> Dimakan. Nggak Perlu Menghindar Lagi, Kan?</a></h5>
                                                <h5 class="my-0"><span class="text-muted me-2">Lea Lyliana</span></h5><p>1 JUNI 2023, 01.30 WIB</p>
                                            </div></center>
                                        </div>
                                        <center><div>
                                            <a href="detail-artikel.php" class="btn btn-info">Detail Artikel</a>
                                            <a href="edit-artikel.php" class="btn btn-primary">Edit</a>
                                            <a href="hapus-artikel.php" class="btn btn-danger">Hapus</a>
                                        </div></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pagination pagination-rounded justify-content-center mt-3 mb-4 pb-1">
                                    <li class="page-item disabled">
                                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="javascript: void(0);" class="page-link">1</a>
                                    </li>
                                    <li class="page-item ">
                                        <a href="javascript: void(0);" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript: void(0);" class="page-link">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript: void(0);" class="page-link">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript: void(0);" class="page-link">5</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
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

<!-- nouisliderribute js -->
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/product-filter-range.init.js"></script>

</body>

</html>