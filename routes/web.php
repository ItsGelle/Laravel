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
    return view('homepage');
})->name('home');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/historie', function() {
    return view('historie');
});

Route::get('/spelers', function() {
    return view('spelers');
});

Route::get('/agenda', function() {
    return view('agenda');
});

ROute::get('/handleForm-registration', 'RegistrationController@handleForm');

Route::get('/artikel/{nummer}', 'ArticleController@show')
->where('nummer', '\d+')
  ->name('artikel.show')
;

Route::get('/photo-gallery','PhotoGalleryController@listPhotos')->name('gallery.index');
Route::get('/photo-gallery/add-photo','PhotoGalleryController@showPhotoForm')->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo','PhotoGalleryController@savePhotoForm')->name('gallery.save_photo');




