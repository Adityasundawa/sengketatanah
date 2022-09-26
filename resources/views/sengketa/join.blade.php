<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #eee;
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            font-family: 'Poppins', sans-serif;
        }

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown {
            color: #61481C;
            background: #fff;
            border: 1px solid #61481C;
        }

        .btn.btn-outline-brown:hover {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .btn.btn-brown:hover {
            color: #fff;
            background: #533e18;
            border: 1px solid #61481C;
        }

        .text-brown{
            color: #61481C !important;
        }

        .text-light-brown{
            color: #BF9742 !important;
        }

        .card {
            border-radius: 15px;
        }

        .card.card-main {
            background-color: #E6B325; 
        }

        .card.kriteria {
            background-color: #BF9742; 
        }

        .card.card-child {
            position: relative;
            width: 65%;
            bottom: 45px;
            left: 55px;
        }

        .text-child-item {
            font-size: 12px
        }

        .image-collab {
            width: 450px;
        }
        
        @media (max-width: 991.98px) { 
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 50%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }

            .image-collab {
                width: 350px;
            }
        }

        @media (max-width: 767.98px) { 
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                width: 75%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
            }
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4" href="{{url('/')}}">
                <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px"
                    class="img-fluid me-2">SENGKETA TANAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('')}}/bid-sengketa">Bid Sengketa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Podcast Sengketa</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="{{url('/')}}/tentang">Tentang Kami</a>
                    </li>

                    <div class="vr vr-none me-2"></div>
                    <hr class="hr-none">

                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-outline-brown rounded-3 login-mb" href="{{url('/')}}/login">Login</a>
                    </li>
                    <li class="nav-item me-1 ms-1">
                        <a class="nav-link btn btn-brown text-white rounded-3" href="{{url('/')}}/register">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        
        <div class="card border-0 card-main">
            <div class="card-body">
                <div class="row p-5">
                    <div class="col-md-7">
                        <h1 style="font-weight: 700">Pilihan tepat dan terpercaya untuk jual rumah Anda</h1>  
                    </div>
                    <div class="col-md-7 mt-5">
                        <p class="mb-0">Dikelola oleh <span class="text-brown">Pashouses</span> bersama dengan Sinarmas Land yang merupakan pengembang properti terbesar dan berpengalaman lebih dari 40 tahun, dapatkan harga terbaik dan proses cepat jual rumah Anda</p>  
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card border-0 text-white card-child bg-brown">
            <div class="card-body">
                <div class="row align-items-center px-2 text-child-item">
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Rumah terjual lebih cepat
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Proses jual rumah aman dan mudah
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Cara jual rumah lebih baik dari cara konvensional
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang text-end"><button class="btn btn-light text-brown rounded-3">Jual Sekarang</button></div>
                </div>
            </div>
        </div>

        <div class="row pt-5 mb-5">
            <div class="col-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Bekerjasama Dengan:</h3>
                <img class="mt-4 image-collab" src="https://rumalaku.id/wp-content/uploads/2022/06/pngwing.com_.png" alt="">
            </div>
        </div>
        

        <div class="row pt-5 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">3 Langkah Jual Rumah</h3>
            </div>
            <div class="col-md-7 mt-4">
                <div class="row justify-content-center text-center g-2">
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-brown"></i>
                            <i class="fa-solid fa-file-lines fa-stack-1x text-white"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Masukkan data rumah</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-file-signature fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Buat janji survey rumah dengan tim kami</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-handshake fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Proses kesepakatan penjualan</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Kriteria Rumah PAS untuk Rumalaku</h3>
            </div>
            <div class="card kriteria mt-4">
                <div class="card-body p-5">
                    <div class="row">
                        
                        <div class="col-md mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <span class="fa-stack fa-3x">
                                        <i class="fa fa-circle fa-stack-2x text-light"></i>
                                        <i class="fa-solid fa-file-lines fa-stack-1x text-light-brown"></i>
                                    </span>
                                    <div class="mt-3">Rumah Berlokasi di Jabodetabek</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <span class="fa-stack fa-3x">
                                        <i class="fa fa-circle fa-stack-2x text-light"></i>
                                        <i class="fa-solid fa-file-lines fa-stack-1x text-light-brown"></i>
                                    </span>
                                    <div class="mt-3">Rumah Berlokasi di Jabodetabek</div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md mt-2 mb-2">

                            <div class="card bg-white shadow p-4">
                                <div class="card-body text-center">
                                    <span class="fa-stack fa-3x">
                                        <i class="fa fa-circle fa-stack-2x text-light"></i>
                                        <i class="fa-solid fa-file-lines fa-stack-1x text-light-brown"></i>
                                    </span>
                                    <div class="mt-3">Rumah Berlokasi di Jabodetabek</div>
                                </div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-1">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Frequently Asked Questions</h3>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%"></div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold text-brown">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi nyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%"></div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold text-brown">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi nyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%"></div>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold text-brown">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi nyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <div class="d-flex">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                    </div>
                    <div class="flex-grow-1">
                        <h6 class="fw-bold text-brown">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi nyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
</body>

</html>
