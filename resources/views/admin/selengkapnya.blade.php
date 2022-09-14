@extends('layouts.template-admin.main')
@section('content')

<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-6">

                            <h3> Keterangan Data Sengketa Tanah 
                            @if($selengkapnya->status_laporan == 1)
                            <span class="badge badge-primary">Menunggu Verifikasi</span>
                            @elseif($selengkapnya->status_laporan == 2)
                            <span class="badge badge-dark">Terverifikasi</span>
                            @elseif($selengkapnya->status_laporan == 3)
                            <span class="badge badge-warning">Diproses</span>
                            @elseif($selengkapnya->status_laporan == 4)
                            <span class="badge badge-success">Selesai</span>
                            @endif
                            </h3>
                        </div>
                        <div class="col-lg-6">
                            <div class="float-right">
                                <div class="dropdown">
                                    <button class="btn btn-dark dropdown-toggle" type="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        Status Laporan
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{url('/')}}/admin/sengketa-tanah/proses-verif/{{encrypt($selengkapnya->id)}}?status={{encrypt(2)}}">Verifikasi</a>
                                        <a class="dropdown-item" href="{{url('/')}}/admin/sengketa-tanah/proses-verif/{{encrypt($selengkapnya->id)}}?status={{encrypt(3)}}">Diproses</a>
                                        <a class="dropdown-item" href="{{url('/')}}/admin/sengketa-tanah/proses-verif/{{encrypt($selengkapnya->id)}}?status={{encrypt(4)}}">Selesai</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <td>:</td>
                                <td>{{$selengkapnya->nama}}</td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td>:</td>
                                <td>{{$selengkapnya->alamat}}</td>
                            </tr>
                            <tr>
                                <th>Nomor Hp</th>
                                <td>:</td>
                                <td>{{$selengkapnya->no_hp}}</td>
                            </tr>
                            <tr>
                                <th>Objek Sengketa</th>
                                <td>:</td>
                                <td>{{$selengkapnya->objek_sengketa}}</td>
                            </tr>
                            <tr>
                                <th>Luas</th>
                                <td>:</td>
                                <td>{{$selengkapnya->luas}}</td>
                            </tr>
                            <tr>
                                <th>lokasi</th>
                                <td>:</td>
                                <td>{{$selengkapnya->lokasi}}</td>
                            </tr>
                            <tr>
                                <th>kronologi</th>
                                <td>:</td>
                                <td>{{$selengkapnya->kronologi}}</td>
                            </tr>
                            <tr>
                                <th>Status Pelapor</th>
                                <td>:</td>
                                <td>{{$selengkapnya->status_pelapor}}</td>
                            </tr>
                            <tr>
                                <th>Foto KTP</th>
                                <td>:</td>
                                <td>

                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#fotoktp">
                                        Foto KTP
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <th>Dokumen Tanah</th>
                                <td>:</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#dokumentanah">
                                        Dokumen Tanah
                                    </button>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>



            <div class="card mt-4">
                <div class="card-header">
                   <h3> Sponsor Bid</h3>
                </div>
                <div class="card-body">
                    <?php if($sponsor == NULL){  ?>
                        <br>
                        <br>
                    <?php }else{ ?>
                         <div class="col-lg-12">
                            <div class="row">
                               
                                @foreach ($sponsor as $item)
                                <div class="col-lg-3">
                                      <div class="card">
                                         <div class="card-body">
                                           <a href="{{url('/admin/bid_sponsor/')}}/{{Crypt::encrypt($item['id'])}}/{{Crypt::encrypt($selengkapnya->id)}}">{{$item['name']}}</a>
                                         </div>
                                      </div>
                                </div>
                                 @endforeach
                            
                            </div>
                         </div>
                    <?php }?>
                  
                  
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->



<!-- Modal -->
<div class="modal fade" id="fotoktp" tabindex="-1" aria-labelledby="fotoktpLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fotoktpLabel">Foto KTP</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <center>
                                <img src="{{url('/')}}/uploads/{{$selengkapnya->foto_ktp}}" alt="" class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="dokumentanah" tabindex="-1" aria-labelledby="dokumentanahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dokumentanahLabel">Dokumen Tanah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <center>
                                <img src="{{url('/')}}/uploads/{{$selengkapnya->dokumen_tanah}}" alt=""
                                    class="img-fluid">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
@endsection
