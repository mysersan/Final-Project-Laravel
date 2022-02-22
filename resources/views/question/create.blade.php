@extends('layouts.master')

@section('title')
<section class="content">
    <div class="container-fluid">
        <h3>Buat Pertanyaan Baru</h3>
    </div>
</section>
    
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
          <!-- general form elements -->
          <div class="card card-primary">
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/question" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Judul Pertanyaan</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Judul Pertanyaan">
                </div>
                <div class="form-group">
                    <label for="body">Pertanyaan</label>
                    <textarea class="form-control" id="body" name="body" placeholder="Pertanyaan..."></textarea>
                    <!-- <input type="textarea" class="form-control" id="body" name="body" placeholder="Pertanyaan"> -->
                  </div>
                  <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="custom-select" id="categories_id" name="categories_id">
                        @foreach ($categories as $key)
                        <option value={{$key->id}}>{{$key->name}} </option>
                        @endforeach
                    </select>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>

@endsection