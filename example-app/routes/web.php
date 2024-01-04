<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/my-folder', function () {


    $data = ['val_a' => 'Hello World'];
    $data ['val_b'] = 'laravel';

    return view('myfolder.mypage',$data);
});
Route::post('/my-rount', function (Request $req) {
    $data['myinput'] = $req->input('myinput');
    return view('myrount',$data);
});
Route::get('/my-controller', [MyController::class, 'index']);









