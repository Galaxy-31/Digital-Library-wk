
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('asset/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('asset/assets/img/favicon.png') }}">
    <title>
        ----
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('asset/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('asset/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('asset/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('asset/assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" />
</head>
<body class="">
    <style>
.btn-container {
  position: relative;
  overflow: hidden;
  width: 100%;
  max-width: 250px;
  margin: 0 auto;
  height: 50px;
  background: #007bff;
  border-radius: 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.5s ease;
}

.btn-container .login {
  position: absolute;
  top: 0;
  width: 50%;
  height: 100%;
  color: #fff;
  border-radius: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
  transition: all 0.5s ease;
}
.btn-container .register {
  position: absolute;
  top: 0;
  width: 50%;
  height: 100%;
  color: #fff;
  border-radius: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
  transition: all 0.5s ease;
}

.btn-container .register {
  left: -100%;
}

.btn-container .login {
  left: 100%;
}

.btn-container .register:before {
  content: "";
  position: absolute;
  top: 50%;
  left: -50%;
  width: 100%;
  height: 100%;

  /* background: #007bff; */
  border-radius: 50%;
  transform: translate(-50%, -50%) scale(0);
  opacity: 0;
 transition: all 0.5s ease;
}
.btn-container .login:before {
  content: "";
  position: absolute;
  top: 50%;
  left: -50%;
  width: 100%;
  height: 100%;

  /* background: #007bff; */
  border-radius: 50%;
  transform: translate(-50%, -50%) scale(0);
  opacity: 0;
 transition: all 0.5s ease;
}

.btn-container:hover {
  background: #fff;
}

.btn-container:hover .register{
  color: #007bff;
}

.btn-container:hover .login {
  color: #007bff;
}

.btn-container:hover .register:before,
.btn-container:hover .login:before {
  transform: translate(-50%, -50%) scale(1);
  opacity: 1;
}

.btn-container:hover .register {
  left: 0;
}

.btn-container:hover .login {
  left: 50%;
}
    </style>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
            <a href="{{ asset('asset/assets/img/wikrama.png') }}"></a>
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="#">
            </a>
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0 ">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://assets-a1.kompasiana.com/items/album/2022/06/07/whatsapp-image-2022-06-07-at-12-29-20-629ee60daa3ccd31ef600502.jpeg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Halo Siswa WIKRAMA!</h1>
                        <marquee behavior="" direction="">
                            <p class="text-lead text-white"> Selamat Datang Di Aplikasi Perpustakaan Digital</p>
                            {{-- <p class="text-lead text-white" class="text-center">Digital</p> --}}

                        </marquee>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="height: calc(80vh - 360px)">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            {{-- <h5>Lanjut</h5> --}}
                        </div>
                        {{-- <div class="row px-xl-5 px-sm-4 px-3">
                            <div class="mt-2 position-relative text-center">
                                <a href="{{ route('login') }}" class="btn btn-primary">Silahkan Masuk</a>
                            </div>
                        </div>
                        <div class="row px-xl-5 px-sm-4 px-3">
                            <div class="mt-2 position-relative text-center">
                                <a href="{{ route('register') }}" class="btn btn-primary">Silahkan Buat Akun</a>
                            </div>
                        </div> --}}
                        <div class="btn-container">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h5>Klik Disini</h5>
                            <div >
                                <a  href="{{ route('login') }}" class="btn-login login btn btn-primary" href="{{ route('login') }}">Login</a>
                            </div>
                            <div>
                                <a href="{{ route('register') }}" class=" btn-register register btn btn-primary">Register</a>
                            </div>
                          </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer pb-3">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary mt-3">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>. Created Arya Dev
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="{{ asset('asset/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('asset/assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
