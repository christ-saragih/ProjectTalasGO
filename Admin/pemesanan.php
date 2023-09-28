<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Pemesanan"]; ?> | Admin  - TalasGO</title>

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
                $maintitle = "Ecommerce";
                $title = "Data Pemesanan";
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
                                            <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"> Cetak</button>
                                        </div>
                                    </div><!-- end col-->
                                </div>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-check">
                                        <thead class="table-light">
                                            <tr>
                                                <th style="width: 20px;" class="align-middle">
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="checkAll">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th class="align-middle">ID</th>
                                                <th class="align-middle">Nama Pembeli</th>
                                                <th class="align-middle">Tanggal Pemesanan</th>
                                                <th class="align-middle">Total</th>
                                                <th class="align-middle">Status Pembayaran</th>
                                                <th class="align-middle">Metode Pembayaran</th>
                                                <th class="align-middle">Detail</th>
                                                <th class="align-middle">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                        <label class="form-check-label" for="orderidcheck01"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB001</a> </td>
                                                <td>Sevia Dwi Yanti</td>
                                                <td>
                                                    07 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 50.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> BCA
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                        Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck02">
                                                        <label class="form-check-label" for="orderidcheck02"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB002</a> </td>
                                                <td>Bennefit Christy</td>
                                                <td>
                                                    07 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 35.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-danger font-size-12">Belum Dibayar</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa me-1"></i> COD
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck03">
                                                        <label class="form-check-label" for="orderidcheck03"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB003</a> </td>
                                                <td>Najla Putri</td>
                                                <td>
                                                    08 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 75.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal me-1"></i> Mandiri
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck04">
                                                        <label class="form-check-label" for="orderidcheck04"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB004</a> </td>
                                                <td>Ihzra Fahrullizian</td>
                                                <td>
                                                    08 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 20.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> BNI
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck05">
                                                        <label class="form-check-label" for="orderidcheck05"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB005</a> </td>
                                                <td>Alif Reyhan</td>
                                                <td>
                                                    08 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 20. 000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-warning font-size-12">Pengembalian dana</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck06">
                                                        <label class="form-check-label" for="orderidcheck06"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB006</a> </td>
                                                <td>Jacob Hunter</td>
                                                <td>
                                                    09 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 50.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck07">
                                                        <label class="form-check-label" for="orderidcheck07"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB007</a> </td>
                                                <td>William Cruz</td>
                                                <td>
                                                    09 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 30.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">Selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fas fa-money-bill-alt me-1"></i> COD
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck08">
                                                        <label class="form-check-label" for="orderidcheck08"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB009</a> </td>
                                                <td>Dustin Moser</td>
                                                <td>
                                                    10 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 15.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-12">selesai</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check font-size-16">
                                                        <input class="form-check-input" type="checkbox" id="orderidcheck09">
                                                        <label class="form-check-label" for="orderidcheck09"></label>
                                                    </div>
                                                </td>
                                                <td><a href="javascript: void(0);" class="text-body fw-bold">#AB010</a> </td>
                                                <td>Clark Benson</td>
                                                <td>
                                                    10 Nov 2022
                                                </td>
                                                <td>
                                                    Rp. 70.000
                                                </td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-warning font-size-12">Pengembalian dana</span>
                                                </td>
                                                <td>
                                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-sm btn-rounded" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">
                                                    Lihat Detail
                                                    </button>
                                                </td>
                                                <td>
                                                    <div class="d-flex gap-3">
                                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-pencil font-size-18"></i></a>
                                                        <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-delete font-size-18"></i></a>
                                                    </div>
                                                </td>
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