<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Database\Seeders\RelationsTestSeeder;
use App\Models\Category;
use App\Models\Ad;




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
Route::get('/ads', fn() => view('categories', ['categories'=>Category::all()]));
Route::get('/ads/cat/{id}', fn($id) => view('ads', ['category'=>Category::find($id), 'ads'=>Category::find($id)->ads()->latest()->get()]));
Route::post('/ads/cat/{id}', fn($id) => Ad::create(['title'=>$_POST['title'],'description'=>$_POST['description'],'category_id'=>$id]) ? redirect("/ads/cat/$id") : null);