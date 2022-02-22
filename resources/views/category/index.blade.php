@extends('layouts.master')

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@section('title')
    Kategori Pertanyaan
@endsection

@section('content')
@if (session('success'))
<div class ="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card">
    <div class="card-body p-0">
      <table id ="example" class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 20%">
                      Nama Kategori
                  </th>
                  <th style="width: 30%">
                      Pertanyaan Terakhir
                  </th>
                  <th>
                      Jumlah Pertanyaan
                  </th>
                  <th style="width: 200px">
                      Aksi
                  </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($categories as $key => $category)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$category-> name}}</td>
              @if($category->  questions-> sortByDesc('created_at')->isEmpty())
              <td><p>belum ada pertanyaan </p> </td>
              @else
              <td>{{$category-> questions-> sortByDesc('created_at')-> first()-> title}}</td>
              @endif
              <td>{{$category-> questions-> count()}}</td>
              <td style="display: flex ">
                <a class="btn btn-primary btn-sm" href="/category/{{$category->id}}" style="height: 32px">View</a>
                <a href="/category/{{$category->id}}/edit" class="btn btn-default btn-sm" style="height: 32px">Edit</a>
                <form action="/category/{{$category->id}}" method="POST">
                @csrf
                @method('DELETE')
                    <input type="submit" value="delete" class="btn btn-danger btn-sm fas fa-delete">
                </form>
            </td>

            </tr>
        @empty
          <tr>
            <td colspan="5" align="center">No Data</td>
          </tr>
        @endforelse
          </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <a class="btn btn-info btn-sm" href="/category/create">Tambah Kategori</a>
  </div>
@endsection
@push('script')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endpush