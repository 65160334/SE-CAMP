<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\C_titles;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|ar
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-folder', function () {



    $data ['val_b'] = 'laravel';

    return view('myfolder.mypage',$data);
});
Route::post('/my-rount', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myrount',$data);
});
Route::get('/my-controller', [MyController::class, 'index']);

Route::resource('titles', C_titles::class);









