<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductControllerAdmin;
use App\Http\Controllers\User\ControllerUser;
use App\Http\Controllers\AuthenticationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('post-login', [AuthenticationController::class, 'postLogin'])->name('postLogin');
Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('register', [AuthenticationController::class, 'register'])->name('register');
Route::post('post-register', [AuthenticationController::class, 'postRegister'])->name('postRegister');


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'checkAdmin'
], function(){
    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        Route::get('/', [ProductControllerAdmin::class, 'listProductAdmin'])->name('listProductAdmin');
    });
});

Route::group([
    'prefix' => 'user',
    'as' => 'user.'
], function(){
    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        Route::get('/', [ControllerUser::class, 'listProductUser'])->name('listProductUser');
    });
});
