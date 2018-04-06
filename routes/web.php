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

//Route group, to colocate prefix for language
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'localize']
],
function()
{
//Route without prefix for users views 

    Route::group([
        'prefix' => ''
    ], 
        function()
    {

        Route::get('/', function () {
            return view('welcome2');
        });

        Route::get(LaravelLocalization::transRoute('routes.welcome'), function () {
            return view('welcome2');
        })->name('welcome');

        Route::get(LaravelLocalization::transRoute('routes.login'), 'Auth\LoginController@showLoginForm')->name('login');
        Route::post(LaravelLocalization::transRoute('routes.login'), 'Auth\LoginController@login');
        Route::post(LaravelLocalization::transRoute('routes.logout'), 'Auth\LoginController@logout')->name('logout');

        Route::get(LaravelLocalization::transRoute('routes.register'), 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post(LaravelLocalization::transRoute('routes.register'), 'Auth\RegisterController@register');


        Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
        Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

//        Auth::routes();
        // rutas generadas por Auth::routes()
        //        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        //        Route::post('login', 'Auth\LoginController@login');
        //        Route::post('logout', 'Auth\LoginController@logout')->name('logout');

                // Registration Routes...
        //       Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        //        Route::post('register', 'Auth\RegisterController@register');

                // Password Reset Routes...
                Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
                Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkUsername')->name('password.email');
                Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
                Route::post('password/reset', 'Auth\ResetPasswordController@reset');
            

        Route::get(LaravelLocalization::transRoute('routes.home'), 'HomeController@index')->name('home');


        /*
        Route::get('notes/{note}/{slug?}',function($note, $slug=null){
        	dd($note,$slug);
        })->where('note','[0-9]+')
        */

    //temporales

        Route::get('/layout', function () {
            return view('layout');
        });

    });    

// Route with prefix admin for administrators of courts
    Route::group([
        'prefix' => 'admin'
    ], 
        function()
    {

    });   

});