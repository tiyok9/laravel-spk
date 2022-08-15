@extends('layouts.main')

@section('content')
<div class="container">
  @if (session()->has('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @elseif(session()->has('gagal'))
  <div class="alert alert-danger" role="alert">
    {{session('gagal')}}
  </div>
  @endif
    <h4>Category</h4>
   <a href="/category/create"  class="btn btn-primary mt-3">Tambah Data Category</a>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Bobot</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach($cat as $ca)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ca->nama_kategori}}</td>
                  <td>{{$ca->bobot}}</td>
                  <td>
                    <a href="/category/{{$ca->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/category/{{$ca->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/category/{{$ca->slug}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('yakin mau menghapus?')"><span data-feather="x-circle"></span></button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

        </div>
    </div>
</div>

@endsection