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


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();

Route::get('/home', 'match\HomeController@index')->name('home');


//////////--------/////////////////////////------/////////
Route::resource('/cup', 'country\countrycontroller');

Route::resource('/groups', 'group\groups'/*controller*/);

Route::resource('/matches', 'match\matches');



/////////////////////////////-------- ///////////////////////////////




