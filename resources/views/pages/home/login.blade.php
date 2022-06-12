@extends('layouts.home')

@section('content')
    <div class="container p-5 d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card p-2 mr-1">
                <div class="card-body p-4">
                    <h2 class="fw-medium">Selamat datang di {{ config('app.name') }}</h2>
                    <p>Masukkan Email dan Password untuk Login</p>

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                    @endif

                    @if (session('failed'))
                        <div class="alert alert-danger" role="alert">{{ session('failed') }}</div>
                    @endif

                    <form action="{{ route('login') }}" method="post" class="mt-5">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" placeholder="Masukkan email..." required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <p><i class="bi bi-info-circle"></i> {{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <label for="" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Masukkan password..." required>
                            @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <p><i class="bi bi-info-circle"></i> {{ $message }}</p>
                                </div>
                            @enderror
                        </div>
                        <div class="mb-5 mt-3">
                            <input type="submit" class="btn btn-primary" value="Login">
                        </div>
                    </form>

                    <div class="text-center">
                        <p>Belum punya akun ? <a href="{{ route('register') }}" class="link-secondary fw-bold">Daftar</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
