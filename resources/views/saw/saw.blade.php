@extends('layouts.main')

@section('content')
<div class="container">
  @if (session()->has('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif
    <h4>NILAI SAW</h4>
   
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
                  <th scope="col">Jumlah Nilai</th>
                 
                </tr>
              </thead>
                <tbody class="table-group-divider">
                  @foreach($normalisasi as $ni )
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td name='user_id'>{{$ni->user->name}}</td>
                    <?php
                    $nilai1 = $ni->nilai1/$n1*$cat1 ;
                    $nilai2 =$ni->nilai2/$n2*$cat2 ;
                    $nilai3 = $ni->nilai3/$n3*$cat3 ;
                    $nilai4 =$ni->nilai4/$n4*$cat4 ;
                    $nilai5 = $ni->nilai5/$n5*$cat5 ;
                    $total = [$nilai1, $nilai2, $nilai3, $nilai4,$nilai5];
                    $totalnilai = round(array_sum($total), 2);
                    ?>
                    <td name='nilai1'>{{$nilai1}}</td>
                    <td name='nilai2'>{{$nilai2}}</td>
                    <td name='nilai3'>{{$nilai3}}</td>
                    <td name='nilai4'>{{$nilai4}}</td>
                    <td name='nilai5'>{{$nilai5}}</td>
                    <td name='nilai5'>{{$totalnilai}}</td>
                  </tr>
                 
               
                  <form method="POST" action="/rangking" >
                    @csrf
                    <input type="hidden" name="user_id[]" value="<?= $ni['user_id']; ?>">
                    <input type="hidden" name="totalnilai[]" value="<?= $totalnilai; ?>">
                    
                      @endforeach
                </tbody>
                </table>
                  <button type="submit" class="btn btn-primary">Create nilai</button>
                  </form>

        </div>
    </div>
</div>

@endsection