<?php

use App\Models\Trailer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\LandingPageLink;
use Illuminate\Support\Facades\Hash;

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


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/search' , ['as' => 'trailer.search' , 'uses' => 'Dashboard\TrailerController@search']);


Route::group(['prefix' => '/' , 'namespace' => 'Web'] , function (){
    Route::get('/' , ['as' => 'landingPage.index'  , 'uses' => 'LandingPageController@index']);
    Route::get('/video-topics'  , ['as' => 'videos.index' , 'uses' => 'YoutubeController@index']);
    Route::get('/podcasts'  , ['as' => 'spotify.index' , 'uses' => 'SpotifyController@index']);
    Route::get('/twitter'  , ['as' => 'twitter.index' , 'uses' => 'TwitterController@index']);
    Route::get('/coming-to-pittsburgh-coffee'  , ['as' => 'coming.index' , 'uses' => 'ComingController@index']);
    Route::get('/download'  , ['as' => 'coming.getFile' , 'uses' => 'ComingController@getFile']);


    Route::group(['prefix' => '/topic' , 'as' => 'topic.'] , function (){
        Route::get('/{slug}' , ['as' => 'index'  , 'uses' => 'TopicController@index']);

    });

});






Route::group(['prefix' => '/admin' , 'namespace' => 'Dashboard' , 'as' => 'dashboard.' , 'middleware' => 'auth'] , function (){
    Route::get('/' , ['as' => 'dashboard.index' , 'uses' => 'IndexController@index']);

    Route::group(['prefix' => '/slider'  , 'as' => 'slider.'] , function (){
        Route::get('/' , ['as' => 'index'  , 'uses' => 'IndexController@index']);
        Route::get('/create' , ['as' => 'create' , 'uses' => 'SliderController@create']);
        Route::post('/store' , ['as' => 'store' , 'uses' => 'SliderController@store']);
        Route::post('/delete' , ['as' => 'delete' , 'uses' => 'SliderController@delete']);
        Route::post('/update' , ['as' => 'update' , 'uses' => 'SliderController@update']);
    });

    Route::group(['prefix' => '/content-page'  , 'as' => 'content_page.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'PageContentController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'PageContentController@store']);
    });

    Route::group(['prefix' => '/volunteer'  , 'as' => 'volunteer.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'VolunteerController@create']);
        Route::post('/store' , ['as' => 'store'   , 'uses' => 'VolunteerController@store']);
        Route::post('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'VolunteerController@delete']);
        Route::post('/update/{id}' , ['as' => 'update'  , 'uses' => 'VolunteerController@update']);
        Route::post('/sort/{id}' , ['as' => 'sort'  , 'uses' => 'VolunteerController@sort']);
    });

       Route::group(['prefix' => '/footer-social-links'  , 'as' => 'footer_social_links.'] , function (){
           Route::get('/create' , ['as' => 'create'  , 'uses' => 'FooterLinksController@create']);
           Route::post('/store' , ['as' => 'store'  , 'uses' => 'FooterLinksController@store']);
           Route::get('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'FooterLinksController@delete']);
       });


    Route::group(['prefix' => '/trailer'  , 'as' => 'trailer.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'TrailerController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TrailerController@store']);
        Route::delete('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'TrailerController@delete']);
        Route::get('/get-all-trailer' , ['as' => 'get'  , 'uses' => 'TrailerController@getAllTrailers']);
        Route::post('/active/{id}' , ['as' => 'active'  , 'uses' => 'TrailerController@active']);
        Route::post('/update/topic' , ['as' => 'update.topic'  , 'uses' => 'TrailerController@updateTopic']);
        Route::post('/update/trailer' , ['as' => 'update.trailer'  , 'uses' => 'TrailerController@updateTrailer']);
        Route::post('/update/trailer/title' , ['as' => 'update.trailer.title'  , 'uses' => 'TrailerController@updateTrailerTitle']);
    });

    Route::group(['prefix' => '/topic'  , 'as' => 'topic.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'TopicController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TopicController@store']);
//        Route::get('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'TopicController@delete']);
    });

    Route::group(['prefix' => '/iframe'  , 'as' => 'iframe.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'IframeController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'IframeController@store']);
        Route::post('/update' , ['as' => 'update' , 'uses' => 'IframeController@update']);

    });

    Route::group(['prefix' => '/gestes'  , 'as' => 'gestes.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'GuestController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'GuestController@store']);

    });

    Route::group(['prefix' => '/trailer-links'  , 'as' => 'trailerLinks.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'TrailerLinkController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TrailerLinkController@store']);
    });

    Route::group(['prefix' => '/title'  , 'as' => 'title.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'TitleController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'TitleController@store']);

    });

    Route::group(['prefix' => '/guide'  , 'as' => 'guide.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'GuideController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'GuideController@store']);

    });

    Route::group(['prefix' => '/images'  , 'as' => 'img.'] , function (){
        Route::get('/create/{trailer_id}' , ['as' => 'create'  , 'uses' => 'ImgeController@create']);
        Route::post('/store/' , ['as' => 'store'  , 'uses' => 'ImgeController@store']);
    });

    Route::group(['prefix' => '/contact'  , 'as' => 'contact.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'ContactController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'ContactController@store']);
    });

    Route::group(['prefix' => '/success'  , 'as' => 'success.'] , function (){
        Route::get('/create' , ['as' => 'create'  , 'uses' => 'SuccessController@create']);
        Route::post('/store' , ['as' => 'store'  , 'uses' => 'SuccessController@store']);
        Route::post('/delete/{id}' , ['as' => 'delete'  , 'uses' => 'SuccessController@destroy']);
        Route::post('/update/{id}' , ['as' => 'update'  , 'uses' => 'SuccessController@update']);
        Route::post('/sort/{id}' , ['as' => 'sort'  , 'uses' => 'SuccessController@sort']);
    });

    Route::group(['prefix' => '/update'  , 'as' => 'update.'] , function (){
        Route::get('/index/links/{id}' , ['as'  => 'index.links' , 'uses' => 'UpdateTopicController@indexLinks']);
        Route::get('/index/guests/{id}' , ['as'  => 'index.guests' , 'uses' => 'UpdateTopicController@indexGuests']);
        Route::get('/index/img/{id}' , ['as'  => 'index.img' , 'uses' => 'UpdateTopicController@indexImg']);


        Route::post('/update/links' , ['as'  => 'update.links' , 'uses' => 'UpdateTopicController@updateLinks']);
        Route::post('/update/guests' , ['as'  => 'update.guests' , 'uses' => 'UpdateTopicController@updateGuests']);
        Route::post('/update/img' , ['as'  => 'update.img' , 'uses' => 'UpdateTopicController@updateImg']);


    });


});

Route::post('/send-mail' , 'EmailController@store')->name('send.mail');
