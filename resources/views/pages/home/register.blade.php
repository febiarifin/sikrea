@extends('layouts.home')

@section('content')
    <div class="container p-5 d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card p-2 mr-1">
                <div class="card-body p-4">
                    <h2 class="fw-medium">Selamat datang di {{ config('app.name') }}</h2>
                    <p>Masukkan data diri untuk Pendaftaran</p>
                    <form action="{{ route('register') }}" method="post" class="mt-5">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                placeholder="Masukkan nama lengkap..." value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <p><i class="bi bi-info-circle"></i> {{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Username</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                                placeholder="Masukkan username..." value="{{ old('username') }}" required>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <p><i class="bi bi-info-circle"></i> {{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Masukkan email..." value="{{ old('email') }}" required>
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
                                <span class="invalid-feedback" role="alert">
                                    <p><i class="bi bi-info-circle"></i> {{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-5 mt-3">
                            <input type="submit" class="btn btn-primary" value="Daftar">
                        </div>
                    </form>
                    <div class="text-center">
                        <p>Sudah punya akun ? <a href="{{ route('login') }}" class="link-secondary fw-bold">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
