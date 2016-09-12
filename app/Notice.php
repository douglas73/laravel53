<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    
    protected $table = 'notices';

     public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description'
    ];
}
