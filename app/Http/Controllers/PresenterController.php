<?php

namespace App\Http\Controllers;

use App\Models\Presenter; 
use Illuminate\Http\Request;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "i am here";
        return view('user.presenter.page');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function show(Presenter $presenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Presenter $presenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presenter $presenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presenter  $presenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presenter $presenter)
    {
        //
    }
}
