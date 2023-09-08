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
Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/','Home@homepage')->name('home');
Route::get('/about-us','Home@about')->name('about');
Route::get('/scrap-collection','Home@scrap')->name('scrap');
Route::get('/demolishing','Home@demolishing')->name('demolishing');
Route::get('/interior-design','Home@interior')->name('interior');
Route::get('/aluminium-fabrication','Home@aluminium')->name('aluminium');
Route::get('/roofing','Home@roofing')->name('roofing');
Route::get('/gallery','Home@gallery')->name('gallery');
Route::get('/contact','Home@contact')->name('contact');
Route::get('/test','Home@test')->name('test');


Route::post('submit-contact/', 'ContactController@submit' )->name('csubmit');
Route::get('/api-test','ContactController@index')->name('api-test');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
