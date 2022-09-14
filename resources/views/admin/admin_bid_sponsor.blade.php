@extends('layouts.template-admin.main')
@section('content')
{{-- sas --}}
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Data Korban</div>
                <div class="card-body">
                     <div class="row">
                        <div class="col-4">
                            <div class="card">
                               <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-File.png" style="width: 200px; height: auto;" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-8">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{$korban->nama}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$korban->alamat}}</td>
                                </tr>
                                <tr>
                                    <td>No Handphone</td>
                                    <td>:</td>
                                    <td>{{$korban->no_hp}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>Email Kosong</td>
                                </tr>
                                
                            </table>
                            <table class="my-2 table">
                                <thead class="bg-dark text-white ">
                                  <tr>
                                      <td colspan="2">Hubungi Korban</td>
                                    </tr>
                                </thead>
                               <tbody>
                                  <tr>
                                      <td>Email</td>
                                      <td>Email Kosong</td>
                                    </tr>
                                    <tr>
                                      <td>Email</td>
                                      <td>{{$korban->no_hp}}</td>
                                    </tr>
                               </tbody>
                             </table>
                        </div>
                     </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Data Sponsor</div>
                <div class="card-body">
                    <div class="row">
                       <div class="col-4">
                           <div class="card">
                              <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-PNG-File.png" style="width: 200px; height: auto;" class="img-fluid" alt="">
                           </div>
                       </div>
                       <div class="col-8">
                           <table>
                               <tr>
                                   <td>Nama</td>
                                   <td>:</td>
                                   <td>{{$sponsor->name}}</td>
                               </tr>
                               <tr>
                                   <td>Alamat</td>
                                   <td>:</td>
                                   <td>Addres Kosong</td>
                               </tr>
                               <tr>
                                   <td>No Handphone</td>
                                   <td>:</td>
                                   <td>No Hp Kosong</td>
                               </tr>
                               <tr>
                                   <td>Email</td>
                                   <td>:</td>
                                   <td>Email Kosong</td>
                               </tr>
                           </table>

                           <table class="my-2 table">
                              <thead class="bg-dark text-white ">
                                <tr>
                                    <td colspan="2">Hubungi Sponsor</td>
                                  </tr>
                              </thead>
                             <tbody>
                                <tr>
                                    <td>Email</td>
                                    <td>2</td>
                                  </tr>
                                  <tr>
                                    <td>No Hp</td>
                                    <td>2</td>
                                  </tr>
                             </tbody>
                           </table>
                       </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
    <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-6">

                        <h3> Keterangan Data korban Tanah 
                        @if($korban->status_laporan == 1)
                        <span class="badge badge-primary">Menunggu Verifikasi</span>
                        @elseif($korban->status_laporan == 2)
                        <span class="badge badge-dark">Terverifikasi</span>
                        @elseif($korban->status_laporan == 3)
                        <span class="badge badge-warning">Diproses</span>
                        @elseif($korban->status_laporan == 4)
                        <span class="badge badge-success">Selesai</span>
                        @endif
                        </h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Objek Sengketa</th>
                            <td>:</td>
                            <td>{{$korban->objek_sengketa}}</td>
                        </tr>
                        <tr>
                            <th>Luas</th>
                            <td>:</td>
                            <td>{{$korban->luas}}</td>
                        </tr>
                        <tr>
                            <th>lokasi</th>
                            <td>:</td>
                            <td>{{$korban->lokasi}}</td>
                        </tr>
                        <tr>
                            <th>kronologi</th>
                            <td>:</td>
                            <td>{{$korban->kronologi}}</td>
                        </tr>
                        <tr>
                            <th>Status Pelapor</th>
                            <td>:</td>
                            <td>{{$korban->status_pelapor}}</td>
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
       </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Jadwal Meeting Online/Offline</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr class="bg-dark text-white">
                            <td>No</td>
                            <td>Jenis Meeting</td>
                            <td>Lokasi / Link</td>
                            <td>Deskripsi </td>
                        </tr>
                        <?php if(count($meeting) == 0) : ?>
                        <tr>
                            <td colspan="4"><center>Tidak Ada Data</center></td>
                        </tr>
                        <?php else : ?>
                         @foreach ($meeting as $item)
                        <tr>
                            <td>{{$item['id']}}</td>
                            <td>{{$item['jenis_meeting']}}</td>
                            <td>{{$item['location']}}</td>
                            <td>{{$item['deskripsi']}}</td>
                        </tr>
                         @endforeach
                        <?php endif ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                <img src="{{url('/')}}/uploads/{{$korban->foto_ktp}}" alt="" class="img-fluid">
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
                                <img src="{{url('/')}}/uploads/{{$korban->dokumen_tanah}}" alt=""
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