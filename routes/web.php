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
Route::get('/test-relations', function() {
    try {
        // Выполнить сидер через Artisan
        Artisan::call('db:seed', ['--class' => 'RelationsTestSeeder']);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Все методы выполнены!',
            'output' => Artisan::output()
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
});