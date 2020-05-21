<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = true;

    /**
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'client_id', 'started_at', 'remarks', 'priority', 'is_completed',
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
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
