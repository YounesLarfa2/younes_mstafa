<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycontroller extends Controller
{
    public function index()
    {
        $collapsed = 'display-categories';
        $categories = Category::paginate(10);  
        return view('admin2.categories.index',compact('categories','collapsed'));
    }

    public function create()
    {
        $collapsed = 'create-category';
        $categories = Category::paginate(6);
        return view('admin2.categories.create',compact('collapsed','categories'));

    }

    public function show_data()
    {
        $categories = Category::paginate(10);  
        return view('admin2.categories.list',compact('categories'));
    }


    public function store(Request $request)
    {
        if ($request->ajax()){
            // Create New Member
            $category = new Category;
            $category->name = $request->input('name');
            $category->save();
             
            return response($category);
        }else{
            $category = new Category;
            $category->name = $request->input('name');
            $category->save();
            return to_route('admin.categories.create');
        }
    }


    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        return view('admin.categories.edit');

    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        $category = Category::find($id)->delete();

        return redirect()->back();
        }
}
