<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    //

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'value'
    ];
}