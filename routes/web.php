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
Auth::routes( [ 'verify' => true ] );

Route::get( '/', function ()
{
    return view( 'index' );
});

Route::get( 'om-föreningen', function ()
{
    return view( 'about' );
})->name( 'about' );

Route::get( 'kalender', function ()
{
    return view( 'calendar' );
})->name( 'calendar' );

Route::get( 'integritetspolicy', function ()
{
    return view( 'policy' );
})->name( 'policy' );


Route::get( 'dokument', function ()
{
    return view( 'document' );
})->name( 'document' );


Route::get( 'evenemang', function ()
{
    return view( 'events' );
})->name( 'events' );


Route::get( 'ny-medlem', function ()
{
    return view( 'new-member' );
})->name( 'new-member' );


Route::get( 'support', function()
{
    return view( 'support' );
} )->name( 'support' );

Route::get( 'hemlighet', function ()
{
    return view( 'secret' );
})->name( 'secret' );

Route::get( 'webbshop', function ()
{
    return view( 'store' );
})->name( 'store' );

Route::get( 'whoops', function ()
{
    return view( 'whoops' );
});

Route::get( 'kontakt', function()
{
    return view( 'contact' );
})->name( 'contact' );

Route::get( 'nollning/schema', function()
{
    return view( 'initiation.schedule' );
})->name( 'schedule' );

Route::get( 'nollning/regler', function()
{
    return view( 'initiation.rules' );
})->name( 'rules' );

Route::get( 'program', function()
{
    return view( 'programs.index' );
})->name( 'programs' );

Route::get( 'högskoleingenjör-i-datateknik', function()
{
    return view( 'programs.data' );
})->name( 'data' );

Route::get( 'it-design-affärssystem-och-ekonomi', function()
{
    return view( 'programs.business' );
})->name( 'business' );

Route::get( 'it-design-systemdesign', function()
{
    return view( 'programs.system' );
})->name( 'system' );

Route::get( 'kandidatprogram-i-datavetenskap', function()
{
    return view( 'programs.candidate' );
})->name( 'candidate' );

Route::get( 'webbutvecklare', function()
{
    return view( 'programs.webb' );
})->name( 'webb' );

Route::get( 'masterprogram-i-datavetenskap', function()
{
    return view( 'programs.master.data' );
})->name( 'master.data' );

Route::get( 'masterprogram-i-informatik', function()
{
    return view( 'programs.master.info' );
})->name( 'master.info' );

Route::get( 'verifiering-profil', 'VerifyUser' );
Route::get( 'verifiering-email', 'VerifyNewEmail' );

Route::group( [ 'middleware' => 'verified' ], function ()
{
    Route::get( 'profil', 'UserController@edit' )->name( 'profile' );

    Route::resources( [
        'user' => 'UserController',
        'exam' => 'ExamController',
    ] );
} );

Route::post( '/contactForm', 'ContactForm' );
Route::get( 'nyheter', 'FetchFacebookPosts' )->name( 'news' );
Route::get( 'nollning', 'FetchBlogPosts' )->name( 'initiation' );
Route::get( 'tentor', 'ExamController@index' )->name( 'tentor' );
