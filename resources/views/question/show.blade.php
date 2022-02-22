@extends('layouts.master')

  <!-- icheck bootstrap -->
  
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
@section('title')
    {{$question -> title}}
@endsection

@section('content')
@if (session('success'))
<div class ="alert alert-success">
  {{session('success')}}
</div>
@endif
<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
      <!-- Conversations are loaded here -->
      <div class="direct-chat-messages">
        <!-- Message. Default to the left -->
        <div class="direct-chat-msg">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">{{$question -> users -> name}}</span>
            <span class="direct-chat-timestamp float-right">{{$question -> updated_at->toDateTimeString()}}</span>
          </div>
          <!-- /.direct-chat-infos -->
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            {{$question -> body}}
            <br>
            @if($question->getFirstMediaUrl('images', 'thumb')==null)
            @else
            <img src="{{$question->getFirstMediaUrl('images', 'thumb')}}" / width="250px">
            @endif
          </div>
          <!-- /.direct-chat-text -->
        </div>
        <!-- /.direct-chat-msg -->

        <!-- Message to the right -->
        @forelse ($question->answers as $answers)
        <div class="direct-chat-msg right">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">dr. {{$answers->user->name}}</span>
            <span class="direct-chat-timestamp float-left">{{$answers -> updated_at->toDateTimeString()}}</span>

          </div>
          <!-- /.direct-chat-infos -->
          <!-- /.direct-chat-img -->
          <div class="direct-chat-text">
            {{$answers->body}}
            
          </div>
          <form role ="form" action="/answer/{{$answers->id}}/like" method="POST">
            @csrf
            @method('put')
           <div class="input-group">
            <button type="submit" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like {{$answers->like}}</button>
           </div>
         </form>  
          <!-- /.direct-chat-text -->
        </div>
        @empty
        @endforelse
        <!-- /.direct-chat-msg -->
      <!--/.direct-chat-messages-->
    <!-- /.card-body -->
    <div class="card-footer">
      @if(auth()->user()->isdokter == 1)
      <form role ="form" action="/question/{{$question->id}}" method="POST">
        @csrf
        <div class="input-group">
          <textarea class="input-group" id="body" name="body" placeholder="Jawaban..."></textarea>
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </form>
      @else
      <form action="#" method="post">
        <div class="input-group">
          <input type="text" name="message" placeholder="Hanya dokter yang bisa menjawab" class="form-control" disabled>
          <span class="input-group-append">
            <button type="button" class="btn btn-danger" disabled>Send</button>
          </span>
        </div>
      </form>
      @endif
    </div>
    <!-- /.card-footer-->
  </div>
@endsection
