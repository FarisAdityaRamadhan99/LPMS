<?php
use Illuminate\Support\Facades\DB;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="icon" type="image/png" href="{{ asset ('images/icons/favicon.ico') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/css-hamburgers/hamburgers.min.cs') }}s">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset ('css/main.css') }}">
    @yield('css')

    <title>{{ $title }} | LPMS</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light shadow px-5 py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/img/bitmap.png" alt="" width="200">
            </a>
            <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><b>PENGADUAN</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><b>TENTANG KAMI</b></a>
                    </li>
                    <?php
                        $d = session()->get('id');
                        $u = DB::table('user')->where(['id' => $d])->get();
                        if($u){
                            foreach($u as $user){
                    ?>
                    <div class="dropdown">
                        <button class="btn btn-outline-success dropdown-toggle" style="border-radius: 100px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $user->username ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('logout') }}">LOGOUT</a>
                        </div>
                    </div>
                    <?php
                            }
                        }else{
                    ?>
                    <li class="nav-item ps-3">
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-outline-success" style="border-radius: 100px;">LOGIN</button>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="py-4">
        @yield('content')
    </div>
    
    <footer class="text-center text-white" style="background-color: #58b431ff">

<div class="container">
    <section class="mt-5">
        <div class="row text-center d-flex justify-content-center pt-5">

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                    <a href="#!" class="text-white">TENTANG KAMI</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">KETENTUAN LAYANAN</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">KEBIJAKAN PRIVASI</a>
                </h6>
            </div>

            <div class="col-md-3">
                <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-white">HUBUNGI KAMI</a>
                </h6>
            </div>
        </div>
    </section>

    <hr class="my-5" />

    <section class="mb-5">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
            <p>
                Dinas Komunikasi dan Informatika Kabupaten Sumenep
            </p>
            </div>
        </div>
    </section>

    <section class="text-center mb-5">
        <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
        </a>
    </section>
</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" >
    © 2020 Copyright:
    <a class="text-white" href="" ></a >
</div>

</footer>



    @yield('js')
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset ('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset ('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset ('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset ('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset ('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset ('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset ('js/main.js') }}"></script>
</body>
</html>