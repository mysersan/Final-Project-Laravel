@extends('layouts.master')

@section('title')
Halaman profil
@endsection

@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="row d-flex justify-content-center flex-nowrap">
  
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('AdminLTE-3.1.0/dist/img/user4-128x128.jpg')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{auth()->user()->name}}</h3>

                <p class="text-muted text-center">@if(auth()->user()->isdokter===1)
    Dokter 
    
@else
 User
@endif</p>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong> Biodata</strong>

                <p class="text-muted">
                
                 
                </p>

                <hr>

                <strong> Email</strong>

                <p class="text-muted"></p>

                <hr>

                <strong> Umur</strong>

                <p class="text-muted">
                 </p>

                <hr>

                <strong> Alamat</strong>

                <p class="text-muted">
                
              </p>
                      
                              
              </div>
              
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <div class="row d-flex justify-content-center flex-nowrap">
            <a class="btn btn-primary "href="/profileUpdate">
              <button type="button" class="btn btn-primary">Ganti Profile</button>
            </a>
            </div>
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
</div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
@endsection