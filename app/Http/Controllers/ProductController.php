<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table("createProducts")->get();
        return view('createProduct.index',['createProducts'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        //
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function save(StoreProductRequest $request)
    {
        //
        $validated=$req->validate([
            'prodName'=>'required',
            'quantity'=>'required',
            'price'=>'required'
        ]);

        $product=Product::create($validated);
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        $data=Product::findorFail($id);
        return view('product.edit', ['products'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
        $validated=$request->validate([
            'prodName'=>['required'],
            'quantity'=>['required'],
            'price'=>['required'],
        ]);

        $data = Product::find($request->id);
        $data->prodName=$request->prodName;
        $data->quantity=$request->quantity;
        $data->price=$request->price;

        $data->save();
        return redirect('/')->withSuccess(__('customer updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(Product $product)
    {
        //
        $delete = DB::table("createProducts")
        ->where("id","=",$id)
        ->delete();
        return redirect('/')->withSuccess(__('Product has been deleted successfully!'));
    }
}
