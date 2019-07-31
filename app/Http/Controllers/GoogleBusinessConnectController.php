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
    // public $googlePlaces;
    
    // public function __construct()
    // {
    //     $this->googlePlaces = new PlacesApi('AIzaSyBBNjx6nv-hHqBNw2hkMqzxOhpmMeqRhDg');
    // }

    function authRedirect() {

        // Define the GMB scope
        $scopes = [
            'https://www.googleapis.com/auth/business.manage',
            'https://www.googleapis.com/auth/plus.business.manage',
            'https://www.googleapis.com/auth/plus.login',
            'https://www.googleapis.com/auth/plus.profile.emails.read'
            
        ];

        // Define any configs that overrride the /config/google.php defaults from pulkitjalan/google-apiclient
        $googleConfig = array_merge(config('google'),[
            'scopes' => 'https://www.googleapis.com/auth/business.manage',
            'redirect_uri' => config('app.callback_url').'/callback/google/mybusiness'
        ]);

        // Generate an auth request URL
        $googleClient = Google::getClient();
        $loginUrl = $googleClient->createAuthUrl();
        
        

        // Send user to Google for Authorisation
        return redirect()->away($loginUrl);
    }
    
    function getAccountName(Google $googleClient) {
        $gmb = new GoogleMyBusiness($googleClient);
        return $gmb->getAccountName();
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
