<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('home')->with('products', $products);
    }

    public function getMenProducts() {
        $products = Product::where(['gender' => 'male'])->get();

        return view('men')->with('products', $products);
    }

    public function getWomenProducts() {
        $products = Product::where(['gender' => 'female'])->get();

        return view('women')->with('products', $products);
    }

    public function getUsersProducts() {
        $id = Auth::user()->id;
        $products = Product::where(['user_id' => $id])->get();

        return view('users-products')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;

        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'gender' => 'required',
            'color' => 'required',
            'price' => 'required',
            'category' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'url' => $request->url,
            'gender' => $request->gender,
            'color' => $request->color,
            'category' => $request->category,
            'price' => floatval($request->price),
            'user_id' => $id
        ];

        Product::create($data);

        return redirect('/')->with('info', $data);


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
        $userId = Auth::user()->id;

        $product = Product::where(['id' => intval($id)])->get();

        if(empty($product[0])) {
            return redirect('/');
        } else {
            if($product[0]->user_id === $userId) {
                Product::where(['id' => intval($id)])->delete();
                return redirect('/');
            }
            return redirect('/');

        }
    }
}
