<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
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

        $title = 'Todos las categorias';
        $id = 1;
        $type = 'category';

        return view('category.index', compact('title', 'id', 'type'));
    }


    public function store($slug)
    {

        $brand = Brand::where('slug', $slug)->first();
        $id = $brand->id;
        $type = 'brand';

        $title = $brand->bname;

        return view('category.index', compact('title', 'id', 'type'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {


        $category = Category::where('slug', $slug)->first();
        $id = $category->id;
        $type = 'category';
        $title = $category->cname;

        return view('category.index', compact('title', 'id', 'type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
