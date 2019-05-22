<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = true;

    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'dob', 'mobile_no', 'avatar', 'address',  'skype', 'slack', 'trello', 'linkedin', 'remarks',
        'base_salary', 'joining_date', 'leaving_date', 'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'email_verified_at', 'password', 'remember_token',
    ];

    

    /**
    * @return \Illuminate\Database\Eloquent\Relations\hasMany
    */
    public function accounts()
    {
        return $this->hasMany(Account::class, 'user_id');
    }
}
