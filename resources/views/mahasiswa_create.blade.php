@extends('layouts.app')
@section('title', 'Create Data Mahasiswa')
@section('content')
<div class="container">
  <div class="card">
    <h2>Create Data Mahasiswa</h2>
    <form class="form-horizontal" action="/mahasiswa/store" method="post">
      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        Please fix the following errors
      </div>
      @endif
      {{ csrf_field() }}
      <div class="form-group">
        <label class="control-label col-sm-2" for="nim">NIM:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nim" placeholder="Enter NIM" name="nim">
        </div>
        @if($errors->has('nim'))
        <span class="help-block">{{ $errors->first('nim') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="nama">Nama:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="nama">
        </div>
        @if($errors->has('nama'))
        <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="jurusan">Prodi:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Jurusan" name="jurusan">
        </div>
        @if($errors->has('nama'))
        <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="fakultas">Jurusan:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" placeholder="Enter Fakultas" name="fakultas">
        </div>
        @if($errors->has('nama'))
        <span class="help-block">{{ $errors->first('nama') }}</span>
        @endif
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection