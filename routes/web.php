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
/*Route::group(['namespace'=>'Admin','prefix'=>'admin'],function(){

    Route::ressources('posts','PostsController');
});
*/
Route::get('/', function () {


    return view('welcome');
});

Route::get('/sign ', function () {
    return view('enregist');
});
Route::get('/accueill ', function () {
    return view('welcome');
});

Route::get('/admin ','AdminController@index');
Route::get('/enregist ','SessionController@index');
Route::post('/enregist','SessionController@stor');
Route::get('/contact','ContactController@newContact');
Route::get('/listecontact','ContactController@listContacts');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/noscircuits','CircuitsController@listcircuits')->name('noscircuits');
Route::get('/contactus','ContactController@contactUs')->name('contactus');
Route::get('/priseencharge','PrisenchargeController@priseencharge')->name('priseencharge');
Route::get('/offres','OffresspController@offres')->name('offres');
