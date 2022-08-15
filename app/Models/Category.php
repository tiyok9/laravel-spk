<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use HasFactory,Sluggable;
    protected $table = "kategori";
    protected $guarded = ["id"];
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function cat1(){
        $cat1 = collect([
            Category::where('nama_kategori', 'katgori 1.1')->first('bobot')->bobot
        ])->first();
       return $cat1;
    }
    public function cat2(){
        $cat2 = collect([
            Category::where('nama_kategori', 'kategori-2')->first('bobot')->bobot
        ])->first();
       return $cat2;
    }
    public function cat3(){
        $cat3 = collect([
            Category::where('nama_kategori', 'kategori-3')->first('bobot')->bobot
        ])->first();
       return $cat3;
    }
    public function cat4(){
        $cat4 = collect([
            Category::where('nama_kategori', 'kategori-4')->first('bobot')->bobot
         ])->first();
       return $cat4;
    }
    public function cat5(){
        $cat5 = collect([
            Category::where('nama_kategori', 'kategori-5')->first('bobot')->bobot])->first();
       return $cat5;
    }
}

