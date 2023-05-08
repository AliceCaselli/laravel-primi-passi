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

Route::get('/', function () {
    $links = [
        'about',
        'contacts',
        'faq',
    ];
    return view('home', compact('links'));
});

Route::get('/about', function () {
    $name = 'Alice';
    return view('about', compact('name'));
});

Route::get('/contacts', function () {
    $address = 'via del codice, 30';
    $phone = '333-3366990';
    $location = 'Città';
    return view('contacts', compact('address', 'phone', 'location'));
});

Route::get('/faq', function () {
    return view('faq');
});
