@extends('layouts.master')

@section('title')
<section class="content">
    <div class="container-fluid">
        <h3>Form Buat Kategori</h3>
    </div>
</section>
    
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/category" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Nama Kategori</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Nama Kategori">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>

@endsection