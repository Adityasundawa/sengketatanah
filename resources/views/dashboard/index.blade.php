<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/')}}dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('/')}}plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('/')}}dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('dashboard/publik')}}" class="brand-link">
                <img src="{{asset('/')}}dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{asset('/')}}dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/widgets.html" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Widgets
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>
                                    Gallery
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/kanban.html" class="nav-link">
                                <i class="nav-icon fas fa-columns"></i>
                                <p>
                                    Kanban Board
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Pilih Role Anda</label>
                                <select class="form-control" name="role" id="">
                                    <option disabled selected>-- Pilih Role --</option>
                                    <option value="korban">Korban</option>
                                    <option value="sponsor">Sponsor</option>
                                    <option value="pengacara">Pengacara</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="card korban">
                                <div class="card-body">
                                    <h3>Form Korban</h3>
                                    <hr>
                                    <form method="post" action="{{url('sengketa/send')}}" enctype="multipart/form-data">
                                        <div class="modal-body">
                                            @csrf

                                            @if ($errors->all())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            @endif
                                            @if (Session::has('success'))
                                            <div class="alert alert-success">
                                                {{Session::get('success')}}
                                            </div>
                                            @endif

                                            <div class="mb-2">
                                                <label for="nama" class="form-label">Nama Pelapor</label>
                                                <input type="text" class="form-control rounded-0" id="nama"
                                                    placeholder="Masukkan Nama Anda" aria-describedby="input-nama"
                                                    name="nama" required>
                                                <div id="input-nama" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="Alamat" class="form-label">Alamat</label>
                                                <input type="text" class="form-control rounded-0" id="Alamat"
                                                    placeholder="Masukkan Alamat Anda" aria-describedby="input-Alamat"
                                                    name="alamat" required>
                                                <div id="input-Alamat" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="no_hp" class="form-label">Nomor Hp</label>
                                                <input type="number" class="form-control rounded-0" id="no_hp"
                                                    placeholder="Masukkan Nomor HP Anda" aria-describedby="input-no_hp"
                                                    name="no_hp" required>
                                                <div id="input-no_hp" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control rounded-0" id="email"
                                                    placeholder="Masukkan Email Anda" aria-describedby="input-email"
                                                    name="email" required>
                                                <div id="input-email" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" class="form-control rounded-0" id="password"
                                                    placeholder="buat password Anda" aria-describedby="input-password"
                                                    name="password" required>
                                                <div id="input-password" class="form-text"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mb-2">
                                                        <label class="form-label">Objek Sengketa</label>
                                                        <select class="form-select rounded-0"
                                                            aria-label="Default select example" name="objek_sengketa"
                                                            required>
                                                            <option value="Sengketa Pertanahan">Sengketa Pertanahan
                                                            </option>
                                                            <option value="Konflik Pertanahan">Konflik Pertanahan
                                                            </option>
                                                            <option value="Perkara Pertanahan">Perkara Pertanahan
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="mb-2">
                                                        <label for="luas" class="form-label">Luas Tanah (m/ha)</label>
                                                        <input type="text" class="form-control rounded-0" id="luas"
                                                            placeholder="Masukkan Luas Tanah"
                                                            aria-describedby="input-luas" name="luas" required>
                                                        <div id="input-luas" class="form-text"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-2">
                                                <label for="lokasi" class="form-label">Lokasi</label>
                                                <input type="text" class="form-control rounded-0" id="lokasi"
                                                    placeholder="Masukkan Lokasi" aria-describedby="input-lokasi"
                                                    name="lokasi" required>
                                                <div id="input-lokasi" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="kronologi" class="form-label">Kronologi</label>
                                                <textarea id="kronologi" class="form-control rounded-0"
                                                    placeholder="Masukkan Kronologi" aria-describedby="input-kronologi"
                                                    name="kronologi" cols="30" rows="10" required></textarea>
                                                <div id="input-kronologi" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Status Pelapor</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="status_pelapor" required>
                                                    <option value="Pemilik">Pemilik</option>
                                                    <option value="Kuasa Pemilik">Kuasa Pemilik</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Pilih Jenis Pertolongan</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="jenis_pertolongan"
                                                    required>
                                                    <option selected disabled>Pilih Pertolongan</option>
                                                    <option value="sponsor">Sponsor</option>
                                                    <option value="pengacara">Pengacara</option>
                                                    <option value="pemerintah">Pemerintah</option>
                                                </select>
                                            </div>

                                            <div id="pengembalian_dana" class="alert alert-danger sponsor" role="alert">
                                                <strong>
                                                    Saya membutuhkan bantuan pendanaan dari sponsor untuk menyelesaikan
                                                    permasalahan sengketa tanah saya.
                                                </strong>
                                            </div>

                                            <div class="mb-2 pengacara">
                                                <label class="form-label">Pilih Tindakan Pengacara</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="bantuan_pengacara"
                                                    required>
                                                    <option selected disabled>Pilih Bantuan Pengacara</option>
                                                    <option value="konsultasi">Konsultasi</option>
                                                    <option value="pendampingan">Pendampingan</option>
                                                    <option value="penindakan">Penindakan</option>
                                                    <option value="cek-dokumen">Cek Dokumen</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 pengacara">
                                                <label for="anggaran_pengacara" class="form-label">Anggaran
                                                    Pengacara</label>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="number" class="form-control rounded-0"
                                                            id="anggaran_pengacara-s"
                                                            placeholder="Anggaran mulai dari ..."
                                                            aria-describedby="input-anggaran_pengacara-s"
                                                            name="anggaran_pengacara-s">
                                                    </div>
                                                    <div class="col-1 text-center"
                                                        style="width:4% !important; padding-right: 0px !important; padding-left: 0px !important">
                                                        -
                                                    </div>
                                                    <div class="col">
                                                        <input type="number" class="form-control rounded-0"
                                                            id="anggaran_pengacara-e" placeholder="Sampai ..."
                                                            aria-describedby="input-anggaran_pengacara-e"
                                                            name="anggaran_pengacara-e">
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="pengembalian_dana" class="alert alert-danger pemerintah"
                                                role="alert">
                                                <strong>
                                                    Saya hanya membutuhkan pertolongan agar permasalahan sengketa tanah
                                                    saya diteruskan pada Pemerintah.
                                                </strong>
                                            </div>

                                            <div class="mb-2 sponsor">
                                                <label for="keb_dana" class="form-label">Jumlah Dana Sponsor</label>
                                                <input type="number" class="form-control rounded-0" id="keb_dana"
                                                    placeholder="Sebutkan Nilai Kebutuhan"
                                                    aria-describedby="input-keb_dana" name="keb_dana">
                                                <div id="input-keb_dana" class="form-text"></div>
                                            </div>

                                            <div class="mb-2 sponsor">
                                                <label class="form-label">Pengembalian Dana Sponsor</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="pengembalian_dana_sponsor"
                                                    required>
                                                    <option selected disabled>Pilih Jenis Pengembalian</option>
                                                    <option value="70/30">Bagi Hasil 70/30*</option>
                                                    <option value="60/40">Bagi Hasil 60/40*</option>
                                                    <option value="50/50">Bagi Hasil 50/50*</option>
                                                    <option value="lain">Fee 50% Dari Pinjaman</option>
                                                    <option value="lain">Fee 75% Dari Pinjaman</option>
                                                    <option value="lain">Fee 100% Dari Pinjaman</option>
                                                </select>
                                                <small id="pengembalian_dana_sponsor" class="form-text text-muted">Bagi
                                                    hasil di
                                                    rekomendasikan untuk kasus-kasus sengketa tanah yang berat. Tanda
                                                    bintang(*) adalah pembagian untuk sponsor. </small>
                                            </div>

                                            <div class="mb-2 sponsor">
                                                <label class="form-label" for="jaminan_dana">Jaminan Dana
                                                    Sponsor</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="jaminan">
                                                    <option selected disabled>Pilih Jaminan</option>
                                                    <option value="ada">Ada Jaminan</option>
                                                    <option value="tidak">Tidak Ada Jaminan</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 jaminan_berupa">
                                                <label for="jaminan_berupa" class="form-label">Jaminan Berupa</label>

                                                <select class="form-select rounded-0" id="lokasi"
                                                    placeholder="Masukkan Jaminan" aria-describedby="input-jaminan"
                                                    name="jaminan_berupa">

                                                    <option value="Sertifikat Tanah">Sertifikat Tanah</option>
                                                    <option value="Sertifikat Rumah">Sertifikat Rumah</option>

                                                </select>
                                            </div>

                                            <div class="mb-2">
                                                <label for="ktp" class="form-label">Foto KTP</label>
                                                <input class="form-control rounded-0" type="file" id="ktp"
                                                    name="foto_ktp" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="foto_lokasi" class="form-label">Foto Lokasi</label>
                                                <input class="form-control rounded-0" type="file" id="foto_lokasi"
                                                    name="foto_lokasi" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="dokumenTanah" class="form-label">Foto Dokumen Hak
                                                    Tanah</label>
                                                <input class="form-control rounded-0" type="file" id="dokumenTanah"
                                                    name="dokumen_tanah" required>
                                            </div>
                                            <div class="mb-2 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" style="text-align:justify"
                                                    for="exampleCheck1">Dengan
                                                    mengisi form ini saya
                                                    menyatakan bahwa semua data yang diberikan benar adanya dan laporan
                                                    ini tidak
                                                    sedang dalam penanganan hukum pihak lain. Saya bersedia melakukan
                                                    wawancara mendalam di
                                                    <b>PODCAST SENGKETA TANAH</b> dan bekerja sama dengan
                                                    Sponsor melalui <b>PLATFORM SENGKETA TANAH</b> untuk
                                                    diselesaikan.</label>
                                            </div>

                                            <button type="submit" class="btn btn-success mt-3 ml-auto">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="card sponsor">
                                <div class="card-body">
                                    <h3>Form Sponsor</h3>
                                    <hr>
                                    <form method="post" action="#">
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" placeholder="Masukkan Nama Anda"
                                                    class="form-control rounded-0" id="nama"
                                                    aria-describedby="input-nama" name="nama" required>
                                                <div id="input-nama" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="Alamat" class="form-label">Alamat</label>
                                                <input type="text" placeholder="Masukkan Alamat Anda"
                                                    class="form-control rounded-0" id="Alamat"
                                                    aria-describedby="input-Alamat" name="alamat" required>
                                                <div id="input-Alamat" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="no_hp" class="form-label">Nomor Hp</label>
                                                <input type="number" placeholder="Masukkan Nomor HP Anda"
                                                    class="form-control rounded-0" id="no_hp"
                                                    aria-describedby="input-no_hp" name="no_hp" required>
                                                <div id="input-no_hp" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" placeholder="Masukkan Email Anda"
                                                    class="form-control rounded-0" id="email"
                                                    aria-describedby="input-email" name="email" required>
                                                <div id="input-email" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" placeholder="Masukkan Password Anda"
                                                    class="form-control rounded-0" id="password"
                                                    aria-describedby="input-password" name="password" required>
                                                <div id="input-password" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label">Pengelolaan Dana</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="pengelolaan_dana"
                                                    required>
                                                    <option selected disabled>Pilih Pengelolaan</option>
                                                    <option value="sendiri">Dikelola Sendiri</option>
                                                    <option value="platform">Dikelola Platform</option>
                                                </select>
                                            </div>

                                            <div id="pengembalian_dana" class="alert alert-danger pengelolaan-sendiri"
                                                role="alert">
                                                <strong>
                                                    Anda akan mengelola dana Anda sendiri dan bebas memilih sengketa
                                                    pertanahan yang paling baik untuk Anda selesaikan.
                                                </strong>
                                            </div>

                                            <div id="pengembalian_dana" class="alert alert-danger pengelolaan-platform"
                                                role="alert">
                                                <strong>
                                                    Dikelola platform
                                                    adalah pengelolaan sumber dana sponsor yang dijalankan oleh platform
                                                    SENGKETA TANAH.
                                                    Platform akan memberikan analisa seputar persengketaan tanah yang
                                                    bisa diselesaikan dan
                                                    menguntungkan. Semua persetujuan penggunaan dana tetap merupakan
                                                    keputusan
                                                    sponsor.
                                                </strong>
                                            </div>

                                            <div class="mb-2 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" style="text-align:justify"
                                                    for="exampleCheck1">Dengan
                                                    mengisi form ini saya
                                                    menyatakan bahwa saya selaku pribadi dan atau badan usaha dan atau
                                                    sebuah kelompok
                                                    tertarik untuk membantu persoalan sengketa tanah sebagai Sponsor.
                                                    Hal-hal lain
                                                    yang timbul sebagai Sponsor, baik berupa biaya-biaya operasional
                                                    korban, biaya pengacara dan biaya proses-proses
                                                    hukum lainnya siap saya tanggung termasuk biaya fee platform atas
                                                    keberhasilan persengketaan.</label>
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3 ml-auto">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md">
                            <div class="card pengacara">
                                <div class="card-body">
                                    <h3>Form Pengacara</h3>
                                    <hr>
                                    <form method="post" action="#">
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                <label for="nama" class="form-label">Nama</label>
                                                <input type="text" placeholder="Masukkan Nama Anda" class="form-control rounded-0" id="nama"
                                                    aria-describedby="input-nama" name="nama" required>
                                                <div id="input-nama" class="form-text"></div>
                                            </div>

                                            <div class="mb-2">
                                                <label class="form-label">Mewakili</label>
                                                <select class="form-select rounded-0"
                                                    aria-label="Default select example" name="mewakili" required>
                                                    <option value="pribadi">Pribadi</option>
                                                    <option value="law-firm">Law Firm</option>
                                                </select>
                                            </div>

                                            <div class="mb-2 law-firm">
                                                <label for="nama-law" class="form-label">Nama Law Firm</label>
                                                <input type="text" placeholder="Masukkan Nama Law Firm Anda" class="form-control rounded-0" id="nama-law"
                                                    aria-describedby="input-nama-law" name="nama-law">
                                                <div id="input-nama" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="Alamat" class="form-label">Alamat</label>
                                                <input type="text" placeholder="Masukkan Alamat Anda" class="form-control rounded-0" id="Alamat"
                                                    aria-describedby="input-Alamat" name="alamat" required>
                                                <div id="input-Alamat" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="no_hp" class="form-label">Nomor Hp</label>
                                                <input type="number" placeholder="Masukkan Nomor HP Anda" class="form-control rounded-0" id="no_hp"
                                                    aria-describedby="input-no_hp" name="no_hp" required>
                                                <div id="input-no_hp" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" placeholder="Masukkan Email Anda" class="form-control rounded-0" id="email"
                                                    aria-describedby="input-email" name="email" required>
                                                <div id="input-email" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" placeholder="Masukkan Password Anda" class="form-control rounded-0" id="password"
                                                    aria-describedby="input-password" name="password" required>
                                                <div id="input-password" class="form-text"></div>
                                            </div>
                                            <div class="mb-2">
                                                <label for="logo_lawfirm" class="form-label">Logo Law Firm/Foto
                                                    Pribadi</label>
                                                <input class="form-control rounded-0" type="file" id="logo_lawfirm"
                                                    name="logo_lawfirm" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="sertifikasi" class="form-label">Sertifikasi
                                                    Pengacara</label>
                                                <input class="form-control rounded-0" type="file" id="sertifikasi"
                                                    name="sertifikasi" required>
                                            </div>
                                            <div class="mb-2">
                                                <label for="tentang" class="form-label">Tentang Anda/Law Firm
                                                    Anda</label>
                                                <textarea id="tentang" class="form-control rounded-0"
                                                    placeholder="Ceritakan Profil Law Firm Anda"
                                                    aria-describedby="input-tentang" name="tentang" cols="30" rows="10"
                                                    required></textarea>
                                                <div id="input-tentang" class="form-text"></div>
                                            </div>

                                            <div class="mb-2 form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" style="text-align:justify"
                                                    for="exampleCheck1">Dengan
                                                    mengisi form ini saya
                                                    menyatakan bahwa saya mewakili pribadi/firma hukum tersebut
                                                    menyatakan minat dan tertarik
                                                    untuk membantu persoalan sengketa tanah sebagai kuasa hukum pada
                                                    platform SENGKETA
                                                    TANAH dan siap dikenakan biaya fee platform atas sebuah transaski
                                                    jasa hukum yang terjadi di dalam platform.</label>
                                            </div>
                                            <button type="submit" class="btn btn-success mt-3 ml-auto">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('/')}}plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{asset('/')}}plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{asset('/')}}plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('/')}}plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{asset('/')}}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('/')}}plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{asset('/')}}plugins/moment/moment.min.js"></script>
    <script src="{{asset('/')}}plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{asset('/')}}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{asset('/')}}plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('/')}}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/')}}dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('/')}}dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('/')}}dist/js/pages/dashboard.js"></script>

    <script>
        $(function () {
            var hidestuff = function () {
                $(".korban, .sponsor, .pengacara").hide();
            }

            $("select[name='role']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "korban") {
                    $(".korban").show();
                }
                if (value == "sponsor") {
                    $(".sponsor").show();
                }
                if (value == "pengacara") {
                    $(".pengacara").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".jaminan_berupa").hide();
            }

            $("select[name='jaminan']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "ada") {
                    $(".jaminan_berupa").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".pengelolaan-platform, .pengelolaan-sendiri").hide();
            }

            $("select[name='pengelolaan_dana']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "platform") {
                    $(".pengelolaan-platform").show();
                }
                if (value == "sendiri") {
                    $(".pengelolaan-sendiri").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".law-firm").hide();
            }

            $("select[name='mewakili']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "law-firm") {
                    $(".law-firm").show();
                }
            });
            hidestuff();
        });

        $(function () {
            var hidestuff = function () {
                $(".sponsor, .pengacara, .pemerintah").hide();
            }

            $("select[name='jenis_pertolongan']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "sponsor") {
                    $(".sponsor").show();
                }
                if (value == "pengacara") {
                    $(".pengacara").show();
                }
                if (value == "pemerintah") {
                    $(".pemerintah").show();
                }
            });
            hidestuff();
        });

    </script>
</body>

</html>
