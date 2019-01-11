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

Route::get('aboutme/{me}','AboutmeController@index');


Route::get('/', function () {
    return view('homepage');
})->name('home');


Route::get('test', function () {
    $data = array('Joe', 'Carl', 'Benny');
    return $data;

});

Route::get('hello', function () {
    return 'Hello a neef';
});

Route::get('artikel/{nummer}', 'ArticleController@show')
    ->where('nummer','\d+')
    ->name('artikel.show');

Route::get('artikel/{naam}', function ($naam) {
    return "Hier is artikel met naam " . $naam;
})
    ->where('naam','([a-zA-Z\-])+')
    ->name('artikel.show_name');

Route::get('/contact', 'ContactController@contact');

Route::get('/mypage/{id}', 'MypageController@mypage');

Route::get('/photo-gallery','PhotoGalleryController@listPhotos')
    ->name('gallery.index');
Route::get('/photo-gallery/add-photo','PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo','PhotoGalleryController@savePhotoForm')
    ->name('gallery.save_photo');

