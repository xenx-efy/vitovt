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
    return view('home');
})->name('home');

Route::get('/appealOfPrince', function () {
    if (Request::cookie('posOnSite') >= 1) {
        return view('appealOfThePrince');
    }
    return response(view('appealOfThePrince'))->cookie('posOnSite', 2, 1234);
})->name('appealOfPrince');

Route::get('/mapOfBelarus', function () {
    if (Request::cookie('posOnSite') >= 2) {
        return view('mapOfBelarus');
    }
    return response(view('mapOfBelarus'))->cookie('posOnSite', 3, 1234);
})->name('mapOfBelarus');

Route::get('/legendOfGrodno', function () {
    if (Request::cookie('posOnSite') >= 3) {
        return view('legendOfGrodno');
    }
    return response(view('legendOfGrodno'))->cookie('posOnSite', 4, 1234);
})->name('legendOfGrodno');

Route::get('/legendOfLydaCastle', function () {
    if (Request::cookie('posOnSite') >= 4) {
        return view('legendOfLydaCastle');
    }
    return response(view('legendOfLydaCastle'))->cookie('posOnSite', 5, 1234);
})->name('legendOfLydaCastle');

Route::get('/legendOfMirCastle', function () {
    if (Request::cookie('posOnSite') >= 5) {
        return view('legendOfMirCastle');
    }
    return response(view('legendOfMirCastle'))->cookie('posOnSite', 6, 1234);
})->name('legendOfMirCastle');

Route::get('/legendOfRadzivil', function () {
    if (Request::cookie('posOnSite') >= 6) {
        return view('legendOfRadzivil');
    }
    return response(view('legendOfRadzivil'))->cookie('posOnSite', 7, 1234);
})->name('legendOfRadzivil');

Route::get('/prince', function () {
    if (Request::cookie('posOnSite') >= 7) {
        return view('prince');
    }
    return response(view('prince'))->cookie('posOnSite', 8, 1234);
})->name('prince');

Route::get('/endOfTravel', function () {
    if (Request::cookie('posOnSite') >= 8) {
        return view('endOfTravel');
    }
    return response(view('endOfTravel'))->cookie('posOnSite', 9, 1234);
})->name('endOfTravel');

Route::get('/letter', function () {
    if (Request::cookie('posOnSite') >= 9) {
        return view('letter');
    }
    return response(view('letter'))->cookie('posOnSite', 10, 1234);
})->name('letter');


Route::resource('form', 'FormController');

