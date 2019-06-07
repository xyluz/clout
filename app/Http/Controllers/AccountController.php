<?php

namespace App\Http\Controllers;

use App\Account\Models;
use Illuminate\Http\Request;
use App\Services\AccountService; 
use Alert;


class AccountController extends Controller
{
        /**
     * The service instance.
     * 
     * @var \App\Services\AccountService
    */
    protected $service;

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct(AccountService $service)
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
        return view('user.account');
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
          
         try{
            
             $this->service->create($request->all());
             alert()->success('Brand Profile Created', 'Success!');

            }catch(Exception $e){
                alert()->error($e, 'Error!');
            }

            return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function view($account)
    {
        $details = $this->service->details($account);
        
        return view('user.account-profile',compact('details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return $request->all();
    }

    public function contactEdit(Request $request){
        try{
            $this->service->editContactDetails($request->all());
            alert()->success('Brand contact details has been edited','Edit Successful');
        }catch(Exception $e){
            
            alert()->error($e,'Oops! Error');

        }
        return redirect()->back();

    }

    public function mainEdit(Request $request){
        
        $logo = $request->file('logo')->store('public');

        try{

            $this->service->editMainDetails($request->all(),$logo);
            alert()->success('Brand Details has been edited','Edit Successful');

        }catch(Exception $e){
            alert()->error($e,'Error');
        }
        return redirect()->back();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($account)
    {
        try{
            $this->service->delete($account);
            alert()->success('Brand Profile Deleted', 'Success!');
        }catch(Exception $c){
            alert()->error($c, 'Error!');
        }
        return redirect()->back();
    }
}
