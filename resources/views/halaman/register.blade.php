@extends('layouts.master')

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  
@section('title')
Register
@endsection

@section('content')
<div class="row d-flex justify-content-center flex-nowrap">
  @if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
</div>
@endif
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><b>Tanya</b>Dok</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Daftar akun baru</p>

      <form action="/register" method="POST">
      @csrf
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
        <div class="input-group">
        
        <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        <input type="text" class="form-control rounded-bottom @error('name') is-invalid @enderror" name="name" placeholder="Masukkan nama lengkap anda">
       
        </div>
        @error('name')
                    <div class="invalid-feedback d-block">
                    {{ $message }}
                    </div>
                @enderror
      </div>
      
        <div class="form-group">
        <label for="username">username</label>
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
      <div class="form-group">
      <input type="radio" name="isdokter" value=1 required>
    <label for="isdokter">Dokter</label>
  <input type="radio" name="isdokter" value=0>
  <label for="isdokter">Bukan dokter</label>
</div>

        <div class="row">
         
          <!-- /.col -->
          <div class="col">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="/login" class="text-center">Sudah punya akun? Login sekarang!</a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
</div>
@endsection

<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>


