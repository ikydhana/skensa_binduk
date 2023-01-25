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
    return redirect('/admin');
});
Route::get('/privacy', function () {
    return \View::make("public.privacy");});

Route::get('/mapel', function () {
    return \View::make("public.mapel");});

Route::get('/mapel/export_excel', 'app\Http\Controllers\MapelController@export_excel');
Route::post('/mapel/import_excel', 'app\Http\Controllers\MapelController@import_excel');