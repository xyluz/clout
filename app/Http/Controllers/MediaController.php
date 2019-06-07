<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Services\MediaService;

class MediaController extends Controller
{
      /**
     * The service instance.
     * 
     * @var \App\Services\MediaService
    */
    protected $service;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(MediaService $service)
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
        $photo = '';

        if($request->photo){
            
            $photo = $request->file('photo')->store('public');

        }    
       
        try{

            $this->service->create($request,$photo);
            alert()->success('Product Added','Success');

        }catch(Exception $e){
            alert()->error($e,'Error');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy($media)
    {
        try{
            $this->service->delete($media);
            alert()->success('Photo Deleted', 'Success!');
        }catch(Exception $c){
            alert()->error($c, 'Error!');
        }
        return redirect()->back();
    }
    
}
