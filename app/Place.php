<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //Table name
    protected $table = 'places';

    //Primary key
    public $primaryKey = 'id';

     //Timestamps
     public $timestamps = true;


    
}
