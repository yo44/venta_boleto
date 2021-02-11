<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tickets extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'hour_c',
        'user_id',
        'flights_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function flights(){
        return $this->belongsTo('App\Models\Flights');
    }

    public function tickets(){
        return $this->belongsTo('App\Models\Tickets');
    }
}
