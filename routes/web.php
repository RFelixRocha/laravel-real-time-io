<?php

use App\Http\Controllers\SiteController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/posts',function (){

    $user = User::first();

    $user->posts()->create([
        'title' =>  Str::random(150),
        'body' => Str::random(400),
    ]);

});

Route::get('/',[SiteController::class, 'index']);
