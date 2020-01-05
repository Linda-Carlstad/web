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

//Auth::routes( [ 'verify' => true ] );

Route::get( 'integritetspolicy', function ()
{
    return view( 'policy' );
})->name( 'policy' );

Route::get( 'dokument', function ()
{
    return view( 'document' );
})->name( 'document' );

Route::get( 'ny-medlem', function ()
{
    return view( 'new-member' );
})->name( 'new-member' );

Route::get( 'support', function()
{
    return view( 'support' );
} )->name( 'support' );


Route::get( 'kontakt', function()
{
    return view( 'contact' );
})->name( 'contact' );

Route::get( 'it-kommitte', function()
{
    return view( 'it-committee' );
})->name( 'it' );

Route::get( 'sittning', function()
{
    return view( 'sitting' );
})->name( 'sitting' );

Route::get( 'terminal', function()
{
    return view( 'terminal' );
})->name( 'terminal' );

Route::get( 'program', function()
{
    return view( 'programs.index' );
})->name( 'programs' );

Route::get( 'program/högskoleingenjör-i-datateknik', function()
{
    return view( 'programs.data' );
})->name( 'data' );

Route::get( 'program/it-design-affärssystem-och-ekonomi', function()
{
    return view( 'programs.business' );
})->name( 'business' );

Route::get( 'program/it-design-systemdesign', function()
{
    return view( 'programs.system' );
})->name( 'system' );

Route::get( 'program/kandidatprogram-i-datavetenskap', function()
{
    return view( 'programs.candidate' );
})->name( 'candidate' );

Route::get( 'program/webbutvecklare', function()
{
    return view( 'programs.webb' );
})->name( 'webb' );

Route::get( 'program/master/masterprogram-i-datavetenskap', function()
{
    return view( 'programs.master.data' );
})->name( 'master.data' );

Route::get( 'program/master/masterprogram-i-informatik', function()
{
    return view( 'programs.master.info' );
})->name( 'master.info' );

Route::get( 'program/civilingenjör-i-datateknik', function()
{
    return view( 'programs.civil' );
})->name( 'civil' );

/* Email */
Route::get( 'verifiering-profil', 'VerifyUser' );
Route::get( 'verifiering-email', 'VerifyNewEmail' );

/* Kontaktformulär */
Route::post( '/contactForm', 'ContactForm' );

/* Hämtar data */
Route::get( '/', 'FetchIndexView' );
Route::get( 'nyheter', 'FetchFacebookPosts' )->name( 'news' );
Route::get( 'tentor', 'ExamController@index' )->name( 'tentor' );
Route::get( 'föreningen', 'FetchBoardMembers' )->name( 'about' );

Route::get( '/föreningar', 'AssociationController@index' )->name( 'association' );
Route::get( '/föreningar/{slug}', 'AssociationController@show' )->name( 'association.show' );

Route::get( 'nollning', 'InitiationController@index' )->name( 'initiation' );
Route::get( 'nollning/{year}', 'InitiationController@show' )->name( 'initiation.show' );
Route::get( 'nollning/{year}/{slug}', 'InitiationController@day' )->name( 'initiation.day.show' );

Route::get( 'sånger/port', 'SongController@gate' )->name( 'song.gate' );
Route::get( 'sånger/hemliga', 'SongController@secret' )->name( 'song.secret' );
Route::get( 'sånger', 'SongController@index' )->name( 'song' );
Route::get( 'sånger/{slug}', 'SongController@show' )->name( 'song.show' );

Route::get( 'samarbetspartner', 'PartnerController@index' )->name( 'partner' );
Route::get( 'samarbetspartner/{slug}', 'PartnerController@show' )->name( 'partner.show' );


Route::group( [ 'middleware' => 'verified' ], function ()
{
    Route::get( 'profil', 'UserController@edit' )->name( 'profile' );

    Route::resources( [
        'user' => 'UserController',
        'exam' => 'ExamController',
    ] );
} );
