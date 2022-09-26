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
            color: #61481C;
        }

        .card {
            border-radius: 10px;
        }

        .card.card-main {
            background-color: #E6B325; 
        }

        .card.card-child {
            position: relative;
            background-color: #BF9742; 
            width: 65%;
            bottom: 45px;
            left: 55px;
        }

        .text-child-item {
            font-size: 12px
        }

        @media (max-width: 991.98px) { 
            .col-lg.jual-sekarang {
                margin-top: 5px;
                margin-bottom: 5px;
                text-align: start !important;
            }

            .card.card-child {
                position: relative;
                background-color: #BF9742; 
                width: 50%;
                bottom: 45px;
                left: 0px;
                margin-left: auto;
                margin-right: auto;
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
                background-color: #BF9742; 
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

    <div class="container mt-5">
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
        <div class="card border-0 text-white card-child" >
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
                    <div class="col-lg jual-sekarang text-end"><button class="btn btn-light rounded-3" style="color: #BF9742">Jual Sekarang</button></div>
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
