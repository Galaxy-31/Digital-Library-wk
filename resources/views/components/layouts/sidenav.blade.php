<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html "
            target="_blank">
            <img src="{{ asset('asset/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Name App</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main" style="height: calc(100vh)">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="{{ url('/home') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Nama CRUD</span>
                </a>
            </li>
        @role('Admin')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Data</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('bukus') ? 'active' : '' }}" href="{{ url('bukus') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Buku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('anggotas') ? 'active' : '' }}" href="{{ url('anggotas') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Nama Anggota</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('penerbits') ? 'active' : '' }}" href="{{ url('penerbits') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bag-17 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Penerbit</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('categoris') ? 'active' : '' }}" href="{{ url('categoris') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bag-17 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Categori</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">User</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ url('users') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-circle-08 text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">CRUD</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ url('') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-shop text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nama CRUD</span>
            </a>
            </li>

        @endrole
        @role('Petugas')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">CRUD</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ url('') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-shop text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nama CRUD</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ url('') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-shop text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nama CRUD</span>
            </a>
            </li>
        @endrole
        @role('User')
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">CRUD</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ url('') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-shop text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nama CRUD</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('') ? 'active' : '' }}" href="{{ url('') }}">
                    <div
                    class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-shop text-danger text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Nama CRUD</span>
            </a>
            </li>
        @endrole
        </ul>
    </div>
</aside>
