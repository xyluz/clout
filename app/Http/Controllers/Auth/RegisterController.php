<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\Ref;
use App\Models\Presenter;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string 
     */
    protected $redirectTo = '/u';

    /** 
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'account_type' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'account_type' => $data['account_type'],
            'password' => Hash::make($data['password']),
        ]);

        //add referral if it exists

        if($data['referral_code']){
            
            $presenter_id = Presenter::where('referral_code',$data['referral_code'])->first()['id'];
            
            Ref::create([
                'user_id'=>$user->id,
                'presenter_id'=>$presenter_id
            ]);

        }

        //TODO:send email

        Mail::to($user)->queue(new WelcomeMail($user));
      
        //assign role
        $user->assignRole('user');

        return $user;
    }
}
