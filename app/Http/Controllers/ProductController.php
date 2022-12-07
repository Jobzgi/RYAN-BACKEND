<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function create()
    {
        return view('products.create');
    }
    public function save(Request $request)
    {
        $product = new Product;
        $product->code_pr = $request->input('code_pr');
        $product->name_pr = $request->input('name_pr');
        $product->description_pr = $request->input('description_pr');
        $product->image = $request->input('image');
        $product->price = $request->input('price');

        $product->user_id = Auth::user()->id;
        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        else{
            $product->image='';
        }
        $product->save();
        return redirect('products');
    }
    public function list()
    {
        $products = Product::all();
        return view('products.products', ['products' => $products]);
    }
    public function edit(Request $request, $id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->code_pr = $request->input('code_pr');
        $product->name_pr = $request->input('name_pr');
        $product->description_pr = $request->input('description_pr');
        $product->image = $request->input('image');
        $product->price = $request->input('price');

        if($request->hasfile('image') != null)
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $product->image = $filename;
        }
        else{
            $product->image='';
        }

        $product->save();
        return redirect('products');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products');
    }
    public function getOne($id)
    {
        $product = Product::find($id);
        return view('products.detailproduct',compact('product'));
    }
}
