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
                $maintitle = "TalasGo";
                $title = "Artikel";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->
                
                <a href="artikel.php" class="btn btn-primary" style="margin:10px 0;">Kembali</a>

                <center><h1>Mengenal Talas Lebih Jauh, Umbi yang Biasa Diolah menjadi Makanan Ringan</h1>
                <img src="assets/images/artikel/artikel1.jpeg" alt=""> </center>
                <br>
                <div align="justify">
                    <p>
                    Sumber Gramedia.com,Healthline KOMPAS.com - Talas termasuk umbi yang banyak dolah menjadi aneka makanan ringan, seperti keripik. Selain diolah menjadi keripik, 
                    talas juga biasanya diolah dengan cara direbus atau dikukus untuk membuat kue tradisional. Mengenal talas lebih jauh, berikut penjelasan seputar talas yang menarik untuk diketahui. 
                    Mulai dari sejarah hingga manfaatnya. Baca juga: Resep Talas Goreng atau Uyen, Gorengan Kriuk Pakai Sambal Cuka Asal usul talas Lihat Foto Ilustrasi talas yang dipanen akarnya. 
                    Talas mentah ini mengandung kalsium oksalat yang menyebabkan rasa gatal di mulut. (PIXABAY/PISAUIKAN) Melansir dari buku “Untung Berlipat Dari Budi Daya Talas Tanaman Multi Manfaat” oleh H. Rahmat Rukmana & H. Herdi Yudirachman terbitan Lily Publisher, daerah asal tanaman talas adalah Asia Tenggara. <br><br>
                    Tanaman talas juga dikenal dan sudah ditanam pada abad pertama di China. Setelah itu, talas menyebar ke daerah-daerah asal Asia Tenggara dan Jepang. Baca juga: Jenis Talas di Indonesia, Bisa buat Keripik sampai Bolu Konon, selama berabad-abad lamanya, talas menjadi bahan makanan pokok di beberapa daerah Asia dan Kepulauan Pasifik. 
                    Secara luas, talas diakui berasal dari daerah rawa dan hutan tropika yang bercurah tinggi. Talas lebih dulu dikonsumsi dan populer sebelum tanaman padi. Diperkirakan, talas sudah dibudiayakan sejak 7000 tahun yang lalu. Dalam sebuah catatan sejarah, talas juga dikenal di Eropa, Afrika, dan Amerika. Di Amerika Tengah misalnya, jenis talas seperti kimpul sudah dibudidayakan sejak tahun 1864. 
                    </p>
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

<?php include 'layouts/vendor-scripts.php'; ?>

<!-- nouisliderribute js -->
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/product-filter-range.init.js"></script>

</body>

</html>