@extends('layouts.master')

@section('title')
<section class="content">
    <div class="container-fluid">
        <h3>Edit Pertanyaan {{$question->id}}</h3>
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
            <form role="form" action="/question/{{$question->id}}" method="POST">
                @csrf
                @method('put')
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Judul Pertanyaan</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{old('title', $question->title)}}">
                </div>
                <div class="form-group">
                    <label for="body">Pertanyaan</label>
                    <textarea class="form-control" id="body" name="body" placeholder="{{old('body', $question->body)}}"></textarea>
                    <!-- <input type="textarea" class="form-control" id="body" name="body" placeholder="Pertanyaan"> -->
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