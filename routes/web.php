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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/walid', function () {
    $saluer = '<h2>bienvenue</h2>';
    return $saluer;
});

// // Route::get("/{chiffre}", function ($chiffre) {
// //     return view("welcome", compact("chiffre"));
// // });


// // Route::get("/{a}/{b}", function ($a,$b){
// //     return view("contact", compact("a","b"));
// // }


// );

route::get('/couleur/{z}',function($c){
    return view('couleur',compact('c'));

});