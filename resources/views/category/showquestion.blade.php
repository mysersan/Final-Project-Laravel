@extends('layouts.master')

  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@section('title')
    Kategori {{$categories -> name}}
@endsection

@section('content')
<div class="card">
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 50%">
                     Judul Pertanyaan
                  </th>
                  <th style="width: 200px">
                      Aksi
                  </th>
              </tr>
          </thead>
          <tbody>
            @forelse ($categories->questions as $key => $question)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$question-> title}}</td>
              <td style="display: flex ">
                <a class="btn btn-primary btn-sm" href="/question/{{$question->id}}" style="height: 32px">View</a>
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
    @if(auth()->user()->isdokter == 0)
    <a class="btn btn-info btn-sm" href="/question/create">Tambah Pertanyaan</a>
    @else
    <a class="btn btn-danger btn-sm" href="#" aria-disabled="true">Maaf, Dokter tidak bisa menambah pertanyaan</a>
    @endif
    <!-- /.card-body -->
  </div>
@endsection
