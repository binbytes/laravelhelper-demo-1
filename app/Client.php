<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use Notifiable;

    public $timestamps = true;

    /**
     * @var string
     */
    protected $table = 'clients';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'company_name', 'avatar', 'address', 'city', 'country', 'dob', 'mobile_no', 'linkedin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    

    /**
    * @return \Illuminate\Database\Eloquent\Relations\hasMany
    */
    public function projects()
    {
        return $this->hasMany(Project::class, 'client_id');
    }
}
