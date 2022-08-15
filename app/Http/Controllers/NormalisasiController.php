<?php

namespace App\Http\Controllers;

use App\Models\Normalisasi;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NormalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        return view('normalisasi.normalisasi',[
            'normalisasi' => Nilai::all(),
            'n1' => Normalisasi::norm1(),
            'n2' => Normalisasi::norm2(),
            'n3' =>  Normalisasi::norm3(),
            'n4' => Normalisasi::norm4(),
            'n5' =>  Normalisasi:: norm5()
         ]);
    } 
   
   
   
}
