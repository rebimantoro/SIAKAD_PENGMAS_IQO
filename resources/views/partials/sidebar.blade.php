<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <!-- Dashboard Nav -->
    <li class="nav-item">
        <a class="nav-link " href="/dashboard">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- End Dashboard Nav -->

    <!-- ROLE -->
    @if (Auth::user()->role == "1")
    <!-- SDM Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sdm-nav" data-bs-toggle="collapse">
            <i class="ri ri-admin-fill"></i><span>SDM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sdm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/SDM/data-pegawai" class="active">
                    <i class="bi bi-circle"></i><span>Data Pegawai</span>
                </a>
            </li>
            <li>
                <a href="/SDM/tambah-pegawai">
                    <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End SDM Nav -->
    <!-- Kelas Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kelas-nav" data-bs-toggle="collapse">
            <i class="ri ri-book-open-fill"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/kelas/data-kelas">
                    <i class="bi bi-circle"></i><span>Data Kelas</span>
                </a>
            </li>
            <li>
                <a href="kelas/tambah-kelas">
                    <i class="bi bi-circle"></i><span>Tambah Kelas</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Kelas Nav -->
    <!-- Mapel Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mapel-nav" data-bs-toggle="collapse" href="#">
            <i class="bx bxs-book-reader"></i><span>Mata Pelajaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mapel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/mapel/data-mapel">
                    <i class="bi bi-circle"></i><span>Data Mapel</span>
                </a>
            </li>
            <li>
                <a href="/mapel/tambah-mapel">
                    <i class="bi bi-circle"></i><span>Tambah Mapel</span>
                </a>
            </li>
            <li>
                <a href="/mapel/plotting-mapel">
                    <i class="bi bi-circle"></i><span>Plotting Mapel</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Mapel Nav -->
    <!-- Siswa Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/siswa/data-siswa">
                    <i class="bi bi-circle"></i><span>Data Siswa</span>
                </a>
            </li>
            <li>
                <a href="/siswa/tambah-siswa">
                    <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Siswa Nav -->
    <!-- Penilaian Siswa Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/penilaian">
            <i class="bi bi-file-earmark-fill"></i>
            <span>Penilaian</span>
        </a>
    </li>
    <!-- End Penilaian Siswa Nav -->

    <!-- Raport Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#raport-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-book-2-fill"></i><span>Raport</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="raport-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/raport/data-raport">
                    <i class="bi bi-circle"></i><span>Data Raport</span>
                </a>
            </li>
            <li>
                <a href="/raport/verifikasi-raport">
                    <i class="bi bi-circle"></i><span>Verifikasi Raport</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Raport Nav -->

    @elseif (Auth::user()->role == "2")
    <!-- SDM Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#sdm-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-admin-fill"></i><span>SDM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sdm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/SDM/data-pegawai">
                    <i class="bi bi-circle"></i><span>Data Pegawai</span>
                </a>
            </li>
            <li>
                <a href="/SDM/tambah-pegawai">
                    <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End SDM Nav -->

    @elseif (Auth::user()->role == "3")
    <!-- Kelas Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kelas-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-book-open-fill"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/kelas/data-kelas">
                    <i class="bi bi-circle"></i><span>Data Kelas</span>
                </a>
            </li>
            <li>
                <a href="/kelas/tambah-kelas">
                    <i class="bi bi-circle"></i><span>Tambah Kelas</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- Mapel Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#mapel-nav" data-bs-toggle="collapse" href="#">
            <i class="bx bxs-book-reader"></i><span>Mata Pelajaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mapel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/mapel/data-mapel">
                    <i class="bi bi-circle"></i><span>Data Mapel</span>
                </a>
            </li>
            <li>
                <a href="/mapel/tambah-mapel">
                    <i class="bi bi-circle"></i><span>Tambah Mapel</span>
                </a>
            </li>
            <li>
                <a href="/mapel/plotting-mapel">
                    <i class="bi bi-circle"></i><span>Plotting Mapel</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Mapel Nav -->

    @elseif (Auth::user()->role == "4")
    <!-- Siswa Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/siswa/data-siswa">
                    <i class="bi bi-circle"></i><span>Data Siswa</span>
                </a>
            </li>
            <li>
                <a href="/siswa/tambah-siswa">
                    <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Siswa Nav -->
    
    @elseif (Auth::user()->role == "5")
    <!-- Penilaian Siswa Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="/penilaian">
            <i class="bi bi-file-earmark-fill"></i>
            <span>Penilaian</span>
        </a>
    </li>
    <!-- End Penilaian Siswa Nav -->

    <!-- Raport Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#raport-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-book-2-fill"></i><span>Raport</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="raport-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="/raport/data-raport">
                    <i class="bi bi-circle"></i><span>Data Raport</span>
                </a>
            </li>
            <li>
                <a href="/raport/verifikasi-raport">
                    <i class="bi bi-circle"></i><span>Verifikasi Raport</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Raport Nav -->
    @endif
</ul>
</aside>
<!-- End Sidebar-->