<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $cate = new Category;
        $cate->name = $request->name;
        $cate->save();
        return redirect()->route('categories');
    }
    public function index()
    {
        $cate = Category::all();
        return view('admin.categories.index')->with('categories', $cate);
    }
    public function edit($id)
    {
        $cate = Category::find($id);
        return view('admin.categories.edit')->with('category', $cate);   
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $cate = Category::find($id);
        $cate->name = $request->name;
        $cate->save();
        Session::flash('success', 'You succesfully updated a Category');
        return redirect()->route('categories');
    }
    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect()->route('categories');
    }
}
