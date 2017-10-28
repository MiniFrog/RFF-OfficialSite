<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::get('activity/active', 'ActivityController@active');

    Route::group(['prefix' => 'article'], function () {
        Route::get('collect', 'ArticleController@work');
        Route::get('report', 'ArticleController@report');
        Route::get('details', 'ArticleController@reportDetail');
    });

    Route::group(['prefix' => 'about'], function () {
        Route::get('/association', 'IntroductionController@association');
        Route::get('/director', 'IntroductionController@director');
        Route::get('/department', 'IntroductionController@department');
        Route::get('/technical', 'IntroductionController@technical');
    });

    Route::group(['prefix' => 'home'], function () {
        Route::get('caro', 'HomeController@carouselFigure');
        Route::get('dynamic', 'HomeController@dynamicState');
    });

    /*Route::group(['prefix' => 'advise'], function() {
        Route::get('list', 'Reply@getReply');
        Route::post('send', 'Reply@postReply');
    })*/
});

Route::get('admin/login', 'AdminController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['adminAuth']], function () {

    Route::post('login', function () {
        return view('admin/main');
    });

    Route::post('upload', 'UploadFile@uploadImg');

    Route::group(['prefix' => 'publicity'], function () {
        Route::get('{page}', 'IntroductionController@adminPage');
        Route::post('department/update', 'IntroductionController@adminDepartmentUpdate');
        Route::post('director/update', 'IntroductionController@adminDirectorUpdate');
        Route::post('technical/update', 'IntroductionController@adminTechnicalUpdate');
        Route::post('association/update', 'IntroductionController@adminAssociationUpdate');
        Route::post('department/delete', 'IntroductionController@adminDepartmentDelete');
        Route::post('technical/delete', 'IntroductionController@adminTechnicalDelete');
        Route::post('director/delete', 'IntroductionController@adminDirectorDelete');
    });

    Route::group(['prefix' => 'dynamic'], function() {
        Route::get('activity', 'ActivityController@showList');
        Route::post('activity/changeStatus/{id}/{status}', 'ActivityController@changeStatus');
        Route::post('activity/delete', 'ActivityController@delete');
        Route::get('activity/create', 'ActivityController@create');
        Route::get('activity/modify/{id}', 'ActivityController@modify');
        Route::post('activity/update', 'ActivityController@update');

        Route::get('{page}', 'ArticleController@adminPage');
        Route::post('report/delete', 'ArticleController@reportDelete');
        Route::get('report/create', 'ArticleController@reportCreate');
        Route::get('report/modify/{id}', 'ArticleController@reportModify');
        Route::post('report/update', 'ArticleController@reportUpdate');
        Route::post('report/changeStatus/{id}/{status}', 'ArticleController@reportChangeStatus');

        Route::post('work/delete', 'ArticleController@workDelete');
        Route::get('work/create', 'ArticleController@workCreate');
        Route::get('work/modify/{id}', 'ArticleController@workModify');
        Route::post('work/update', 'ArticleController@workUpdate');

    });

    Route::group(['prefix' => 'home'], function () {
        Route::get('carousel', 'HomeController@adminCarouselFigure');
        Route::post('carousel/update', 'HomeController@carouselFigureUpdate');

        Route::get('dynamic', 'HomeController@adminHomeDynamic');
        Route::post('dynamic/update', 'HomeController@homeDynamicUpdate');
        Route::post('dynamic/delete', 'HomeController@homeDynamicDelete');
    });

});

Route::get('/', function () {
    return view('index');
});

Route::post('/', 'Competition@register');