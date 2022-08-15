<?php

namespace App\Http\Controllers;
use App\Models\Normalisasi;
use App\Models\Category;
use App\Models\Saw;
use App\Models\Nilai;
use Illuminate\Http\Request;

class SawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        return view('saw.saw',[
            'normalisasi' => Nilai::all(),
            'cat1'=> Category::cat1() ,
            'cat2'=> Category::cat2() ,
            'cat3'=> Category::cat3() ,
            'cat4'=> Category::cat4() ,
            'cat5'=> Category::cat5() ,
            'n1' => Normalisasi::norm1(),
            'n2' => Normalisasi::norm2(),
            'n3' =>  Normalisasi::norm3(),
            'n4' => Normalisasi::norm4(),
            'n5' =>  Normalisasi:: norm5()
         ]);
    }

   
}
