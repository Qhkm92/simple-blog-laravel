<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
      

        return view('pages.index', [
            'title' => 'Welcome to Salam Vacation!',
            'header' => "Hallo",


        ]);
        // return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Welcome to about us lalalalala';
        $body = "seboklakau";
        //return view('pages.about');
        return view('pages.about')->with('title', $body);
    }

    public function services(){
        $data = array(
            'title' => 'Services' , 
            'services' => ['Web Design', 'SEO', 'Programming']
        );
        return view('pages.services')->with($data);
    }

}
