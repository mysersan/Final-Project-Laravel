@extends('layouts.master')

@section('title')
<section class="content">
    <div class="container-fluid">
        <h3>Edit Jawaban {{$answer->id}}</h3>
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
            <form role="form" action="/answer/{{$answer->id}}" method="POST">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="body">Jawaban anda</label>
                    <textarea class="form-control" id="body" name="body" placeholder="{{old('body', $answer->body)}}"></textarea>
                    <!-- <input type="textarea" class="form-control" id="body" name="body" placeholder="Pertanyaan"> -->
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
