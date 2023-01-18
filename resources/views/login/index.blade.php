@extends('layouts.mainweb')

@section('content')
<div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <strong>Halo Menteri BEM-US! </strong> Anda telah berhasil login yay selamat ya!.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal"><B>LOGIN DULU YA ADICK2</B></h1>
            <form action="/login" method="POST">
              @csrf    
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
              
            </form>
            <small class="d-block text-center mt-3">EW, belum ada akun? HIH! <a href ="/register">Daftar Sini Cok!</a></small>
          </main>
    </div>
</div>
@endsection