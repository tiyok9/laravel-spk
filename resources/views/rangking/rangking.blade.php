@extends('layouts.main')

@section('content')
<div class="container">
  
    <h4>Rangking Karyawan</h4>
    <a href="/rangking/show"  class="btn btn-primary mt-3">Cetak Rangking</a>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jumlah Nilai</th>
                 
                </tr>
              </thead>
                <tbody class="table-group-divider">
                  @foreach($rang as $ni )
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td >{{$ni->user->name}}</td>
                    <td >{{$ni->nilai_rangking}}</td>
                  </tr>
                  @endforeach
                </tbody>
                </table>
        </div>
    </div>
</div>

@endsection