<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Database\Seeders\RelationsTestSeeder;




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
use App\Models\Message;

Route::get('/guestbook', fn() => view('guestbook', ['messages' => Message::where('approved',1)->latest()->get()]));
Route::post('/guestbook', fn() => Message::create(['author'=>$_POST['author'],'content'=>$_POST['content'],'approved'=>0]) ? redirect('/guestbook')->with('success','Ок') : null);
Route::get('/admin/guestbook', fn() => view('admin_guestbook', ['messages' => Message::latest()->get()]));
Route::get('/admin/delete/{id}', fn($id) => Message::find($id)->delete() ? redirect('/admin/guestbook') : null);
Route::get('/admin/approve/{id}', fn($id) => Message::find($id)->update(['approved'=>1]) ? redirect('/admin/guestbook') : null);
Route::get('/admin/edit/{id}', fn($id) => view('edit_message', ['message'=>Message::find($id)]));
Route::post('/admin/update/{id}', fn($id) => Message::find($id)->update(['author'=>$_POST['author'],'content'=>$_POST['content']]) ? redirect('/admin/guestbook') : null);