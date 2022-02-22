@extends('layouts.master')

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  
@section('title')
Login
@endsection

@section('content')

<div class="row d-flex justify-content-center flex-nowrap">
<div class="login-box">
@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{session('loginError')}}
  
</div>
@endif
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Tanya</b>Dok</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk ke akun anda</p>

      <form action="/login" method="post">
      @csrf
       <div class="form-group">
       <label for="username">Username</label>
        <div class="input-group">
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          <input type="text" name="username" class="form-control rounded-bottom @error('username') is-invalid @enderror" placeholder="Masukkan username anda">
        
        </div>
        @error('username')
                    <div class="invalid-feedback d-block">
                    {{ $message }}
                    </div>
                @enderror
</div>

          <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" placeholder="Masukkan password anda">
          
        </div>
        @error('password')
                    <div class="invalid-feedback d-block">
                    {{ $message }}
                    </div>
                @enderror
      </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
   
      <p class="mb-0">
        <a href="/register" class="text-center">Belum punya akun? Registrasi sekarang!</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
</div>

@endsection