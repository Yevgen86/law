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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/ueberUns', 'frontend.ueberuns')->name('ueberUns');
Route::view('/leistungen', 'frontend.leistungen')->name('leistungen');
Route::view('/kontakt', 'frontend.kontakt')->name('kontakt');
Route::view('/impressum', 'frontend.impressum')->name('impressum');


Route::group(['middleware' => 'auth'], function () {

// Lawyer == Admin Navigation routes group
/*    Route::group(["middleware" => [

        'hasPermission:show-clients',
        'hasPermission:enter-appointments',
        'hasPermission:list-appointments',
        'hasPermission:confirm-appointments',
        'hasPermission:manage-request',
        'hasPermission:client-update-delete',
        'hasPermission:clients-documents',

        ]], function () {*/

        /*Route::get('lawyer', 'LawyerController@index')->name('lawyer');*/

        Route::get('clients', 'ClientController@index')->name('clients');
        Route::get('clients/newClient', 'ClientController@showNewClient')->name('newClient');
        Route::post('clients/addClient', 'ClientController@addClient')->name('addClient');
        Route::get('/client/{id}/delete', 'ClientController@destroy');
        Route::get('clients/{id}', 'ClientController@show')->name('client');
        Route::put('clients/{id}', 'ClientController@update');
        Route::post('clients/{id}', 'DocumentationController@store');
        Route::get('clients/doc/{id}', 'DocumentationController@destroy')->name('delete_doc');
        Route::get('appointments', 'AppointmentController@index')->name('appointments');
        Route::get('requests', 'RequestController@index')->name('requests');

    /*});*/


// Client own page Navigation routes group
    Route::group(["middleware" => [

        'hasPermission:reserve-appointment',
        'hasPermission:cancel-appointment',
        'hasPermission:show-my-appointment',

    ]], function () {

    Route::get('single', 'ClientController@profile')->name('profile');
    Route::get('single/{id}/doc', 'DocumentationController@show');
    Route::get('single/{id}/profile', 'ClientController@showprofile');
    Route::put('single/{id}/profile', 'ClientController@update');


    });
});
