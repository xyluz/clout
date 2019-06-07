<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService; 

class ProductController extends Controller
{
       /**
     * The service instance.
     * 
     * @var \App\Services\ProductService
    */
    protected $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(ProductService $service)
    {
        $this->middleware('auth');
        $this->service = $service;        
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product_image = '';

        if($request->product_image){
            
            $product_image = $request->file('product_image')->store('public');

        }    
       
        try{

            $this->service->create($request,$product_image);
            alert()->success('Product Added','Success');

        }catch(Exception $e){
            alert()->error($e,'Error');
        }
        return redirect()->back();
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        try{
            $this->service->delete($product);
            alert()->success('Product Deleted', 'Success!');
        }catch(Exception $c){
            alert()->error($c, 'Error!');
        }
        return redirect()->back();
    }
}
