<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => '/' , 'namespace' => 'Web'] , function (){
    Route::get('/' , ['as' => 'landingPage.index'  , 'uses' => 'LandingPageController@index']);
});






Route::group(['prefix' => '/admin' , 'namespace' => 'Dashboard' , 'as' => 'dashboard.'] , function (){

    Route::group(['prefix' => '/slider'  , 'as' => 'slider.'] , function (){
        Route::get('/' , ['as' => 'index'  , 'uses' => 'IndexController@index']);
        Route::get('/create' , ['as' => 'create' , 'uses' => 'SliderController@create']);
        Route::post('/store' , ['as' => 'store' , 'uses' => 'SliderController@store']);
        Route::get('/delete/{id}' , ['as' => 'delete' , 'uses' => 'SliderController@delete']);
    });

    Route::group(['prefix' => '/content-page'  , 'as' => 'content_page.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'PageContentController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'PageContentController@store']);

    });


});
