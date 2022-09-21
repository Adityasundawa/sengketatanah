@extends('layouts.template-korban.main')
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3>Upload Dokumen</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('korban.action_add_korban_file',Crypt::encrypt($korban['id']))}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <table>
                            <tr>
                                <td>Foto KTP</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td>  <input class="file-input rounded-0" type="file" id="ktp" name="imagektp" required></td>
                            </tr>
                            <tr>
                                <td>Foto Lokasi</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td> <input class="file-input rounded-0" type="file" id="foto_lokasi" name="imagelokasi"
                                    required></td>
                            </tr>
                            <tr>
                                <td>Foto Dokumen Hak
                                    Tanah</td>
                                <td>:</td>
                                <td>&nbsp;</td>
                                <td> <input class="file-input rounded-0" type="file" id="dokumenTanah" name="image_dokumen_hak_tanah"></td>
                            </tr>
                            
                        </table>
                       
                      
                        <button type="submit" class="btn btn-sm btn-success">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection