<?php

use App\Models\Trailer;
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
    Route::get('/video-topics'  , ['as' => 'videos.index' , 'uses' => 'YoutubeController@index']);
    Route::get('/podcasts'  , ['as' => 'spotify.index' , 'uses' => 'SpotifyController@index']);
    Route::get('/twitter'  , ['as' => 'twitter.index' , 'uses' => 'TwitterController@index']);


    Route::group(['prefix' => '/topic' , 'as' => 'topic.'] , function (){
        Route::get('/{slug}' , ['as' => 'index'  , 'uses' => 'TopicController@index']);
        Route::get('/twitter/{slug}' , ['as' => 'twitter.index'  , 'uses' => 'TopicController@twitter']);

    });

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

    Route::group(['prefix' => '/volunteer'  , 'as' => 'volunteer.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'VolunteerController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'VolunteerController@store']);
    });

       Route::group(['prefix' => '/footer-social-links'  , 'as' => 'footer_social_links.'] , function (){
           Route::get('/create' , ['as' => 'create'  , 'uses' => 'FooterLinksController@create']);
           Route::post('/store' , ['as' => 'store'  , 'uses' => 'FooterLinksController@store']);
           Route::get('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'FooterLinksController@delete']);
       });


    Route::group(['prefix' => '/trailer'  , 'as' => 'trailer.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'TrailerController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TrailerController@store']);
//        Route::get('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'TrailerController@delete']);
    });

    Route::group(['prefix' => '/topic'  , 'as' => 'topic.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'TopicController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TopicController@store']);
//        Route::get('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'TopicController@delete']);
    });

    Route::group(['prefix' => '/iframe'  , 'as' => 'iframe.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'IframeController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'IframeController@store']);

    });

    Route::group(['prefix' => '/gestes'  , 'as' => 'gestes.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'GuestController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'GuestController@store']);

    });

    Route::group(['prefix' => '/trailer-links'  , 'as' => 'trailerLinks.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'TrailerLinkController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TrailerLinkController@store']);

    });

});


//Route::get('/test' , function (){
//    $trailer = Trailer::limit(5)->get();
//   return $topic   = $trailer->find(1)->topic;
//
//});
