@foreach ($sengketa as $item)
<br>
================================================================================================================================================================<br>
    <a href="{{route('browsesengketa','/',$item['id'])}}/{{ Crypt::encrypt($item['id']) }}">{{ $item['nama'] }}</a>
    <br>
    {{ $item['lokasi'] }}
    <br>
    
================================================================================================================================================================
    <br>
@endforeach
{!! session('status') !!}