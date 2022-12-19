<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login',[UserController::class, 'loginView'])->name('login');
Route::post('/login',[UserController::class, 'loginPost']);

Route::get('/register', [UserController::class, 'registerView'])->name('register');
Route::post('/register', [UserController::class, 'registerPost']);
Route::get('', [MainController::class, 'mainView'])->name('/');
Route::middleware('role:client,admin')->group(function (){
    Route::middleware('role:admin')->group(function (){
        Route::get('admin', [AdminController::class, 'adminView'])->name('admin');
        Route::get('admin/addvote', [AdminController::class, 'addVoteView'])->name('addVote');
        Route::post('admin/addvote', [AdminController::class, 'addVotePost']);
        Route::post('admin/deletevote{vote}', [AdminController::class, 'deleteVotePost'])->name('deleteVote');
    });

    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});
Route::middleware('auth')->group(function (){
    Route::get('showvote/{vote}', [MainController::class, 'showVote'])->name('showVote');
    Route::post('addvote1/{vote}{answer1}', [MainController::class, 'addCountVote1'])->name('addCountVote1');
    Route::post('addvote2/{vote}{answer2}', [MainController::class, 'addCountVote2'])->name('addCountVote2');
});
Route::get('warning', [UserController::class, 'warningView'])->name('warning');
