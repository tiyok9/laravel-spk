@extends('layouts.main')

@section('content')
<div class="col-lg-8">
<form method="POST" action="/category">
    @csrf
  <div class="mb-3">
    <label for="nama_kategori" class="form-label">Nama Kategori</label>
    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" name="nama_kategori" value="{{old('nama_kategori')}}"required autofocus>
    @error('nama_kategori')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="bobot" class="form-label">Bobot</label>
    <input type="text" class="form-control @error('bobot') is-invalid @enderror" id="bobot" name="bobot" value="{{old('bobot')}}" required >
    @error('bobot')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
  </div>
  <div class="mb-3">
    <input type="hidden" class="form-control" id="slug" name="slug" disable readonly>
  </div>
  <button type="submit" class="btn btn-primary">Create Category</button>
</form>
</div>
<script>
    const name = document.querySelector('#nama_kategori')
    const slug = document.querySelector('#slug')
  
    name.addEventListener('change', function(){
      fetch('/category/checkSlug?nama_kategori= ' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
    });
  
  </script>
@endsection