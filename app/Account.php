<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $timestamps = true;

    /**
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'bank_name', 'account_number', 'name_on_account', 'branch_of', 'address', 'ifsc_code', 'contact_number', 'statement_starting_line',
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
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
