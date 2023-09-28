<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Lokasi"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Lokasi";
                $title = "Tambah Data Toko";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Data Toko Daerah Bogor</h4>
                                <p class="card-title-desc">Isikan data toko terbaru</p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="productname">Nama Toko</label>
                                                <input id="productname" name="productname" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturername">Alamat</label>
                                                <input id="manufacturername" name="manufacturername" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="manufacturerbrand">Telephone</label>
                                                <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Link Google Maps</label>
                                                <input id="price" name="price" type="text" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="price">Letak Lokasi</label>
                                                <input id="price" name="price" type="text" class="form-control">
                                            </div>
                                            <div class="col-mb-6">
                                                <div class="mb-3 b">
                                                    <div id="gmaps-markers" class="gmaps"></div>
        
                                                </div>
                                            </div>

                                        </div> <!-- end col -->
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="control-label">Kategori</label>
                                                <select class="form-control select2">
                                                    <option>Select</option>
                                                    <option value="FA">Produk Talas</option>
                                                    <option value="EL">Buah Talas</option>
                                                    <option value="EL">Benih Talas</option>
                                                </select>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="productdesc">Deskripsi Singkat Toko</label>
                                                <textarea class="form-control" id="productdesc" rows="5"></textarea>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Gambar Toko</h4>
                                                </div>
                                                <div class="card-body">
                                                    <form action="/" method="post" class="dropzone">
                                                        <div class="fallback">
                                                            <input name="file" type="file" multiple />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div> <!-- container-fluid -->
                                </div>
                                

                                        </div>
                                        <!-- END layout-wrapper -->


                                        <?php include 'layouts/vendor-scripts.php'; ?>

                                        <!-- google maps api -->
                                        <script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

                                        <!-- Gmaps file -->
                                        <script src="assets/libs/gmaps/gmaps.min.js"></script>

                                        <!-- demo codes -->
                                        <script src="assets/js/pages/gmaps.init.js"></script>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Tambah</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>


<!-- select 2 plugin -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<!-- dropzone plugin -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/ecommerce-select2.init.js"></script>

</body>

</html>