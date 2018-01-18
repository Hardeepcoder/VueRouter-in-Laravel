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

Route::view('/', 'welcome',['name' => 'home']);
Route::view('laravel', 'front.laravel',['name' => 'Laravel']);
Route::view('reactNative', 'front.reactNative',['name' => 'React Native']);

Route::get('projects/{service}',function($service){
  return DB::table('projects')
  ->where('category', $service)->get();
});

Route::get('details', function(){
  return view('front.details', ['name' => 'laravel']);
});

Route::get('reactNative/code/details/{id}', function($id){
  return DB::table('projects')
  ->where('slug', $id)
  ->get();
});

Route::get('/details/{id}', function($id){
  return view('front.details');
});



Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
//user middleware
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

//admin middleware start
Route::group(['prefix' => 'admin', 'middleware'=> ['auth' => 'admin']], function () {
    Route::get('/','AdminController@index');
    Route::view('/addProject', 'admin.addProject');
    Route::post('submitProject', 'AdminController@submitProject');
  });
