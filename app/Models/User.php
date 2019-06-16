<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

use App\Models\Account;
use App\Models\Profile;
use App\Models\Transaction;
use App\Models\Purchase;
use App\Models\PageVisits;
use App\Models\Campaign;
use App\Models\Presenter;


class User extends Authenticatable
{
    use Notifiable, HasRoles;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'account_type','referral_code'
    ];

    public $count = 0;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function accounts(){
        return $this->hasMany(Account::class);
    }

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    } 

    public function purchases(){
        return $this->hasMany(Purchase::class);
    }
 
    public function campaigns(){
        return $this->hasMany(Campaign::class);
    }

    public function allCampaigns(){
        return Campaign::whereNotNull('id');
    }

    public function allUsers(){
        return User::all();
    }

    public function allTransactions(){
        return Transaction::all();
    }

    public function recentTransactions(){
        return Transaction::whereNotNull('id')->limit('5');
    }

    public function recentPurchases(){

        return Purchase::whereNotNull('id')->limit('5');

    }

    public function pageVisits(){

        return $this->hasMany(PageVisits::class);

    }

    public function plays(){

        return $this->campaigns()->sum('total_played');

    }

    public function pendingPlays(){
        return $this->totalAvailablePlays();
        $cal = $this->totalAvailablePlays() - $this->plays();
        return $cal > 0 ? $cal : 0;
    }

    public function totalAvailablePlays(){
                      
        foreach($this->purchases() as $item){
            $this->count =  2;
        }

        return $this->count;
    }

    public function refcode(){
        return $this->hasMany(Presenter::class);       
    }

    public function commission(){
        return Ref::where('presenter_id',$this->id);
    }

    public function isReferred(){
        return Ref::where('user_id',$this->id)->count();
    }

}
