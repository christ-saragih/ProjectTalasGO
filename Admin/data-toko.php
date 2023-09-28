<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Lokasi"]; ?> | Admin - TalasGO</title>

    <?php include 'layouts/head.php'; ?>
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                $maintitle = "Lokasi";
                $title = "Data Toko";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-14">
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
                                            <a href="tambah-datatoko.php"><button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i>Lokasi Baru</button></a>
                                        </div>
                                    </div><!-- end col-->
                                </div>
                        <div class="card">
                            

                            <div class="card-header">
                                <h4 class="card-title">Lokasi Persebaran Toko Talas</h4>
                                <p class="card-title-desc">Daerah Bogor</p>
                            </div>
                            <div class="card-body">
                                <div id="gmaps-markers" class="gmaps"></div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- container-fluid -->

                <?php include 'layouts/vendor-scripts.php'; ?>
                <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

                <!-- Gmaps file -->
                <script src="assets/libs/gmaps/gmaps.min.js"></script>

                <!-- demo codes -->
                <script src="assets/js/pages/gmaps.init.js"></script>

                <div class="row">
                    <div class="col-14">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Toko Penjual Produk Talas</h4>
                                <p class="card-title-desc">Daerah Bogor
                                </p>
                            </div>
                            <div class="card-ody">

                                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Telephone</th>
                                            <th>Jam Buka</th>
                                            <th>Jam Tutup</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>Lapis Bogor Sangkuriang</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Rumah Talas Bogor</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Kue Talas Bogor <br> Muara Sari</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>8 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Toko Lapis Talas <br> Bogor Aida</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>7 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Toko Lapis Talas <br> AraSari</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>9 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Kue Talas Bogor <br> Tengah </td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>8 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Sangkuriang</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Rumah Talas Bogor</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Kue Talas Bogor <br> Muara Sari</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>8 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Toko Lapis Talas <br> Bogor Aida</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>7 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Toko Lapis Talas <br> AraSari</td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>9 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Kue Talas Bogor <br> Tengah </td>
                                            <td>Jalan Raya Pajajaran No.77C Tegallega Kecamatan <br> Bogor Tengah, RT.04/RW.05, Baranangsiang, <br> Terminal, Bogor City, West Java 1612
                                            <td> 08118496117</td>
                                            <td>8 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Lapis Bogor Baru</td>
                                            <td>Emplesmen Stasiun KA Bogor, Jl. Nyi Raja Permas No.1, <br> Cibogor, Kecamatan Bogor Tengah, <br> Kota Bogor, Jawa Barat 16124</td>
                                            <td>0811849622</td>
                                            <td>6 am</td>
                                            <td>10 pm</td>
                                            <td>
                                                <a href='detail-toko.php'><button type='button' class='btn btn-primary'>Detail</button></a>
                                                <a href='edit-toko.php'><button type='button' class='btn btn-warning'>Edit</button></a>
                                                <a href=''><button type='button' class='btn btn-danger'>Hapus</button></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

            



<?php include 'layouts/right-sidebar.php'; ?>

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="assets/libs/jszip/jszip.min.js"></script>
<script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->
<script src="assets/js/pages/datatables.init.js"></script>

</body>

</html>