@extends('layouts.main')

@section('content')
<div class="col-lg-8">
<form method="POST" action="/nilai">
    @csrf
  <div class="mb-3">
    <label for="nama" class="form-label">user id</label>
    <input type="text" class="form-control @error('user->name') is-invalid @enderror" id="nama" name="nama" value="{{old('user->name')}}"  required>
  </div>
  <div class="mb-3">
    <label for="nilai1" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('nilai1') is-invalid @enderror" id="nilai1" name="nilai1" value="{{old('nilai1')}}" required  >
    @error('nilai1')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nilai2" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('nilai2') is-invalid @enderror" id="nilai2" name="nilai2" value="{{old('nilai2')}}" required >
    @error('nilai2')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nilai3" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('nilai3') is-invalid @enderror" id="nilai3" name="nilai3" value="{{old('nilai3')}}" required >
    @error('nilai3')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nilai4" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('nilai4') is-invalid @enderror" id="nilai4" name="nilai4" value="{{old('nilai4')}}" required >
    @error('nilai4')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="nilai5" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('nilai5') is-invalid @enderror" id="nilai5" name="nilai5" value="{{old('nilai5')}}" required >
    @error('nilai5')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create NIlai</button>
</form>
</div>

@endsection