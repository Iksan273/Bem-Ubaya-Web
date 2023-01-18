@extends('layouts.mainweb')

@section('content')
<div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="POST">
              @csrf   
              <h1 class="h3 mb-3 fw-normal"><B>Daftar Dulu Gengs</B></h1>
              <div class="form-floating">
                <input type="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Kamu" required value="{{ old('nama') }}">
                <label for="floatingInput">Nama Lengkap</label>
                @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('kementerian') is-invalid @enderror" id="kementerian" name="kementerian" placeholder="Presiden" required value="{{ old('kementerian') }}">
                <label for="floatingInput">Kementerian</label>
                @error('kementerian')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" required value="{{ old('nrp') }}">
                <label for="floatingInput">NRP</label>
                @error('nrp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required >
                <label for="floatingPassword">Password</label>
                @error('password')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
              
            </form>
            <small class="d-block text-center mt-3">Udah ada Akun kok disini? HIH! <a href ="/login">Login Sini Cok!</a></small>
          </main>
    </div>
</div>
@endsection