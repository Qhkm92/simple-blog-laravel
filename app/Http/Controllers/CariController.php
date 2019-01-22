<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class CariController extends Controller
{
    public function cari()
    {
    	// return Post::orderBy('id', 'desc')->get();
    	return DB::table('users')->get();
    }
}
