<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Normalisasi extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function norm1(){
        $nilai1 = collect([
            Nilai::all()->max('nilai1')
        ])->first();
       return $nilai1;
    }
    public function norm2(){
        $nilai2 = collect([
            Nilai::all()->max('nilai2')
        ])->first();
       return $nilai2;
    }
    public function norm3(){
        $nilai3 = collect([
            Nilai::all()->max('nilai3')
        ])->first();
       return $nilai3;
    }
    public function norm4(){
        $nilai4 = collect([
            Nilai::all()->max('nilai4')
        ])->first();
       return $nilai4;
    }
    public function norm5(){
        $nilai5 = collect([
            Nilai::all()->max('nilai5')
        ])->first();
       return $nilai5;
    }
    
}
