@extends('layouts.app')

@section('content')
<style>
    .screen{
        height: 640px;
    }

    .login__field {
        padding: 10px 0px
    }

    .screen__background__shape1 {
        top: 5px;
        right: 100px;
    }
</style>
<div class="container pt-5 pb-5" style="min-height:100vh">
	<div class="screen">
		<div class="screen__content">
            <img src="{{asset('')}}uploads/sengketa-logo_pas-9.png" class="m-4" style="width: 50px; margin-bottom: 0px !important" alt="">
			<form class="login" style="padding-top: 0px"   method="POST" action="{{ route('register') }}">
                @csrf
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input id="name" type="text" placeholder="Nama" class="login__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input id="email" type="email" placeholder="Email" class="login__input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input id="address" type="address" placeholder="Address" class="login__input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

                <div class="login__field">
					<i class="login__icon fas fa-envelope"></i>
					<input id="phone" type="phone" placeholder="Phone" class="login__input @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
                <div class="login__field">
					<select name="role" req' class="form-select login__input rounded-0" style="border-right:0px; border-left:0px; border-top:0px; background:transparent; font-weight:700" aria-label="Default select example">
                        <option disabled="">Pilih Role</option>
                        <option value="korban">Korban Sengketa</option>
                        <option value="sponsor">Sponsor</option>
                        <option value="pengacara">Pengacara</option>
                    </select>
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input id="password" type="password" placeholder="Password" class="login__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
                    <input id="password-confirm" type="password" placeholder="Confirm Password" class="login__input" name="password_confirmation" required autocomplete="new-password">
				</div>
				<button class="button login__submit mt-2">
					<span class="button__text">Register Now</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
                <a href="{{url('/login')}}" class="button register mt-3">
					<span class="button__text">Login Here</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</a>				
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

{{-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
--}}
@endsection
