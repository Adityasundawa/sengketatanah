<?php 
use App\Models\Bid_Sengketa;
use App\Models\User;
?>


@extends('layouts.template-korban.main')
@section('content')

<div class="container mt-3">
    <div class="row">
        <?php $i = 1;    ?>
        @foreach ($sengketa as $item)
        <?php $users = User::where('id',$item['user_id'])->first(); ?>
        <div class="col-md-6 mb-3 sp">
            <div class="card mb-2">
                <div class="card-header bg-white">
                    <table>
                        <tbody>
                            <tr>
                                <td><b>PROJECT {{$i++}}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-body">
                    <table>
                        <tbody>
                            <tr>
                                <td>Owner/Korban</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$users->name}}</td>
                            </tr>
                            <tr>
                                <td>Objek Sengketa</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$item['objek_sengketa']}}</td>
                            </tr>
                            <tr>
                                <td>Luas Objek</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$item['luas']}} Ha</td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$item['lokasi']}}</td>
                            </tr>
                            <tr>
                                <td>Kebutuhan Dana</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; Rp.{{$item['jumlah_dana']}}</td>
                            </tr>

                            <tr>
                                <td>Imbal Hasil</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$item['pengembalian_dana']}}</td>
                            </tr>
                            <tr>
                                <td>Jaminan</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{$item['jaminan_berupa']}}</td>

                            </tr>

                            <tr>
                                <td>Jumlah Bid</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; {{count(Bid_Sengketa::where('sengketa_id',$item['id'])->get());}}</td>
                            </tr>
                            <tr>
                                <td>Kode Bid</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; <b class="text-danger">SP-00{{$item['id']}}</b></td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td></td>
                                <td>:</td>
                                <td>&nbsp; @if($item['status_sengketa'] == 1)
                                    <span class="badge badge-danger">Menunggu Verifikasi</span>
                                    @elseif($item['status_sengketa'] == 2)
                                    <span class="badge badge-dark">Terverifikasi</span>
                                    @elseif($item['status_sengketa'] == 3)
                                    <span class="badge badge-warning">Diproses</span>
                                    @elseif($item['status_sengketa'] == 4)
                                    <span class="badge badge-success">Selesai</span>
                                    @elseif($item['status_sengketa'] == 0)
                                    <span class="badge badge-danger">Pending</span>
                                    @endif</td>
                            </tr>
                        </tbody>
                    </table>

                    @if ($item['status_sengketa'] == 1)
                       @if ($item['status_file_upload'] == "yes")
                        <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}" class="btn btn-block btn-sm btn-success mt-4">Lihat Berkas</a>
                       @else
                        <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}" class="btn btn-block btn-sm btn-success mt-4 disabled" disable>Upload Dokumen</a>
                       @endif
                    @else
                       @if ($item['status_file_upload'] == "yes")
                       <a href="{{route('korban.hasil_berkas_sengketa',Crypt::encrypt($item['id']).'')}}" class="btn btn-block btn-sm btn-success mt-4">Lihat Berkas</a>
                    @else
                       <a href="{{route('korban.add_korban_file',Crypt::encrypt($item['id']).'')}}" class="btn btn-block btn-sm btn-success mt-4">Upload Dokumen</a>
                    @endif
                    @endif
                </div>
            </div>
        </div>
        @endforeach


    </div>

    <a class="btn btn-success" href="{{route('korban.tambah_sengketa')}}">Tambah Project</a>
</div>
@endsection