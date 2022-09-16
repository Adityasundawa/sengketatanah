<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utopian Slideshow</title>
    <link rel="stylesheet" href="{{url('/')}}/loading/css/style.css">
    
</head>

<body>
    
    <h2>Loading ..</h2>
    <div class="bar">
        <span class="full"></span>    
    </div>
    <span class="pourcentage">
        0%
    </span>
    <h3>Welcome Username</h3>
    @if(auth()->user()->role == "utama")
    <a href="{{route('dashboard.index')}}">Klik Disini Untuk Melanjutkan</a>
    @endif
    
    <script src="{{url('/')}}/loading/js/jquery-3.1.1.min.js"></script>
    <script src="{{url('/')}}/loading/js/plugins.js"></script>
</body>

</html> 