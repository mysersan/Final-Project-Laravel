@extends('layouts.master')

@section('title')
Update profil
@endsection

@section('content')
<div class="tab-pane" id="settings">
                    <form action="/profileUpdate" method="POST">
                        @csrf
                        <div class="form-group row">
                        <label for="biodata" class="col-sm-2 col-form-label">Biodata</label>
                        <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="biodata" value="" placeholder="Name">{{$tampilProfiles->biodata}}</textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email" value="{{$tampilProfiles->email}}" placeholder="Name">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="age" value="{{$tampilProfiles->age}}" placeholder="Name">
                          @error('age')
                    <div class="invalid-feedback d-block">
                    {{ $message }}
                    </div>
                @enderror
                        </div>
                        
                      </div>
                      
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="address" value="{{$tampilProfiles->address}}" placeholder="Name">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  @endsection