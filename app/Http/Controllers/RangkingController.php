<?php

namespace App\Http\Controllers;

use App\Models\Rangking;
use Illuminate\Http\Request;

class RangkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $rangking = Rangking::all();
      $sorted = $rangking->sortByDesc('nilai_rangking');
      return view('rangking.rangking',[
        'rang' =>  $sorted 
    ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->user_id;
        $totalnilai = $request->totalnilai;
        foreach ($totalnilai as $keys => $values) {
          foreach ($user_id as $key => $value) {
            # code...
            $data[$key]['user_id'] = $value;
            $data[$keys]['nilai_rangking'] = $values;
          }
        }
        // foreach($user_id as $user_id) {
        //     Rangking::create([
        //         'user_id' => $user_id,
        //         'nilai_rangking' => $totalnilai
        //     ]);
        // }
        // $data = [];
        // foreach($user_id as $us) {
        //     $data[] = [
        //         'user_id' => $us,
        //         'nilai_rangking' => $totalnilai
        //     ];
        // }
    //    ddd($data);
       
        // // Insert mahasiswa.
        // $waktumahasiswa = Rangking::create($input);

      
        // $dat[]=($data);
        // // ddd($d);
        Rangking::insert($data);
        return redirect('saw')->with('sukses','berhasil menambahkan kateogri!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rangking  $rangking
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $rangking = Rangking::all();
        $sorted = $rangking->sortByDesc('nilai_rangking');
        return view('rangking.cetak',[
          'rang' =>  $sorted 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rangking  $rangking
     * @return \Illuminate\Http\Response
     */
    public function edit(Rangking $rangking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rangking  $rangking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rangking $rangking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rangking  $rangking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rangking $rangking)
    {
        //
    }
}
