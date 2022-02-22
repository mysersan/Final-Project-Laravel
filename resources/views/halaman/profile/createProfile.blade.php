@extends('layouts.master')

@section('title')
Update profil
@endsection

@section('content')
<div class="tab-pane" id="settings">
                    <form action="/createProfile" method="POST">
                        @csrf
                        <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Biodata</label>
                        <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="biodata"  placeholder="biodata"></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="email"  placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="age" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="age"  placeholder="Umur">
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="address"  placeholder="Alamat">
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