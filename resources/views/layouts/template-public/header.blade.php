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
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link" href="{{url('/')}}/contact">Hubungi Kami</a>-->
                <!--</li>-->
            </ul>

        </div>
    </div>
</nav>

<div class="mobile">
    <div class="row d-flex mb-1 mt-1">
        <div class="col text-center">
            <a href="{{url('/')}}/login" class="text-dark" style="text-decoration:none"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        </div>
        <div class="col text-center">
            <a href="{{url('/')}}/register" class="text-dark" style="text-decoration:none"><i class="fa-solid fa-pen-to-square"></i> Register</a>
        </div>
        <div class="col text-center">
            <a href="#" class="text-dark" style="text-decoration:none"><i class="fa-solid fa-key"></i> Forgot</a>
        </div>
    </div>
</div>