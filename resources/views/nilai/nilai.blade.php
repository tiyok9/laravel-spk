@extends('layouts.main')

@section('content')
<div class="container">
  @if (session()->has('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
    <h4>Nilai</h4>
   <a href="/nilai/create"  class="btn btn-primary mt-3">Tambah Data Category</a>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nilai1</th>
                  <th scope="col">Nilai2</th>
                  <th scope="col">Nilai3</th>
                  <th scope="col">Nilai4</th>
                  <th scope="col">Nilai5</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                @foreach($nilai as $ni)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$ni->user->name}}</td>
                  <td>{{$ni->nilai1}}</td>
                  <td>{{$ni->nilai2}}</td>
                  <td>{{$ni->nilai3}}</td>
                  <td>{{$ni->nilai4}}</td>
                  <td>{{$ni->nilai5}}</td>
                  <td>
                    <a href="/category/{{$ni->slug}}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/category/{{$ni->slug}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/category/{{$ni->slug}}" method="post" class="d-inline">
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