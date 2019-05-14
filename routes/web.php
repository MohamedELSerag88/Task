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

Route::group(['prefix' => LaravelLocalization::setLocale(),
'middleware' => ['localize','localizationRedirect','localeSessionRedirect','localeViewPath'], 
], function()
{
	Route::get('/','HomeController@index');
	Route::get('/home','HomeController@index');
});
Route::group([  'prefix' => LaravelLocalization::setLocale(),
                'middleware' => ['web','auth','localize','localizationRedirect','localeSessionRedirect','localeViewPath']], 
    function()
    {
        Route::get('myproducts','ProductController@myproduct');
        Route::get('orderproduct/{id}','ProductController@orderproduct');
        Route::get('myorders','UserController@myorders');
        Route::get('orderdelete/{id}','OrderController@destroy');
        Route::get('productdelete/{id}','ProductController@destroy');
        Route::resource('/products','ProductController');
        Route::resource('/users','UserController');
    });



Auth::routes();

