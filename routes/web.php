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
    return view('welcome');
});

Route::get('/listings', function () {
    return view('/listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
            'id' => 1,
            'title' => 'Listing One',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe esse sint tempora commodi, odio reprehenderit voluptate tenetur, nemo ea quidem quasi pariatur facilis voluptas aliquid animi repellendus mollitia voluptates ad!',
            
            ],
            [
            'id' => 2,
            'title' => 'Listing Two',
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe esse sint tempora commodi, odio reprehenderit voluptate tenetur, nemo ea quidem quasi pariatur facilis voluptas aliquid animi repellendus mollitia voluptates ad!',
            
            ]
            ]
            ]);
});
