<?php

namespace App\Http\Controllers;

use App\Models\CategoryController;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    
    public function list()
    {
//        $products=Product::all();//lazy load
        $products=Movie::with('categoryRelation')->get(); //eager load
//    dd($products);
        return view('backend.pages.Movie.list',compact('products'));
    }

    public function create()
    {
        $categories = CategoryController::all();

        return view('backend.pages.Movie.create',compact('categories'));
    }

    public function store(Request $request)
    {
// dd($request->all());
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
//            'image'=>'required|mimes:jpeg,jpg,png,gif'
            'image'=>'required'
        ]);

        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
// dd($fileName);

        //query builder-RAW query
        // eloquent ORM- Model Functions
        Movie::create([
            // table column name=>input field er name
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image' => $fileName,
            // 'user_id' => auth()->user()->id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'schedule'=>$request->schedule,
            'duration'=>$request->duration,
        ]);

        //convert
        // notify()->success('Product Created successfully.');
        return redirect()->route('Movie.list')->with('message','Movie Created successfully.');


    }

    public function deleteProduct(int $product_id)
    {
           $test=Movie::find($product_id);
             if($test)
             {
                 $test->delete();
                 return redirect()->back()->with('message','Movie deleted successfully.');
             }else{
                 return redirect()->back()->with('error','Movie not found.');
             }


//        Product::findOrFail($product_id)->delete();
//        return redirect()->back()->with('message','product deleted successfully.');
    }

    public function viewProduct($product_id)
    {
      $product=Movie::find($product_id);
      return view('backend.pages.Movie.view',compact('product'));
    }

    public function edit($product_id)
    {
        $product=Movie::find($product_id);
        $categories=CategoryController::all();
        return view('backend.pages.Movie.edit',compact('categories','product'));
    }

    public function update(Request $request,$product_id)
    {

    //    dd($request->all());
//        Product::find($product_id)->update([
//            'category_id' => $request->category_id,
//            'stock' => $request->product_stock,
//            'price' => $request->product_price,
//            'status' => $request->status,
//            'description' => $request->description
//        ]);

        $product=Movie::find($product_id);
        $fileName=$product->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }


        $product->update([
            'name' => $request->name,
            'image' => $fileName,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description
        ]);

        return redirect()->route('Movie.list')->with('message','Update success.');

    }

}
