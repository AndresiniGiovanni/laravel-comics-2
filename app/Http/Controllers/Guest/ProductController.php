<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // $newProduct = new Product();
        // $newProduct->title = $data['title'];
        // $newProduct->description = $data['description'];
        // $newProduct->thumb = $data['thumb'];
        // $newProduct->price = $data['price'];
        // $newProduct->series = $data['series'];
        // $newProduct->type = $data['type'];
        // $newProduct->artists = $data['artists'];
        // $newProduct->writers = $data['writers'];

        $newProduct = Product::create($data);
        return redirect()->route('products.show', $newProduct->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('products.edit', compact('product'));
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
        $product = Product::find($id);
        $data = $request->all();

        $product = new Product();
        $product->title = $data['title'];
        $product->description = $data['description'];
        $product->thumb = $data['thumb'];
        $product->price = $data['price'];
        $product->series = $data['series'];
        $product->type = $data['type'];
        $product->sale_date = $data['sale_date'];
        $product->artists = $data['artists'];
        $product->writers = $data['writers'];

        $product-> update();

        return redirect()->route('products.show', $product->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');

    }
}
