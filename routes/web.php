<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
    $userNames = [];
    foreach ($users as $key) {
        $userNames[] = $key['name'];
    }
    $name = implode(', ', $userNames);
    return "The users are: " . $name . ",";
});

Route::get('/giao-dien', function () {
    return view('layouts.view');
});

Route::get('/index', function () {
    return view('form');
});
Route::get('/post', function () {
    return view('query');
});
// Route::post('/post',[HomeController::class,'post']);

Route::post('/post', [HomeController::class, 'store']);
Route::get('/post-input', function () {
    return view('oldInput');
});
Route::post('/post-input', [HomeController::class, 'postInput']);

Route::get('/finance', function () {
    return view('layouts.finance');
});


Route::resource('cars', 'CarController');

Route::get('/test', function () {
    return view('test', [
        'name' => 'Nguyễn Thị Linh',
        'ho' => 'Nguyen'
    ]);
});

Route::get('about-me', [PageController::class, 'aboutme']);

Route::get('/pnv', function () {
    return view('home', ['name' => 'Linh']);
});

Route::get('/pnv1', function () {
    return view('home', ['name' => "<i style='color:green'>Linh</i>"]);
});


Route::get('/home', function () {
    return view('home', ['title' => 'Toidicode.come', 'alertMessage' => 'Thông báo đây']);
})->name('home');

Route::get('/demo', function () {

    $posts = [
        ['name' => 'post 1'],
        ['name' => 'post 2'],
        ['name' => 'post 3'],
    ];
    return view('home',compact('posts'));
})->name('home');

Route::get('/home', function () {
    // $tasks = [
    //     ['name' => 'Task 1'],
    //     ['name' => 'Task 2'],
    //     ['name' => 'Task 3'],
    // ];
    return view('home');
});


Route::get('/ecommerce',function(){
    return view('layouts.contentecommerce');
});
// Route::get('/ecommerce',function(){
//     return view('layouts.ecommerce');
// });