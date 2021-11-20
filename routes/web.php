<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\gurucontroller;

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

Route::get('/', [siswacontroller::class,'index'] );
Route::get('/siswa', [siswacontroller::class,'index'] );
Route::get('/guru', [gurucontroller::class,'index'] );
route::post('/siswa/create',[siswacontroller::class,'create']);
route::get('/siswa/{id}/edit',[siswacontroller::class,'edit']);
route::post('/siswa/{id}/update',[siswacontroller::class,'update']);
route::get('/siswa/{id}/delete',[siswacontroller::class,'delete']);