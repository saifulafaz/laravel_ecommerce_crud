<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::latest()->get();
        return view('layouts.backend.category.index',compact('categories'));
    }

    public function create()
    {
        return view('layouts.backend.category.create');
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'description'=>'required'
        ]);
        $addCategory = new Category;
        $addCategory->name = $request->name;
        $addCategory->slug = str_slug($request->name);
        $addCategory->description = $request->description;

        if($addCategory->save())
            return redirect('category')->with('msg','Data saved');
        else
            return redirect()->back()->with('msg','Please try again');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
         $category = Category::find($id);
        return view('layouts.backend.category.edit',compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
