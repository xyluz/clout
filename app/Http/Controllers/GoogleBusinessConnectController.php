<?php

namespace App\Http\Controllers;

use App\Models\GoogleBusinessConnect;
use Illuminate\Http\Request;
use App\Models\Account;

use SKAgarwal\GoogleApi\PlacesApi;

class GoogleBusinessConnectController extends Controller
{
    public $googlePlaces;

    public function __construct()
    {
        $this->googlePlaces = new PlacesApi('AIzaSyBBNjx6nv-hHqBNw2hkMqzxOhpmMeqRhDg');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        $name = $request->name;
       
        $data = $this->googlePlaces->placeAutocomplete($name);
        return $data;
        
    }

    public function details(Request $request){
       
        $place_id = $request->place_id;
        $account_id = $request->account_id;

        $data = $this->googlePlaces->placeDetails($place_id);

        if($data.status == "OK"){
           
            try{
                    GoogleBusinessConnect::create([
                        'place_id'=>$place_id,
                        'account_id'=>$account_id
                    ]);

                    return "OK";

            }catch(Exception $e){
                return $e;
            }

        }
        
        return "NOTOK";

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
     * @param  \App\GoogleBusinessConnect  $googleBusinessConnect
     * @return \Illuminate\Http\Response
     */
    public function show(GoogleBusinessConnect $googleBusinessConnect)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoogleBusinessConnect  $googleBusinessConnect
     * @return \Illuminate\Http\Response
     */
    public function edit(GoogleBusinessConnect $googleBusinessConnect)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoogleBusinessConnect  $googleBusinessConnect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoogleBusinessConnect $googleBusinessConnect)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoogleBusinessConnect  $googleBusinessConnect
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoogleBusinessConnect $googleBusinessConnect)
    {
        //
    }
}
