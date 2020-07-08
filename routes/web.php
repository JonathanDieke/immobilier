<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("immovable", function (){

    $immovables = \App\models\immovable::paginate(30);

    return view("immovable", compact('immovables'));
});

Route::get("client", function (){

    $clients = \App\models\client::paginate(30);

    return view("client", compact('clients'));
});

Route::get("employee", function (){

    $employees = \App\models\employee::paginate(30);

    return view("employee", compact('employees'));
});

Route::get("contract", function (){

    $contracts = \App\models\contract::paginate(30);

    return view("contract", compact('contracts'));
});



