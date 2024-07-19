<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-heading">Dagangan</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#produk" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Produk</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="produk" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('kategori.index') }}">
                        <i class="bi bi-circle"></i><span>Kategori</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('produk.index') }}">
                        <i class="bi bi-circle"></i><span>Produk</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#transaksi" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Transaksi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="transaksi" class="nav-content collapse " data-bs-parent="#sidebar-nav">

                <li>
                    <a href="{{ route('transaksi.index') }}">
                        <i class="bi bi-circle"></i><span>Penjualan</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('kontak.index') }}">
                <i class="bi bi-envelope"></i>
                <span>Kontak</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
