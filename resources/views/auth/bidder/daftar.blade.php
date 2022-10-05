<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sengketa Tanah</title>
    <link rel="icon" type="image/x-icon" href="{{asset('')}}uploads/sengketa-logo_pas.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnify/2.3.3/css/magnify.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/js-image-zoom/js-image-zoom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-image-zoom/js-image-zoom.min.js"></script>


    <style>
        body {
            width: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            background: #eee;
        }
    </style>

    <style>
        .row-col {
            text-align: right
        }
        @media (max-width: 767.98px) { 
            .row.row-md {
                text-align: center !important;
            }

            .row.row-md .row-col {
                margin-top: 10px;
                text-align: center !important;
            }
        }

        .vr.vr-none {
            display: none !important;
        }

        hr.hr-none {
            display: block !important;
            margin-top: 0px
        }

        .login-mb {
            margin-bottom: 0.5rem;
        }

        @media (min-width: 1000px) {
            .vr.vr-none {
                display: block !important;
            }

            hr.hr-none {
                display: none !important;
            }

            .login-mb {
                margin-bottom: 0rem;
            }
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

        .bg-brown {
            color: #fff;
            background: #61481C;
            border: 1px solid #61481C;
        }

        .text-brown {
            color: #61481C;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-4" href="{{url('/')}}">
                <img src="{{asset('/uploads/sengketa-logo_pas.png')}}" style="width:30px" class="img-fluid me-2">SENGKETA TANAH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="#">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jaminan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hubungi Kami</a>
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

    <div class="container mt-4 mb-5">
        <h4 class="text-center">Form {{$req->title}}</h4>
        
        <div class="row mt-5 text-center">
            <div class="col-3">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x text-brown"></i>
                    <i class="fa-solid fa-user fa-stack-1x text-white"></i>
                </span>
                <h6>Info Pribadi</h6>
            </div>
            <div class="col-3">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x" style="color: rgba(108, 117, 125, 0.5)"></i>
                    <i class="fa-solid fa-location-dot fa-stack-1x text-white"></i>
                </span>
                <h6>Alamat</h6>
            </div>
            <div class="col-3">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x" style="color: rgba(108, 117, 125, 0.5)"></i>
                    <i class="fa-solid fa-briefcase fa-stack-1x text-white"></i>
                </span>
                <h6>Pekerjaan</h6>
            </div>
            <div class="col-3">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x" style="color: rgba(108, 117, 125, 0.5)"></i>
                    <i class="fa-solid fa-address-book fa-stack-1x text-white"></i>
                </span>
                <h6>Kontak Darurat</h6>
            </div>
        </div>

        <div class="card mt-5">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="mb-2" style="font-weight: 600">Nama Anda Sesuai KTP</label>
                            <input type="text"
                              class="form-control" name="name" id="name" placeholder="Contoh : Lewan Wan">
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="email" class="mb-2" style="font-weight: 600">Email</label>
                            <input type="email"
                              class="form-control" name="email" id="email" placeholder="Contoh : example@email.com">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="hp" class="mb-2" style="font-weight: 600">Nomor HP</label>
                            <input type="number"
                              class="form-control" name="hp" id="hp" placeholder="Contoh : 0812-3452-3571">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="tp-lahir" class="mb-2" style="font-weight: 600">Tempat Lahir</label>
                            <input type="text"
                              class="form-control" name="tp-lahir" id="tp-lahir" placeholder="Contoh : Jakarta">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password" class="mb-2" style="font-weight: 600">Kata Sandi</label>
                            <input type="password"
                              class="form-control" name="password" id="password" placeholder="Kata Sandi Anda">
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="password-c" class="mb-2" style="font-weight: 600">Konfirmasi Kata Sandi</label>
                            <input type="password"
                              class="form-control" name="password-c" id="password-c" placeholder="Kata Sandi Anda">
                        </div>  

                        <div class="col-md-6 mb-3">
                            <label for="tg-lahir" class="mb-2" style="font-weight: 600">Tanggal Lahir</label>
                            <input type="date"
                              class="form-control" name="tg-lahir" id="tg-lahir" placeholder="Contoh : 2022-10-05">
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="jk" class="mb-2" style="font-weight: 600">Jenis Kelamin</label>
                            <select id="jk" class="form-select">
                                <option>-- Pilih Jenis Kelamin --</option>
                                <option value="Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <label for="agama" class="mb-2" style="font-weight: 600">Jenis Kelamin</label>
                            <select id="agama" class="form-select">
                                <option>-- Pilih Agama --</option>
                                <option value="Islam">Islam</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Hindhu">Hindhu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Lain">Lain Lain</option>
                            </select>
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="status" class="mb-2" style="font-weight: 600">Status Perkawinan</label>
                            <select id="status" class="form-select">
                                <option>-- Pilih Status Perkawinan --</option>
                                <option value="Sudah">Sudah Kawin</option>
                                <option value="Belum">Belum Kawin</option>
                            </select>
                        </div> 

                        
                        <div class="col-md-6 mb-3">
                            <label for="ktp" class="mb-2" style="font-weight: 600">Nomor KTP</label>
                            <input type="date"
                              class="form-control" name="ktp" id="ktp" placeholder="Contoh : 12-34-56-78-90-11-2222">
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="ft-ktp" class="mb-2" style="font-weight: 600">Foto KTP</label>
                            <input class="form-control" type="file" id="ft-ktp" aria-describedby="ft-ktp">
                            <div id="ft-ktp" class="form-text text-danger">Foto e-KTP harus jelas & terang</div>
                        </div> 

                        <div class="col-md-6 mb-3">
                            <label for="ft-selfie" class="mb-2" style="font-weight: 600">Foto Selfie</label>
                            <input class="form-control" type="file" id="ft-selfie" aria-describedby="ft-selfie">
                            <div id="ft-selfie" class="form-text text-danger">Foto selfie harus jelas & terang tanpa memegang foto KTP</div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="nm-npwp" class="mb-2" style="font-weight: 600">Nomor NPWP (OPTIONAL)</label>
                            <input type="text"
                              class="form-control" name="nm-npwp" id="nm-npwp" placeholder="Contoh : 12.345.678.9-123.000">
                            <div id="nm-npwp" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="ft-npwp" class="mb-2" style="font-weight: 600">Foto NPWP (OPTIONAL)</label>
                            <input class="form-control" type="file" id="ft-npwp" aria-describedby="ft-npwp">
                            <div id="ft-npwp" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div> 
                        
                        <div class="col-md-6 mb-3">
                            <label for="ft-kk" class="mb-2" style="font-weight: 600">Foto Kartu Keluarga (OPTIONAL)</label>
                            <input class="form-control" type="file" id="ft-kk" aria-describedby="ft-kk">
                            <div id="ft-kk" class="form-text text-danger">Jika tidak ada, tidak perlu diisi</div>
                        </div> 
                    </div>

                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button class="w-100 btn btn-brown">Lanjut</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>



    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js">
    </script>
</body>

</html>