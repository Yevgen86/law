<?php

use Illuminate\Http\Request;
use App\Contact;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function(){
    // Fetch Contacts
    Route::get('contacts', function(){
        return Contact::latest()->orderBy('created_at', 'desc')->get();
    });


    // Add Contact
    Route::post('contact/store', function(Request $request){
        return Contact::create(['firstname' => $request->input(['firstname']), 'lastname' => $request->input(['lastname']), 'email' => $request->input(['email']), 'phone' => $request->input(['phone']), 'thema' => $request->input(['thema']),'rechtsschutz' => $request->input(['rechtsschutz']), 'rechtsvertretung' => $request->input(['rechtsvertretung'])]);
    });

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

