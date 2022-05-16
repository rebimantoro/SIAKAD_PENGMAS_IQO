<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">
    
    <!-- Dashboard Nav -->
    <li class="nav-item">
        @yield('dashboard')
        <a 
        @if (isset($dashboard))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif 
        href="{{ Route('dashboard') }}">
            <i class="bi bi-grid-fill"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <!-- End Dashboard Nav -->

    <!-- ROLE -->
    @if (Auth::user()->role == "1")
    <!-- SDM Nav -->
    <li class="nav-item">
        @yield('sdm')
        <a @if (isset($sdm))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif  data-bs-target="#sdm-nav" data-bs-toggle="collapse">
            <i class="ri ri-admin-fill"></i><span>SDM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sdm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-pegawai') }}" class="@yield('data-pegawai')">
                    <i class="bi bi-circle"></i><span>Data Pegawai</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-pegawai') }}" class="@yield('tambah-pegawai')">
                    <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End SDM Nav -->
    <!-- Kelas Nav -->
    <li class="nav-item">
        @yield('kelas')
        <a @if (isset($kelas))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#kelas-nav" data-bs-toggle="collapse">
            <i class="ri ri-book-open-fill"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-kelas') }}" class="@yield('data-kelas')">
                    <i class="bi bi-circle"></i><span>Data Kelas</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-kelas') }}" class="@yield('tambah-kelas')">
                    <i class="bi bi-circle"></i><span>Tambah Kelas</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Kelas Nav -->
    <!-- Mapel Nav -->
    <li class="nav-item">
        @yield('mapel')
        <a @if (isset($mapel))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#mapel-nav" data-bs-toggle="collapse" href="#">
            <i class="bx bxs-book-reader"></i><span>Mata Pelajaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mapel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-mapel') }}" class="@yield('data-mapel')">
                    <i class="bi bi-circle"></i><span>Data Mapel</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-mapel') }}" class="@yield('tambah-mapel')">
                    <i class="bi bi-circle"></i><span>Tambah Mapel</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('plotting-mapel') }}" class="@yield('plotting-mapel')">
                    <i class="bi bi-circle"></i><span>Plotting Mapel</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Mapel Nav -->
    <!-- Siswa Nav -->
    <li class="nav-item">
        @yield('siswa')
        <a @if (isset($siswa))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-siswa') }}" class="@yield('data-siswa')">
                    <i class="bi bi-circle"></i><span>Data Siswa</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-siswa') }}" class="@yield('tambah-siswa')">
                    <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Siswa Nav -->
    <!-- Penilaian Siswa Nav -->
    <li class="nav-item">
        @yield('penilaian')
        <a @if (isset($penilaian))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif href="{{ Route('penilaian') }}">
            <i class="bi bi-file-earmark-fill"></i>
            <span>Penilaian</span>
        </a>
    </li>
    <!-- End Penilaian Siswa Nav -->

    <!-- Raport Nav -->
    <li class="nav-item">
        @yield('raport')
        <a @if (isset($raport))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#raport-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-book-2-fill"></i><span>Raport</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="raport-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-raport') }}" class="@yield('data-raport')">
                    <i class="bi bi-circle"></i><span>Data Raport</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('verifikasi-raport') }}" class="@yield('verifikasi-raport')">
                    <i class="bi bi-circle"></i><span>Verifikasi Raport</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Raport Nav -->

    @elseif (Auth::user()->role == "2")
    <!-- SDM Nav -->
    <li class="nav-item">
        @yield('sdm')
        <a @if (isset($sdm))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif  data-bs-target="#sdm-nav" data-bs-toggle="collapse">
            <i class="ri ri-admin-fill"></i><span>SDM</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="sdm-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-pegawai') }}" class="@yield('data-pegawai')">
                    <i class="bi bi-circle"></i><span>Data Pegawai</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-pegawai') }}" class="@yield('tambah-pegawai')">
                    <i class="bi bi-circle"></i><span>Tambah Pegawai</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End SDM Nav -->

    @elseif (Auth::user()->role == "3")
    <!-- Kelas Nav -->
    <li class="nav-item">
        @yield('kelas')
        <a @if (isset($kelas))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#kelas-nav" data-bs-toggle="collapse">
            <i class="ri ri-book-open-fill"></i><span>Kelas</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kelas-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-kelas') }}" class="@yield('data-kelas')">
                    <i class="bi bi-circle"></i><span>Data Kelas</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-kelas') }}" class="@yield('tambah-kelas')">
                    <i class="bi bi-circle"></i><span>Tambah Kelas</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Kelas Nav -->
    <!-- Mapel Nav -->
    <li class="nav-item">
        @yield('mapel')
        <a @if (isset($mapel))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#mapel-nav" data-bs-toggle="collapse" href="#">
            <i class="bx bxs-book-reader"></i><span>Mata Pelajaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="mapel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-mapel') }}" class="@yield('data-mapel')">
                    <i class="bi bi-circle"></i><span>Data Mapel</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-mapel') }}" class="@yield('tambah-mapel')">
                    <i class="bi bi-circle"></i><span>Tambah Mapel</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('plotting-mapel') }}" class="@yield('plotting-mapel')">
                    <i class="bi bi-circle"></i><span>Plotting Mapel</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Mapel Nav -->

    @elseif (Auth::user()->role == "4")
    <!-- Siswa Nav -->
    <li class="nav-item">
        @yield('siswa')
        <a @if (isset($siswa))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#siswa-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-people-fill"></i><span>Siswa</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="siswa-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-siswa') }}" class="@yield('data-siswa')">
                    <i class="bi bi-circle"></i><span>Data Siswa</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('tambah-siswa') }}" class="@yield('tambah-siswa')">
                    <i class="bi bi-circle"></i><span>Tambah Siswa</span>
                </a>
            </li>
        </ul>
    </li>
    <!-- End Siswa Nav -->
    
    @elseif (Auth::user()->role == "5")
    <!-- Penilaian Siswa Nav -->
    <li class="nav-item">
        @yield('penilaian')
        <a @if (isset($penilaian))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif href="{{ Route('penilaian') }}">
            <i class="bi bi-file-earmark-fill"></i>
            <span>Penilaian</span>
        </a>
    </li>
    <!-- End Penilaian Siswa Nav -->

    <!-- Raport Nav -->
    <li class="nav-item">
        @yield('raport')
        <a @if (isset($raport))
        class="nav-link"
        @else 
        class="nav-link collapsed"
        @endif data-bs-target="#raport-nav" data-bs-toggle="collapse" href="#">
            <i class="ri ri-book-2-fill"></i><span>Raport</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="raport-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ Route('data-raport') }}" class="@yield('data-raport')">
                    <i class="bi bi-circle"></i><span>Data Raport</span>
                </a>
            </li>
            <li>
                <a href="{{ Route('verifikasi-raport') }}" class="@yield('verifikasi-raport')">
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