<?php

namespace App;


//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
//use Laravel\Scout\Searchable;

class Post extends Model
{

    // Table Name
    protected $table = 'posts';

    // Primary Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    
    }

    
}

