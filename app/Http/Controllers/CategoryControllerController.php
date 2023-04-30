<?php

namespace App\Http\Controllers;

use App\Models\CategoryController;
use Illuminate\Http\Request;

class CategoryControllerController extends Controller
{

    public function list()
    {
        $cats=CategoryController::paginate(10);//select * from categories;
        //        dd($cats);
        return view('backend.pages.category.list',compact('cats'));
    }


    public function createForm()
    {
        return view('backend.pages.category.create');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate(['category_name'=>'required|unique:category_controllers,name',]);

        CategoryController::create([
            //database column name => input field name
                'name'=>$request->category_name,
                'status'=>$request->status,
                'description'=>$request->description
        ]);

        //        return redirect()->route('category.list');
        notify()->success('Category Created successfully.');

        return redirect()->route('category.list');

    }

    public function edit($id){
        $category = CategoryController::find($id);
        return view('backend.pages.category.edit', compact('category'));

    }

    public function update(Request $request, $id){
        $category = CategoryController::findOrFail($id);
        $category->name =  $request->name;
        $category->status =  $request->status;
        $category->description =  $request->description;
        $category->save();
        
        notify()->success('Category Updated successfully.');
        return redirect()->route('category.list');
    }

    public function destroy($id)
    {
        CategoryController::destroy($id);
        notify()->success('Category deleted successfully.');
        return redirect()->route('category.list');

    }
}

