<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("sale", function (){

    $immovables = \App\models\immovable::paginate(30);

    return view("sale", compact('immovables'));
});



