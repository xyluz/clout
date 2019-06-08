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
}
