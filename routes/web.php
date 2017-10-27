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
    // return view('pages.front-end.beranda');
    return view('pages.front-end.layouts.template1');
});
Route::get('/tentangkami', function () {
    return view('pages.front-end.tentangkami');
});
Route::get('/hubungikami', function () {
    return view('pages.front-end.hubungikami');
});

Route::resource('/message', 'MessageController');

// Route::post('/register/pemulung', 'PemulungController@register');
// Route::post('/register/customer', 'CustomerController@register');
Route::get('/register/verify/email/{code}', 'EmailVerificationController@verify')->name('verify');

Route::group(['middleware' => 'auth'], function () {
	Route::group(['middleware' => 'admin'], function () {
		Route::get('home', 'HomeController@index');
	});
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
