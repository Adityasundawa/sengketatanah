@extends('layouts.template-admin.main')
@section('content')
<div class="container-fluid mt-3 ">
    <div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card">
           <div class="card-header">
              Meeting Online
           </div>
           <div class="card-body">
              <table>
                <tr>
                    <td>Join URL </td>
                    <td>:</td>
                    <td>{{$zoomlink->Join_URL}}</a></td>
                </tr>
                <tr>
                    <td>Password </td>
                    <td>:</td>
                    <td>{{$zoomlink->Password}}</td>
                </tr>
                <tr>
                    <td>Start_Time </td>
                    <td>:</td>
                    <td>{{$zoomlink->Start_Time}}</td>
                </tr>
                <tr>
                    <td>Host_Key </td>
                    <td>:</td>
                    <td>{{$zoomlink->Host_Key}}</td>
                </tr>
                <tr>
                    <td>Duration </td>
                    <td>:</td>
                    <td>{{$zoomlink->Duration}}</td>
                </tr>
              </table>
           </div>
        </div>
    </div>
    </div>
</div>

@endsection