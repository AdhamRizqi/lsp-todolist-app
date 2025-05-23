<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


// Route halaman tentang
Route::get('/tentang', function () {
    return view('tentang', [
        "title" => "tentang"
    ]);
});

// Route halaman kurikulum

Route::get('/test', function () {
    return view('test', [
        "title" => "test"
    ]);
});

Route::get('/todolist', [TaskController::class, 'index']);
Route::post('/store', [TaskController::class, 'store']);
Route::post('/toggle', [TaskController::class, 'toggle']);
Route::post('/delete', [TaskController::class, 'delete']);
