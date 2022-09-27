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
            width: 90%;
            bottom: 45px;
            margin-left: auto;
            margin-right: auto;
        }

        .text-child-item {
            font-size: 12px
        }

        .image-collab {
            width: 230px;
        }
        
        @media (max-width: 1199.98px) { 
            .card.card-child {
                width: 95%;
            }
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
                width: 200px;
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

            .card-main .card-body .p-5{
                padding: 0 !important;
                padding-bottom: 3rem !important
            }

            .card-main .card-body .p-5 .col-md-7.mt-5{
                margin-top: 1.5rem !important;
            }
        }

        @media (max-width: 320.98px) {
            .image-collab {
                width: 180px;
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
                <div class="row p-5 g-0">
                    <div class="col-md-12 text-center mb-3">
                        <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" style="width: 100px" alt="">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1 style="font-weight: 700">"Solusi Tepat dan Terpercaya Untuk Membantu Masalah Pertanahan Anda"</h1>  
                    </div>
                    <div class="col-md-12 mt-4">
                        <p class="mb-0">Kami mempertemukan korban sengketa tanah atau korban mafia tanah dengan Sponsor, Kantor Hukum, dan Pemerintah untuk menuntaskan masalah persengketaan tanah yang anda alami.</p>  
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card border-0 text-white card-child bg-brown">
            <div class="card-body">
                <div class="row align-items-center px-2 text-child-item">
                    <div class="col-lg-12">
                        <h5>Apa Yang Anda Dapatkan di Sengketatanah.id</h5>
                    </div>
                    <div class="col-lg jual-sekarang mt-1">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pendanaan dari sponsor
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan pengacara dan kantor hukum
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan advokasi pada pemerintah
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan konsultasi dan mediasi
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan negoisasi dan penyelesaian
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <i class="fa-regular fa-circle-check"></i>
                            </div>
                            <div class="flex-grow-1 ms-3">
                                Bantuan wawancara Podcast
                            </div>
                        </div>
                    </div>
                    <div class="col-lg jual-sekarang text-end"><button class="btn btn-light text-brown rounded-3 fw-bold w-100">Daftar</button></div>
                </div>
            </div>
        </div>

        <div class="row pt-5 mb-5">
            <div class="col-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">Bekerjasama Dengan:</h3>
                <img class="mt-4 image-collab" src="https://upload.wikimedia.org/wikipedia/commons/5/51/Logo_BPN-KemenATR_%282017%29.png" alt="">
            </div>
        </div>
        

        <div class="row pt-4 mb-5 justify-content-center">
            <div class="col-md-12 text-center">
                <h3 class="text-brown" style="font-weight: 700">3 Langkah Dapat Bantuan</h3>
            </div>
            <div class="col-md-7 mt-4">
                <div class="row justify-content-center text-center g-2">
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-brown"></i>
                            <i class="fa-solid fa-file-lines fa-stack-1x text-white"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Masukkan data tanah Anda</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-file-signature fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Tentukan kebutuhan, jaminan, dan pengembalian</div>
                    </div>
                    <div class="col">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-circle fa-stack-2x text-white"></i>
                            <i class="fa-solid fa-handshake fa-stack-1x text-brown"></i>
                        </span>
                        <div class="mt-3" style="font-size: 14px">Dapatkan sponsor</div>
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
                        
                        <div class="col-lg-4 mt-2 mb-2">

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

                        <div class="col-lg-4 mt-2 mb-2">

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

                        <div class="col-lg-4 mt-2 mb-2">

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
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Apakah penjual perlu mengembalikan dana renovasi?</h6>
                        <p style="font-size: 14px">Penjual akan mengembalikan dana renovasi setelah rumah berhasil terjual melalui perantara lain atau pribadi (bukan melalui Rumalaku). Jika terjual melalui Rumalaku, dana renovasi akan dipotong dari harga jual.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-4">
                <div class="d-flex" style="height: 50%">
                    <div class="flex-shrink-0 text-center mx-4">
                        <h1 class="mb-0"><i class="fa-solid fa-circle-question text-brown"></i></h1>
                        <div class="vr" style="border-color: #61481C; opacity: 1; height: 100%; width: 2px;"></div>
                    </div>
                    <div class="flex-grow-1 mt-1">
                        <h6 class="fw-bold text-brown" style="z-index: 100000">Renovasi seperti apa yang dilakukan oleh Rumalaku?</h6>
                        <p style="font-size: 14px">Renovasi yang dilakukan merupakan renovasi minor seperti pengecatan kembali hingga renovasi kecil lainnya menyesuaikan dengan kebutuhan rumah yang dijual.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kenapa Sengketatanah.id -->
        <div class="ps-4 mt-5" style="margin-bottom:-20px">
            <h5>
                Kenapa <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a> ?
            </h5>
        </div>
        <div class="row justify-content-between p-4" id="row-why" style="margin-bottom:30px;">
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.8000016629696,76.80000228881838)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="453.185" cy="371.168" r="10" fill="#ffffff" data-original="#000000"
                                        class=""></circle>
                                    <path
                                        d="m511.701 288.728c-.65-2.59-2.34-4.84-4.64-6.189l-77.268-45.564c-.629-1.691-1.389-3.347-2.292-4.951-2.154-3.828-4.982-7.131-8.298-9.842-.924-3.345-4.99-11.879-5.889-13.299 1.59-8.019.292-16.25-3.768-23.462-4.027-7.154-10.339-12.557-17.982-15.461 4.05-9.376 3.982-20.328-1.145-29.827-4.522-8.378-12.104-14.421-21.35-17.017-2.871-.806-5.788-1.244-8.698-1.322.672-6.927-.783-13.884-4.275-20.087-4.555-8.091-12.03-13.94-21.049-16.472-8.959-2.515-18.383-1.455-26.549 2.984-.998.53-18.363 9.755-42.912 22.952-19.735-11.604-51.53-30.263-51.53-30.263-5.438-3.21-11.642-4.908-17.941-4.908-12.199 0-23.69 6.406-29.99 16.722-4.825 7.909-6.251 17.202-4.015 26.167.023.092.051.18.075.272-8.985 2.157-16.943 7.779-21.801 15.743-4.828 7.907-6.256 17.2-4.021 26.166.022.09.05.177.073.266-8.983 2.158-16.941 7.778-21.806 15.742-4.312 7.061-5.901 15.228-4.599 23.282-1.608 1.572-3.108 3.174-4.492 4.797-6.837 2.795-12.75 7.69-16.662 14.095-3.499 5.731-5.202 12.192-5.027 18.729l-78.611 42.756c-2.357 1.276-4.104 3.445-4.847 6.021-.743 2.575-.421 5.342.894 7.678l76.814 136.467c1.835 3.26 5.227 5.097 8.723 5.097 1.631 0 3.286-.4 4.814-1.242l53.281-29.336c2.339-1.288 4.066-3.457 4.796-6.025s.402-5.322-.91-7.647l-10-17.726 25.171-13.904c14.723 7.383 30.526 11.083 46.561 11.083 17.355 0 34.975-4.332 51.761-12.969 13.128 5.181 26.594 7.77 39.936 7.77 14.842 0 29.526-3.207 43.397-9.582l24.641 14.747-10.622 17.37c-1.38 2.27-1.81 5.04-1.17 7.62.63 2.569 2.3 4.83 4.58 6.189l52.21 31.15c1.55.92 3.32 1.41 5.12 1.41 3.51 0 6.71-1.79 8.54-4.79l9.35-15.33c2.87-4.71 1.38-10.88-3.33-13.75-1.57-.96-3.36-1.46-5.2-1.46-3.52 0-6.71 1.79-8.54 4.79l-4.2 6.88-35.02-20.9 71.11-116.299 35.07 20.58-20.08 32.91c-2.88 4.71-1.38 10.87 3.32 13.75 1.57.96 3.37 1.46 5.2 1.46 3.52 0 6.72-1.79 8.55-4.79v-.01l25.38-41.58c1.392-2.28 1.812-5.061 1.162-7.641zm-121.064 2.615s23.041-12.007 23.097-12.038c7.69-4.198 13.393-10.916 16.238-19.052l5.865 3.433-55.159 90.401-20.765-12.428c-.001 0 30.583-50.025 30.724-50.316zm-207.442-188.202c2.732-4.471 7.561-7.141 12.92-7.141 2.723 0 5.409.736 7.764 2.128l19.043 11.263c3.433 2.03 5.845 5.241 6.792 9.041.929 3.728.332 7.598-1.682 10.895v.001c-1.094 1.791-2.544 3.264-4.205 4.404-.918.499-1.827.993-2.739 1.488-4.138 1.734-9.02 1.685-13.201-.559l-19.581-11.573c-.001 0-.002-.001-.003-.002-3.43-2.031-5.841-5.24-6.788-9.037-.931-3.732-.333-7.607 1.68-10.908zm-25.739 42.18c2.73-4.476 7.555-7.147 12.905-7.147 2.724 0 5.409.736 7.764 2.129l33.33 19.703c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903v.001c-4.1 6.717-13.105 9.095-20.125 5.343l-33.889-20.036c-3.428-2.027-5.837-5.234-6.784-9.029-.929-3.731-.331-7.604 1.688-10.911zm-25.756 42.179c2.695-4.412 7.646-7.153 12.919-7.153 2.716 0 5.398.736 7.752 2.128l34.286 20.272c3.432 2.029 5.844 5.241 6.792 9.044.93 3.731.333 7.604-1.681 10.903-4.265 6.981-13.537 9.229-20.673 5.012l-34.284-20.271c-3.433-2.03-5.845-5.241-6.792-9.041-.93-3.728-.332-7.598 1.681-10.894zm13.972 48.411c3.433 2.029 5.844 5.242 6.792 9.044.93 3.732.333 7.604-1.681 10.902v.001c-4.267 6.987-13.547 9.241-20.683 5.023l-19.043-11.263c-3.432-2.029-5.844-5.241-6.792-9.044-.93-3.731-.333-7.603 1.681-10.901 2.695-4.412 7.646-7.153 12.919-7.153 2.723 0 5.408.736 7.764 2.129zm-55.002 176.549-66.969-118.975 35.779-19.372 66.941 118.662zm38.308-55.857-52.004-92.184 13.35-7.206c2.767 3.846 6.329 7.123 10.553 9.621l7.94 4.696 41.397 73.343zm42.214-15.252-32.953-58.381c11.727-.143 23.134-6.078 29.613-16.69v.001c3.188-5.221 4.883-11.049 5.029-16.987 1.969.335 3.951.519 5.927.519 11.872 0 23.473-5.958 30.029-16.696 4.826-7.903 6.253-17.195 4.018-26.162-.081-.323-.175-.641-.265-.961 8.492-2.212 16.14-7.583 21.045-15.619 4.826-7.903 6.253-17.195 4.018-26.162-1.095-4.396-3.01-8.449-5.61-12.007.894-.488 85.678-46.238 85.877-46.344.034-.018.068-.036.102-.055 3.571-1.949 7.697-2.416 11.62-1.314 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.371 2.356 7.272 1.291 10.986-1.092 3.809-3.644 6.975-7.187 8.917l-.025.014c-.003.001-.005.003-.008.005l-55.702 30.4c-4.848 2.646-6.633 8.72-3.987 13.568 1.816 3.326 5.246 5.211 8.787 5.211 1.619 0 3.261-.395 4.782-1.225l65.425-35.708c3.571-1.948 7.699-2.415 11.62-1.314 3.98 1.117 7.231 3.695 9.155 7.26 3.766 6.977.829 15.929-6.525 19.943l-64.951 35.448c-4.847 2.647-6.631 8.723-3.984 13.569 1.816 3.326 5.246 5.21 8.786 5.21 1.619 0 3.262-.395 4.784-1.225l60.627-33.103c3.55-1.91 7.642-2.363 11.538-1.27 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.291 10.985-1.095 3.818-3.656 6.99-7.159 8.902l-61.21 31.448c-4.918 2.513-6.868 8.537-4.354 13.455 1.769 3.461 5.275 5.451 8.913 5.451 1.531 0 3.085-.353 4.542-1.098l55.475-28.355c3.526-1.863 7.577-2.297 11.432-1.214 3.883 1.09 7.088 3.585 9.025 7.026 1.897 3.37 2.356 7.271 1.292 10.985-1.087 3.791-3.62 6.945-7.137 8.891l-148.579 77.422c-.057.029-.114.06-.17.091-28.16 15.374-57.984 16.098-84.287 2.131zm116.899 3.428 68.213-35.545-17.239 28.178c-16.063 7.808-33.577 10.276-50.974 7.367z"
                                        fill="#ffffff" data-original="#000000" class=""></path>
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Persengketaan Tanah
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami mempertemukan korban sengketa tanah yang membutuhkan bantuan pendanaan sponsor,
                            pengacara atau pemerintah.
                        </p>
                        <a href="{{url('')}}/bidding-sponsor" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62px" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79999542236328,76.7997756958008)">
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M404.267,315.41c-10.048-20.949-45.995-50.027-80.725-78.123c-19.371-15.659-37.675-30.464-49.344-42.133    c-2.923-2.944-7.296-3.883-11.157-2.496c-7.189,2.603-11.627,4.608-15.125,6.165c-5.333,2.389-7.125,3.2-14.315,3.925    c-3.179,0.32-6.037,2.027-7.808,4.672c-15.083,22.549-30.699,20.629-41.131,17.131c-3.328-1.109-3.925-2.539-4.245-3.904    c-2.24-9.365,9.003-31.168,23.573-45.739c34.667-34.688,52.544-43.371,90.304-26.496c42.837,19.157,85.76,34.155,86.187,34.304    c5.611,1.941,11.648-1.003,13.589-6.571c1.92-5.568-1.003-11.648-6.571-13.589c-0.427-0.149-42.496-14.848-84.48-33.643    c-48.917-21.867-75.755-7.467-114.091,30.891c-14.592,14.592-34.411,44.117-29.291,65.771c2.197,9.216,8.683,16.043,18.325,19.221    c24.171,7.979,46.229,0.341,62.656-21.461c6.784-1.045,10.475-2.581,16.021-5.077c2.005-0.896,4.352-1.941,7.467-3.2    c12.203,11.456,28.672,24.789,46.016,38.805c31.36,25.365,66.923,54.123,74.923,70.763c3.947,8.213-0.299,13.568-3.179,16.021    c-4.224,3.627-10.005,4.779-13.141,2.581c-3.456-2.368-7.957-2.517-11.52-0.384c-3.584,2.133-5.589,6.165-5.141,10.304    c0.725,6.784-5.483,10.667-8.171,12.011c-6.827,3.456-13.952,2.859-16.619,0.384c-2.987-2.773-7.275-3.584-11.072-2.176    c-3.797,1.429-6.443,4.928-6.827,8.981c-0.64,6.997-5.824,13.717-12.587,16.341c-3.264,1.237-8,1.984-12.245-1.899    c-2.645-2.389-6.315-3.307-9.749-2.475c-3.477,0.853-6.272,3.371-7.488,6.72c-0.405,1.067-1.323,3.627-11.307,3.627    c-7.104,0-19.883-4.8-26.133-8.939c-7.488-4.928-54.443-39.957-94.997-73.92c-5.696-4.8-15.552-15.083-24.256-24.171    c-7.723-8.064-14.784-15.381-18.411-18.453c-4.544-3.84-11.264-3.264-15.04,1.259c-3.797,4.501-3.243,11.243,1.259,15.04    c3.307,2.795,9.707,9.557,16.768,16.917c9.515,9.941,19.349,20.224,25.963,25.771c39.723,33.259,87.467,69.163,96.981,75.413    c7.851,5.163,24.768,12.416,37.867,12.416c10.517,0,18.603-2.411,24.213-7.125c7.509,2.923,16.043,2.944,24.256-0.256    c9.707-3.755,17.685-11.328,22.208-20.501c8.405,1.792,18.027,0.533,26.773-3.861c8.555-4.309,14.741-10.901,17.813-18.603    c8.491,0.448,17.237-2.56,24.469-8.768C407.979,346.407,411.349,330.109,404.267,315.41z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M213.333,138.663h-96c-5.888,0-10.667,4.779-10.667,10.667s4.779,10.667,10.667,10.667h96    c5.888,0,10.667-4.779,10.667-10.667S219.221,138.663,213.333,138.663z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M435.52,292.711c-3.307-4.885-9.92-6.229-14.805-2.901l-31.189,20.949c-4.885,3.285-6.187,9.92-2.901,14.805    c2.069,3.051,5.44,4.715,8.875,4.715c2.027,0,4.096-0.576,5.931-1.813l31.189-20.949    C437.504,304.231,438.805,297.597,435.52,292.711z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M369.301,343.613c-7.637-6.016-41.792-40.981-62.912-62.997c-4.075-4.267-10.837-4.416-15.083-0.32    c-4.267,4.075-4.395,10.837-0.32,15.083c5.483,5.717,53.845,56.128,65.088,65.003c1.941,1.536,4.288,2.283,6.592,2.283    c3.136,0,6.272-1.408,8.405-4.075C374.72,353.981,373.931,347.261,369.301,343.613z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M326.677,365.01c-12.779-10.219-44.885-44.331-52.139-52.224c-4.011-4.352-10.731-4.608-15.083-0.64    c-4.331,3.989-4.629,10.752-0.64,15.083c0.384,0.405,38.699,41.771,54.528,54.443c1.963,1.557,4.331,2.325,6.656,2.325    c3.115,0,6.229-1.387,8.341-3.989C332.011,375.399,331.264,368.679,326.677,365.01z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M284.224,386.493c-15.211-12.821-46.336-45.952-52.416-52.459c-4.032-4.309-10.795-4.544-15.083-0.512    c-4.309,4.032-4.523,10.773-0.512,15.083c8.747,9.365,38.528,40.939,54.251,54.208c2.005,1.685,4.437,2.517,6.869,2.517    c3.029,0,6.059-1.301,8.171-3.797C289.301,397.01,288.725,390.29,284.224,386.493z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M124.672,120.253C106.389,102.93,33.28,97.319,11.307,96.018c-3.029-0.149-5.824,0.853-7.957,2.88    C1.216,100.903,0,103.719,0,106.663v192c0,5.888,4.779,10.667,10.667,10.667h64c4.608,0,8.704-2.965,10.133-7.36    c1.557-4.779,38.315-117.589,43.157-173.056C128.235,125.671,127.04,122.471,124.672,120.253z M66.88,287.997H21.333V118.098    c34.283,2.709,71.275,8.597,84.715,15.125C100.395,179.943,74.816,262.951,66.88,287.997z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M501.333,117.33c-83.755,0-130.219,21.44-132.16,22.336c-2.773,1.301-4.843,3.712-5.696,6.635s-0.427,6.059,1.173,8.661    c13.184,21.227,54.464,139.115,62.4,167.872c1.28,4.629,5.483,7.829,10.283,7.829h64c5.888,0,10.667-4.779,10.667-10.667v-192    C512,122.087,507.221,117.33,501.333,117.33z M490.667,309.33h-45.355c-10.112-32.939-39.979-118.827-56.64-154.325    c16.277-5.525,51.243-15.019,101.995-16.213V309.33z"
                                            fill="#ffffff" data-original="#000000" class=""></path>
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                </g>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Kerjasama Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami membantu para pemilik lahan tidur di seluruh Indonesia untuk di kerjasamakan agar bisa
                            produktif dan menghasilkan manfaat.
                        </p>
                        <a href="{{url('')}}/kerjasama-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" width="62" x="0" y="0" viewBox="0 0 512 512"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <circle r="256" cx="256" cy="256" fill="#61481c" shape="circle"></circle>
                            <g transform="matrix(0.7,0,0,0.7,76.79991760253907,76.80000457763674)">
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="m269.833 141.018c0-74.393-60.523-134.917-134.916-134.917s-134.917 60.524-134.917 134.917 60.523 134.917 134.917 134.917 134.916-60.524 134.916-134.917zm-253.833 0c0-65.571 53.346-118.917 118.917-118.917 65.57 0 118.916 53.346 118.916 118.917s-53.346 118.917-118.916 118.917c-65.571-.001-118.917-53.347-118.917-118.917zm118.917 69.326c-4.418 0-8-3.582-8-8v-6.387c-15.416-2.651-27.313-12.734-30.853-26.935-1.069-4.287 1.54-8.629 5.827-9.698 4.29-1.069 8.629 1.54 9.698 5.827 2.94 11.792 14.981 15.699 24.404 15.488 8.178-.195 15.821-3.05 19.474-7.273 2.085-2.41 2.856-5.174 2.429-8.698-.7-5.764-4.081-12.805-24.186-16.105-27.651-4.54-34.1-18.794-34.642-29.953-.75-15.446 9.993-28.375 26.733-32.172.37-.084.741-.163 1.116-.236v-6.512c0-4.418 3.582-8 8-8s8 3.582 8 8v6.442c11.333 2.109 22.3 8.991 27.908 22.347 1.71 4.074-.205 8.763-4.279 10.473-4.075 1.71-8.763-.206-10.473-4.279-4.951-11.791-16.994-14.841-26.733-12.632-7.2 1.633-14.735 6.639-14.291 15.792.153 3.157.56 11.542 21.252 14.94 8.54 1.402 34.527 5.668 37.477 29.965.969 7.982-1.179 15.276-6.211 21.093-5.515 6.377-14.447 10.753-24.65 12.249v6.262c0 4.421-3.582 8.002-8 8.002zm104.913-69.326c0-57.85-47.064-104.914-104.914-104.914s-104.914 47.064-104.914 104.914 47.064 104.914 104.914 104.914 104.914-47.065 104.914-104.914zm-193.828 0c0-49.027 39.887-88.914 88.914-88.914s88.914 39.887 88.914 88.914-39.886 88.914-88.914 88.914-88.914-39.887-88.914-88.914zm255.255-9.999 64.346 47.208c2.431 1.784 5.659 2.05 8.348.686 2.689-1.362 4.385-4.121 4.385-7.136v-16.312c34.256 1.036 66.152 9.809 77.423 53.699.814 3.172 3.48 5.527 6.728 5.945.342.044.684.065 1.023.065 2.877 0 5.567-1.553 6.99-4.114 13.761-24.763 13.545-53.877-.577-77.88-16.529-28.095-49.646-44.917-91.588-46.807v-15.659c0-3.107-1.799-5.934-4.615-7.249-2.815-1.314-6.137-.88-8.52 1.114l-64.346 53.854c-1.885 1.578-2.939 3.934-2.861 6.39.079 2.458 1.282 4.742 3.264 6.196zm61.078-43.177v6.353c0 4.418 3.582 8 8 8 39.907 0 71.179 14.25 85.798 39.098 7.762 13.193 10.221 28.354 7.361 42.989-8.232-16.167-20.563-28.027-36.835-35.385-18.602-8.412-38.911-9.546-56.324-9.546-4.418 0-8 3.582-8 8v8.634l-43.386-31.831zm-131.882 325.807-64.346-47.207c-2.43-1.783-5.658-2.048-8.348-.686-2.689 1.362-4.385 4.121-4.385 7.136v16.312c-34.256-1.036-66.152-9.809-77.423-53.699-.814-3.172-3.48-5.527-6.728-5.945-3.246-.417-6.422 1.186-8.013 4.049-13.761 24.763-13.545 53.877.577 77.88 16.529 28.095 49.646 44.917 91.588 46.807v15.659c0 3.107 1.799 5.934 4.615 7.249 1.081.504 2.236.751 3.384.751 1.843 0 3.668-.636 5.136-1.865l64.346-53.855c1.885-1.578 2.939-3.934 2.861-6.391-.079-2.457-1.282-4.741-3.264-6.195zm-61.078 43.178v-6.353c0-4.418-3.582-8-8-8-39.907 0-71.179-14.25-85.798-39.098-7.762-13.193-10.221-28.354-7.361-42.989 8.232 16.167 20.563 28.027 36.835 35.385 18.602 8.412 38.911 9.546 56.324 9.546 4.418 0 8-3.582 8-8v-8.634l43.386 31.831zm340.88.81c-8.404-27.138-25.618-51.508-48.473-68.622-13.268-9.935-27.957-17.24-43.526-21.739 20.86-12.79 34.807-35.8 34.807-62.011 0-40.081-32.608-72.688-72.689-72.688s-72.689 32.608-72.689 72.688c0 26.21 13.947 49.22 34.807 62.01-15.57 4.499-30.259 11.804-43.527 21.739-22.855 17.114-40.07 41.484-48.473 68.622-3.59 11.589-1.601 23.351 5.599 33.118 7.199 9.766 17.846 15.145 29.979 15.145h188.608c12.133 0 22.779-5.379 29.979-15.145 7.198-9.767 9.187-21.528 5.598-33.117zm-186.57-152.372c0-31.258 25.431-56.688 56.689-56.688s56.689 25.43 56.689 56.688c0 31.255-25.425 56.683-56.679 56.689-.004 0-.008 0-.012 0-.003 0-.007 0-.01 0-31.252-.006-56.677-25.434-56.677-56.689zm168.091 175.995c-4.166 5.652-10.079 8.639-17.1 8.639h-188.607c-7.021 0-12.934-2.987-17.1-8.639-4.167-5.652-5.271-12.184-3.194-18.891 15.634-50.489 61.683-84.411 114.587-84.415h.011.01c52.904.005 98.952 33.927 114.587 84.416 2.078 6.706.973 13.237-3.194 18.89z"
                                    fill="#ffffff" data-original="#000000" class=""></path>
                            </g>
                        </svg>
                        <h6 class="mt-1">
                            <b>
                                Membantu Jual Beli Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Jual dan beli lahan lebih mudah dan cepat di seluruh wilayah Indonesia dengan platform
                            sengketatanah.id yang efisien dan praktis.
                        </p>
                        <a href="{{url('')}}/jual-beli-lahan" class="text-info"
                            style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg-3">
                <div class="card border-0 mt-3 shadow p-1">
                    <div class="card-body">
                        <div class="icon-wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                width="62" x="0" y="0" viewBox="0 0 479.976 479.976"
                                style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <circle r="239.988" cx="239.988" cy="239.988" fill="#61481c" shape="circle"></circle>
                                <g transform="matrix(0.7,0,0,0.7,71.99629760161042,71.99643859863284)">
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M279.339,144.016c-3.789-18.657-20.202-32.059-39.24-32.04c-13.255,0-24-10.745-24-24s10.745-24,24-24s24,10.745,24,24h16    c-0.024-19.001-13.389-35.373-32-39.2v-16.8h-16v16.8c-21.65,4.396-35.636,25.51-31.24,47.16    c3.789,18.657,20.202,32.059,39.24,32.04c13.255,0,24,10.745,24,24s-10.745,24-24,24s-24-10.745-24-24h-16    c0.024,19.001,13.389,35.373,32,39.2v16.8h16v-16.8C269.748,186.779,283.735,165.665,279.339,144.016z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M360.098,119.976C360.085,53.701,306.348-0.014,240.074,0C173.8,0.014,120.085,53.75,120.098,120.025    c0.012,57.014,40.138,106.148,96,117.551v82.4h-8c-1.959,0.002-3.849,0.722-5.312,2.024l-72,64    c-1.708,1.517-2.686,3.692-2.688,5.976v80c0,4.418,3.582,8,8,8h152c13.197,0.058,23.943-10.593,24.002-23.79    c0.027-5.995-2.201-11.781-6.242-16.21c8.32-9.044,8.32-22.956,0-32c8.32-9.044,8.32-22.956,0-32    c8.894-9.75,8.2-24.864-1.55-33.758c-4.429-4.04-10.215-6.268-16.21-6.242h-9.472c-2.42-6.776-7.753-12.108-14.528-14.528v-83.872    C319.936,226.099,360.033,176.98,360.098,119.976z M240.098,387.975v-20h-16v20c0.014,9.117,4.475,17.654,11.952,22.872    c-6.026,9.08-5.082,21.1,2.288,29.128c-6.019,6.444-7.878,15.737-4.8,24h-89.44v-68.408l67.04-59.592h44.96c4.418,0,8,3.582,8,8    v44c0,6.627-5.373,12-12,12C245.471,399.975,240.098,394.603,240.098,387.975z M232.098,319.975v-80.408    c2.656,0.176,5.296,0.408,8,0.408s5.344-0.232,8-0.408v80.408H232.098z M288.098,463.975h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8h32    c4.418,0,8,3.582,8,8S292.517,463.975,288.098,463.975z M280.098,351.975h8c4.418,0,8,3.582,8,8s-3.582,8-8,8h-8V351.975z     M280.098,387.975v-4h8c4.418,0,8,3.582,8,8s-3.582,8-8,8H277.29C279.115,396.237,280.075,392.136,280.098,387.975z     M288.098,415.975c4.418,0,8,3.582,8,8s-3.582,8-8,8h-32c-4.418,0-8-3.582-8-8s3.582-8,8-8H288.098z M240.098,223.975    c-57.41-0.066-103.934-46.59-104-104c0-57.438,46.562-104,104-104s104,46.562,104,104S297.536,223.975,240.098,223.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.629-30.539    C91.348,318.369,82.272,311.956,72.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M72.124,247.949c-39.765-0.014-72.012,32.209-72.026,71.974c-0.013,36.679,27.548,67.505,64,71.58v88.472h16v-88.472    c36.414-4.108,63.95-34.883,64-71.528C144.113,280.211,111.889,247.964,72.124,247.949z M72.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C128.059,350.887,103.01,375.936,72.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M408.098,311.975c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8h16c-0.042-10.134-6.445-19.15-16-22.528v-9.472h-16v9.472    c-12.473,4.393-19.023,18.066-14.629,30.539c3.38,9.596,12.455,16.009,22.629,15.989c4.418,0,8,3.582,8,8s-3.582,8-8,8    s-8-3.582-8-8h-16c0.042,10.134,6.445,19.15,16,22.528v9.472h16v-9.472c12.473-4.393,19.023-18.066,14.63-30.539    C427.348,318.369,418.272,311.956,408.098,311.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M479.399,311.748c-4.17-36.255-34.807-63.657-71.301-63.772c-39.764,0.126-71.898,32.463-71.772,72.227    c0.115,36.494,27.517,67.131,63.772,71.301v88.472h16v-88.472C455.602,386.96,483.943,351.252,479.399,311.748z M408.098,375.975    c-30.928,0-56-25.072-56-56c0-30.928,25.072-56,56-56c30.928,0,56,25.072,56,56C464.059,350.887,439.01,375.936,408.098,375.975z"
                                                fill="#ffffff" data-original="#000000" class=""></path>
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <h6 class="mt-1">
                            <b>
                                Membantu Pelelangan Lahan
                            </b>
                        </h6>
                        <p style="font-size: small;">
                            Kami melakukan kerjasama dengan berbagai balai lelang pertanahan. Anda juga bisa menjual
                            lahan dengan sistem lelang disini.
                        </p>
                        <a href="{{url('')}}/lelang-lahan" class="text-info" style="text-decoration:none">Bergabung</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bicara Sengketatanah.id -->
        <div class="ps-4" style="margin-bottom:-38px">
            <h5 style="margin-bottom:-30px">
                Bicara <a href="sengketatanah.id" class="text-primary"
                    style="text-decoration: none">Sengketatanah.id</a>
            </h5>
        </div>

        <div class="row justify-content-between mb-3 p-4" style="overflow-x: auto; flex-wrap: nowrap;margin-top:50px">

            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="data:image/jpeg;base64,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"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">

                        <h6 style="margin-top:10px">
                            <b>
                                Joko Hartanto
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://nugasin.com/template/assets/photo/WhatsApp_Image_2021-06-26_at_09_47_29.jpeg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Budi Susilo
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm col-lg">

                <div class="card border-0 shadow">
                    <div class="card-body">
                        <img src="https://s.kaskus.id/r540x540/images/2020/11/13/10653066_202011130432060327.jpg"
                            style="width:60px;height:60px;margin-top:-30px;z-index:999;object-fit:cover;"
                            class="img-fluid rounded-circle">
                        <h6 style="margin-top:10px">
                            <b>
                                Ikhsan Jamaludin
                            </b>
                        </h6>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab alias iure ipsam, enim eveniet
                            nostrum
                            corrupti veniam consequuntur at tempora.
                        </p>
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
