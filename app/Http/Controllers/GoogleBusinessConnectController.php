<?php

namespace App\Http\Controllers;

use App\Models\GoogleBusinessConnect;
use Illuminate\Http\Request;
use App\Models\Account;

use SKAgarwal\GoogleApi\PlacesApi;
use Google; 
use GoogleMyBusiness;

class GoogleBusinessConnectController extends Controller
{

    function authRedirect() {
        // Define the GMB scope
        // $scopes = [
        //     'https://www.googleapis.com/auth/plus.business.manage'
        // ];

        // // Define any configs that overrride the /config/google.php defaults from pulkitjalan/google-apiclient
        // $googleConfig = array_merge(config('google'),[
        //     'scopes' => $scopes,
        //     'redirect_uri' => config('app.callback_url').'/callback/google/mybusiness'
        // ]);
          
        // Generate an auth request URL
        $googleClient = Google::getClient();
        
        
        $loginUrl = $googleClient->createAuthUrl();

        // Send user to Google for Authorisation
        return redirect()->away($loginUrl);
    }
    
    function getAccountName() {
        // return "here";
        
        $googleClient = Google::fetchAccessTokenWithAuthCode();
        $googleClient->setAccessToken("4/lgFxq2Jkvf09Njdau_k9iyLrxCCGDeSbBYTm7y2m49IU1drMnUWKU_S9e95ESSxqxzq0h_jaMTdCrNQkasU2sWc");
        $httpClient = $googleClient->authorize();
        // return dd($httpClient);
        // make an HTTP request
        $response = $httpClient->get('https://mybusiness.googleapis.com/v4/accounts');
        return dd($response);
        $gmb = new GoogleMyBusiness($googleClient);
        return dd($gmb);
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

        if($data){

            $test = GoogleBusinessConnect::where('place_id',$place_id)->count();

            if($test == 0){
                    try{
                        
                        GoogleBusinessConnect::create([
                            'place_id'=>$place_id,
                            'account_id'=>$account_id
                        ]);

                        return "OK";

                    }catch(Exception $e){
                        return "NOTOK";
                    }

            }
            
        }
        
        return "NOTOK";

    }


}
