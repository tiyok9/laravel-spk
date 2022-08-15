@extends('layouts.main')

@section('content')
<div class="col-lg-6">
    <div class="h4 mt-3"> CREATE ACCOUNT PEGAWAI</div>
<form method="POST" action="/pegawai">
    @csrf
  <div class="mb-3 mt-4">
    <label for="name" class="form-label">Nama Pegawai</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}"required autofocus>
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{old('username')}}" required >
    @error('username')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="Jabatan" class="form-label">Jabatan</label>
        <select class="form-select" name="id_jabatan">
        @foreach($jab as $j)
            @if(old('id_jabatan')== $j->id)
                <option value="{{$j->id}}" selected>{{$j->nama_jabatan}}</option>
            @else
                <option value="{{$j->id}}">{{$j->nama_jabatan}}</option>
            @endif
        @endforeach
        </select>

    @error('Jabatan')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{old('password')}}" required >
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary float-end">Create User</button>
</form>
</div>

@endsection