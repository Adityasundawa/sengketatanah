<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Laporan Sengketa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.css" />



</head>

<body>

    <div class="container">
        <div class="row justify-content-center mb-1">
            <div class="col-md-5">
                <img src="{{asset('/uploads/sengketa_tanah.png')}}" alt="" srcset="" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center mb-4">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header bg-secondary text-center text-uppercase text-white">
                        <h3>data sengketa masuk</h3>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="mt-2 mb-2">
                                <center>
                                    <a class="btn btn-primary rounded-0" style="width:32%" id="btnSponsor">Sponsor</a>

                                    <a class="btn btn-success rounded-0" style="width:32%" id="btnLawyer">Pengacara</a>

                                    <a class="btn btn-warning rounded-0" style="width:32%"
                                        id="btnPemerintah">Pemerintah</a>
                                </center>
                            </div>

                            <div class="col-lg-12 show" id="dataSponsor">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="badge bg-dark float-end ml-1">Lihat Berkas</span> <span
                                                    class="float-end">&nbsp;</span>
                                                <span class="badge bg-danger float-end">Terverifikasi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">


                                        <table>
                                            <tr>
                                                <td>Owner</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Objek Sengketa</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Luas Objek</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan Dana</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Imbal Hasil</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jaminan</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>

                                            </tr>

                                            <tr>
                                                <td>Jumlah Bid</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </table>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary mt-2" type="button">Bid Sengketa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 mt-2 mb-2" id="dataLawyer" style="display:none">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="badge bg-dark float-end ml-1">Lihat Berkas</span> <span
                                                    class="float-end">&nbsp;</span>
                                                <span class="badge bg-danger float-end">Terverifikasi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">


                                        <table>
                                            <tr>
                                                <td>Owner</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Objek Sengketa</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Luas Objek</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan Lawyer</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Pembayaran</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>Sesuai Kesepakatan</td>
                                            </tr>


                                            <tr>
                                                <td>Jumlah Bid</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                        </table>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-success mt-2" type="button">Bid Sengketa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 mt-2 mb-2" id="dataPemerintah" style="display:none">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <span class="badge bg-dark float-end ml-1">Lihat Berkas</span> <span
                                                    class="float-end">&nbsp;</span>
                                                <span class="badge bg-danger float-end">Terverifikasi</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">

                                        <table>
                                            <tr>
                                                <td>Owner</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Objek Sengketa</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Luas Objek</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td></td>
                                                <td>:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kebutuhan</td>
                                                <td></td>
                                                <td>:</td>
                                                <td>Diteruskan pada Pemerintah</td>
                                            </tr>



                                        </table>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-warning mt-2" type="button">Bid Sengketa</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

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

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/b-2.2.3/datatables.min.js"></script>
    <script>
        $('#btnLawyer').on('click', function () {
            $('#dataSponsor').hide()
            $('#dataPemerintah').hide()
            $('#dataLawyer').show()
        });
        $('#btnSponsor').on('click', function () {
            $('#dataSponsor').show()
            $('#dataLawyer').hide()
            $('#dataPemerintah').hide()
        });
        $('#btnPemerintah').on('click', function () {
            $('#dataLawyer').hide()
            $('#dataSponsor').hide()
            $('#dataPemerintah').show()
        });

        $(document).ready(function () {
            $('#myTable').DataTable();
        });

    </script>
</body>

</html>
