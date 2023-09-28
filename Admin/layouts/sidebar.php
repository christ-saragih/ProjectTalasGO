        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu"><?php echo $language['Menu'] ?> </li>

                        <li>
                            <a href="index.php">
                                <i data-feather="home"></i>
                                <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                                <span data-key="t-dashboard"><?php echo $language['Beranda'] ?> </span>
                            </a>
                        </li>

                        <li>
                            <a href="pengguna.php">
                                <i data-feather="users"></i>
                                <span data-key="t-contacts"><?php echo $language['Pengguna'] ?> </span>
                            </a>
                        </li>

                        <li>
                            <a href="artikel.php">
                                <i data-feather="book"></i>
                                <span data-key="t-contacts"><?php echo $language['Artikel'] ?> </span>
                            </a>
                        </li>

                        <li>
                            <a href="data-toko.php">
                                <i data-feather="map-pin"></i>
                                <span data-key="t-contacts"><?php echo $language['Lokasi'] ?> </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="shopping-cart"></i>
                                <span data-key="t-ecommerce"><?php echo $language['Pemesanan'] ?> </span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="pemesanan.php" key="t-products">Data Pemesanan </a></li>
                                <li><a href="pengiriman.php" data-key="t-product-detail">Data Pengiriman</a></li>
                                <li><a href="tambah-dataproduk.php" key="t-products">Tambah Data Produk</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>