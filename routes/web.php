<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

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
Route::get('/users', function () {
    global $users;
    $userNames=[];
    foreach($users as $key  ){
        $userNames[]=$key['name'];
    }
    $name=implode(', ', $userNames);
    return "The users are: " .$name.",";
});

Route::get('/giao-dien',function(){
    return view('task');
});

Route::get('/index',function(){
    return view('form');
});
Route::get('/post',function(){
    return view('query');
});
// Route::post('/post',[HomeController::class,'post']);

Route::post('/post',[HomeController::class,'store']);
Route::get('/post-input',function(){
    return view('oldInput');
});
Route::post('/post-input',[HomeController::class,'postInput']);