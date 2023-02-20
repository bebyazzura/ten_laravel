<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
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

Route::get('/', [HomeController::class, 'index']);

#membuat url dengan route
Route::get('/about', function(){
    return view('about');
});

#menampilkan data secara langsung melalui route
Route::get('/hello', function(){
    $dataArray = [
        'message' => 'Hello, amel'
    ];

    return $dataArray;

    // return response()->json([]);
});

#fungsi debugging di laravel untuk menampilkan response

Route::get('/hello', function(){
    $dataArray = [
        'message' => 'Hello, amel'
    ];
    ddd(request()); //dump, die, debug
});



Route::get('/task', [TaskController::class, 'index']);
Route::get('/task/{id}', [TaskController::class, 'show']);
Route::post('/task',[TaskController::class, 'store']);
Route::patch('/task/{id}', [TaskController::class, 'update']);
Route::delete('/task/{id}', [TaskController::class, 'destroy']);

//route view
Route::get('/task/data/create' , [TaskController::class, 'create']);
Route::get('/task/{id}/edit' , [TaskController::class, 'edit']);

/*

show -> manggil data pake param

menggunakan method post

*/



// //menggunakan method patch

// //menggunakan method put
// Route::put('/task/{key}', function($key) use ($taskList){
//     $taskList[$key] = request()->task;
//     return $taskList;
// });

// //menggunakan method delete

