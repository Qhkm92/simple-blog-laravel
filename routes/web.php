<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\User;
use Illuminate\Support\Facades\Input;

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');

Route::resource('places', 'PlacesController');

Route::resource('/products', 'ProductController');

Route::resource('restaurants', 'RestaurantsController');

Route::get('/cari', 'CariController@cari');



//Seach functionalities






Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/search/{query}', 'HomeController@search');


// Add activation function for new registration

Route::get('account/activate/{token}', 'Auth\ActivationController@activate')->name('account.activate');

Route::get('account/activation/request', 'Auth\ActivationController@request')->name('account.activation.request');

Route::post('account/resend/activation','Auth\ActivationController@resend')->name('account.activation.resend');

//Route to receive Posts model json file 

Route::get('/api', 'ApiController@index');

Route::get('/api/movie_list', 'MovieController@index');


/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h2>Hello World</h2>'; 
    
Route::get('/users/{id}/{name}', function($id, $name) {
return 'This is user '.$name. 'with an' .$id;

Route::get('/about', function() {
    return view('pages/about');
});
});
});*/





