@extends('layouts.master')

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@section('title')
    Jawaban dari dr. {{auth()->user()->name}}
@endsection

@section('content')
@if (session('success'))
<div class ="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card">
    <div class="card-body p-0">
      <table id= "example" class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 30%">
                      Pertanyaan
                  </th>
                  <th style="width: 30%">
                      Jawaban
                  </th>
                  <th>
                      Aksi
                  </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($answers as $key => $answer)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$answer->questions->title}}</td>
              <td>{{$answer->body}}</td>
              <td style="display: flex ">
                <a class="btn btn-primary btn-sm" href="/question/{{$answer->questions->id}}" style="height: 32px">View</a>
                <a href="/answer/{{$answer->id}}/edit" class="btn btn-default btn-sm" style="height: 32px">Edit</a>
                <form action="/answer/{{$answer->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger btn-sm fas fa-delete">
                </form>
            </td>

            </tr>
        @empty
          <tr>
            <td colspan="4" align="center">No Data</td>
          </tr>
        @endforelse
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
@push('script')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush
