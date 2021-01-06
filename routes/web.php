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

Route::get('/coba', function() {
    return view('master');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', 'ArtikelController@show');
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/detail/{id}', 'ArtikelController@detail');
Route::get('/admin', 'ArtikelController@show_by_admin');
Route::get('/edit/{id}', 'ArtikelController@edit');
Route::post('/edit_process', 'ArtikelController@edit_process');
Route::get('/delete/{id}', 'ArtikelController@delete');

//khusus untuk pdf ddan excel
Route::get('/test-dompdf',function(){

    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>ASSALAMUALAIKUM WR WB Nama Saya Achmad fadli Iskandar Dari Kelas 11 RPL 2 Di SMK TARUNA BHAKTI DEPOK</h1>');
    return $pdf->stream();

});

Route::get('test-excel','PostController@export');

Route::get('/test-dompdf-2','PdfController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
