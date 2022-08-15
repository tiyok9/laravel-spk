@extends('layouts.main')

@section('content')

<div class="container">
    @if (session()->has('sukses'))
      <div class="alert alert-success" role="alert">
        {{session('sukses')}}
      </div>
    @endif
      <h4>Pegawai</h4>
     <a href="/pegawai/create"  class="btn btn-primary mt-3">Tambah Data Pegawai</a>
      <div class="row">
          <div class="col-md-8">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  @foreach($peg as $p)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->jabatan->nama_jabatan}}</td>
                    <td>
                      <a href="#" class="badge bg-info"><span data-feather="eye"></span></a>
                      <a href="#" class="badge bg-warning"><span data-feather="edit"></span></a>
                      <form action="#" method="post" class="d-inline">
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