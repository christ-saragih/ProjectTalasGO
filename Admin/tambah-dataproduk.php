<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Produk"]; ?> | Dason - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>


    <!-- select2 css -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- dropzone css -->
    <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/pages/ecommerce-shop.init.js"></script>
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
                $title = "Tambah Produk";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informasi</h4>
                                <p class="card-title-desc">Isikan informasi dibawah ini !</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="productname">Nama Produk</label>
                                                <input id="productname" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Daerah Pengiriman</label>
                                                <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Stok Produk</label>
                                                <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Harga</label>
                                                <input id="price" name="price" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label class="control-label">Kategori</label>
                                                <select class="form-control select2" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="FA">Buah talas</option>
                                                    <option value="EL">Olahan talas</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="control-label">Ketersediaan Produk</label>

                                                <select class="select2 form-control select2-multiple" multiple="multiple" data-placeholder="Choose ...">
                                                    <option value="WI">Ready</option>
                                                    <option value="BE">PO</option>
                                                </select>

                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Deskripsi Produk</label>
                                                <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Batal</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Foto Produk</h4>
                            </div>
                            <div class="card-body">
                                <form action="/" method="post" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>

                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                        </div>

                                        <h4>Letakkan file di sini atau klik untuk mengunggah.</h4>
                                    </div>
                                </form>
                            </div>

                        </div> <!-- end card-->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Informasi Data</h4>
                                <p class="card-title-desc">Isikan Data di bawah !</p>
                            </div>
                            <div class="card-body">

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="metatitle">Nama Toko</label>

                                                <input id="metatitle" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="metakeywords">Email</label>
                                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                            <label for="metatitle">Tanggal</label> : 
                                                <input id="metakeywords" name="manufacturername" type="date" name="tanggal" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Simpan</button>
                                        <button type="submit" class="btn btn-secondary waves-effect waves-light">Batal</button>
                                    </div>
                                </form>

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

<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

</body>

</html>