<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;
use App\Services\PurchaseService; 


class PurchasesController extends Controller
{ 
        /**
     * The service instance.
     * 
     * @var \App\Services\CategoryService
    */
    protected $service;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(PurchaseService $service)
    {
        // $this->middleware('auth');
        $this->service = $service;        
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug,$package)
    {
        $items = $this->service->packageItems($package);
        $package = $this->service->package($package);

        // return dd($package);

        // $totalprice = $this->service->total($package); for when we start adding more products

        return view('user.invoice',compact('items','package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Array $data)
    { 
        //called via ajax, after invoice is paid
        return $this->service->registerPurchase($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // return $request->all();        
       return  $this->service->registerPurchase($request->all()); 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function show(Purchases $purchases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchases $purchases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Purchases $purchases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchases  $purchases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Purchases $purchases)
    {
        //
    }
}
