<?php

namespace App\Http\Controllers;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category',[
           "cat" => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = Category::sum('bobot');
        $bobotnew = $request->bobot;
        $bobot = $cat+$bobotnew;
       
        if($bobot > 100){
            return redirect('category')->with('gagal','gagal nilai bobot melebihi 100');
        }

        $validated = $request->validate([
            'nama_kategori' => 'required|max:50',
            'bobot' => 'required|integer',
            'slug' => 'required|unique:kategori|max:50'
        ]);
       
        Category::create($validated);
        return redirect('category')->with('sukses','berhasil menambahkan kateogri!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('editCategory',[
            'category' => $category,
            'cat' => Category::all()
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'nama_kategori' => 'required|max:50',
            'bobot' => 'required|integer'
        ];

        if($request->slug != $category->slug){
            $rules['slug'] = 'required|unique:kategori|max:50';
        }

        $validated = $request->validate($rules);

        Category::where('id',$category->id)
        ->update($validated);
        return redirect('category')->with('sukses','berhasil mengupdate kategori!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);
        return redirect('category')->with('sukses','berhasil menghapus kateogri!!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->nama_kategori);

        return response()->json(['slug' => $slug]);

    }
}
