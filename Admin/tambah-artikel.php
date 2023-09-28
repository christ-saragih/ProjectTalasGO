<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["Tambah Artikel"]; ?> | Admin - TalasGO</title>

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
                $maintitle = "Artikel";
                $title = "Tambah Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Isilah data artikel yang akan dimasukkan !</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="judulartikel">Judul Artikel</label>
                                                <input id="judulartikel" name="judulartikel" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="pengarang">Pengarang</label>
                                                <input id="pengarang" name="pengarang" type="text" class="form-control" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="tanggalartikel">Tanggal Artikel</label>
                                                <input id="tanggalartikel" name="tanggalartikel" type="datetime-local" class="input-control" required>
                                            </div>
                                        </div>

                                            </div>
                                            <div class="mb-3">
                                                <label for="productdesc">Isi Artikel</label>
                                                <textarea class="form-control" id="productdesc" rows="5" required></textarea>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Gambar Terkait Artikel</h4>
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

                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </form>
                            </div>

                        </div> <!-- end card-->

                        
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