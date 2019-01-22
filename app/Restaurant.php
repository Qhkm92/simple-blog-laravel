<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //Table name
    protected $table = 'restaurants';
        
    //Primary key
    public $primaryKey = 'id';
        
    //Timestamps
    public $timestamps = true;

}
