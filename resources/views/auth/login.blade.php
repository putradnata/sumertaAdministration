@extends('layouts.auth')

@section('addressTitle','Login')

@section('loginForm')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Masukkan Username" value="{{ old('username') }}" required autocomplete="username" autofocus>

        @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group mb-4">
        {{-- <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan Kata Sandi" required autocomplete="current-password"> --}}

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Masukkan Kata Sandi">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group clearfix">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="float-left forgot-link my-2">Lupa Password ?</a>
        @endif
        <button type="submit" class="btn btn-primary float-right">MASUK</button>
    </div>

    <div class="form-divider"></div>

    <div class="text-center mt-4">
        <a href="{{ route('register') }}" class="btn-link text-capitalize f12">Buat Akun</a>
    </div>
</form>
@endsection
