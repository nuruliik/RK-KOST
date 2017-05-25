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
    return view('pages.index');
});

Route::get('/login', function () {
    return view('pages.login');
});

Route::get('/soal', function () {
    return view('pages.listSoal');
});

Route::get('/soal/create', function () {
    return view('pages.createSoal');
});

Route::get('/soal/do', function () {
    return view('pages.doSoal');
});

Route::get('/peringkat', function () {
    return view('pages.peringkat');
});

Route::get('/profil', function () {
    return view('pages.profil');
});