<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" >



    <title>Welcome | LPMS</title>
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
                    <li class="nav-item ps-3">
                        <a href="{{ route('login') }}">
                            <button type="button" class="btn btn-outline-success" style="border-radius: 100px;">LOGIN</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 py-5">
                    <br>
                    <h3>Apa itu 
                        <span style="color: #58b431ff">LPMS </span>?
                    </h3>
                    <p>
                        " LPMS merupakan singkatan dari 
                        <span style="color: #58b431ff;"> Layanan Pengaduan Masyarakat Sumenep </span>
                        dengan fungsi sebagai wadah bagi Masyarakat guna melaporkan adanya indikasi
                        penyimpangan, korupsi, kolusi dan nepotisme yang dilakukan aparat pemerintah daerah
                        dalam penyelenggaraan pemerintahan. 
                    </p>
                    <p>
                        Dengan adanya LPMS ini juga membantu pemerintah daerah melalui jajaran
                        <span style="color: #0c9dd6ff;">DISKOMINFO Sumenep</span> dalam melaksanakan 
                        <span style="color: #58b431ff"> 
                        Peraturan Bupati Sumenep Nomor 09 Tahun 2010
                        </span> tentang 
                        <span style="color: #58b431ff">Pengelolaan Pengaduan Pelayanan Publik Di Lingkungan 
                        Pemerintah Kabupaten Sumenep.
                        </span>
                    </p>
                </div>
                <div class="col-md-5 py-1">
                    <img src="/img/service.jpg" width="400px" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        
        <div class="py-4" style="background: #58b431ff;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <h5 class="text-center py-4 mb-2">ADUAN CEPAT</h5>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-10">
                                        <div class="form-floating form-floating-sm mb-3">
                                            <input type="judulPengaduan" class="form-control form-control-sm" id="floatingInput" placeholder="judulPengaduan">
                                            <label for="floatingInput">Judul Pengaduan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Keluhan Anda" rows="4"></textarea>
                                    </div>
                                    <div class="col-md-10 mb-3">
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                            <option selected>Wilayah Kecamatan</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="content">
            <div class="shadow-sm">
                <div class="row mb-5">
                <div class="col-12 text-center">
                    <h3 class="my-3">Bagaimana Caranya?</h3>
                    <p>Berikut ini adalah langkah-langkah membuat sebuah pengaduan di LPMS</p>
                </div>
                </div>
            </div>

            <div class="site-section bg-left-half mb-5">
                <div class="container owl-2-style">      
                    <div class="owl-carousel owl-2">
                        <div class="media-29101">
                            <img src="img/tlsText.png" alt="Image" class="img-fluid">
                            <h3><a href="#">1.  TULIS ADUAN</a></h3>
                            <p>Laporkan apa yang menjadi keluhan atau aspirasi anda dengan jelas dan lengkap melalui website resmi</p>
                        </div>
                        <div class="media-29101">
                            <img src="img/search.png" alt="Image" class="img-fluid">
                            <h3><a href="#">2.  PROSES VERIFIKASI</a></h3>
                            <p>Setiap laporan atau aspirasi yang masuk akan memasuki tahap verifikasi lebih lanjut yang kemudian diteruskan ke instansi berwenang.</p>
                        </div>
                        <div class="media-29101">
                            <img src="img/gerigi.png" alt="Image" class="img-fluid">
                            <h3><a href="#">3.  PROSES TINDAK LANJUT</a></h3>
                            <p>Dalam kurun waktu yang secepat-cepatnya instansi akan segera menindak lanjuti laporan yang anda adukan.</p>
                        </div>
                        <div class="media-29101">
                            <img src="img/chat.png" alt="Image" class="img-fluid">
                            <h3><a href="#">4.  BERI TANGGAPAN</a></h3>
                            <p>Anda dapat memberi tanggapan kembali atas balasan dari instansi terkait aduan anda.</p>
                        </div>
                        <div class="media-29101">
                            <img src="img/verifyy.png" alt="Image" class="img-fluid">
                            <h3><a href="#">5.  SELESAI</a></h3>
                            <p>Jika tindak lanjut sudah selesai maka instansi yang berwenang akan menutup aduan anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <p>Dinas Komunikasi dan Informatika Kabupaten Sumenep</p>
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





    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>