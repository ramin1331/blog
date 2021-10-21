<?php

use App\Http\Controllers\BlogController;
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

Route::get('/dashboard',[BlogController::class, 'index']);

Route::get('/create-post' , function (){
    return view('Create_Post');
});

Route::get('/edit-post' , [BlogController::class, 'editPost']);

Route::patch('/update-post' , [BlogController::class, 'updatePost']);

Route::post('/store-post', [BlogController::class, 'addPost']);

Route::get('/show-post', [BlogController::class, 'showPost']);

Route::get('logout', function(){
   auth()->logout();
   return redirect('login');
});

//Route::mediaLibrary();
require __DIR__.'/auth.php';
