<?php

use Illuminate\Support\Facades\Route;
use App\Models\Country;
use App\Models\City;
use App\Models\Landmark;




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
// Главная админки
Route::get('/admin', function () {
    return view('admin.index');
});

// Управление странами
Route::get('/admin/countries', function () {
    $countries = Country::all();
    return view('admin.countries.index', compact('countries'));
});

Route::post('/admin/countries', function () {
    Country::create(['name' => $_POST['name']]);
    return redirect('/admin/countries');
});

Route::get('/admin/countries/edit/{id}', function ($id) {
    $country = Country::findOrFail($id);
    return view('admin.countries.edit', compact('country'));
});

Route::post('/admin/countries/update/{id}', function ($id) {
    $country = Country::findOrFail($id);
    $country->update(['name' => $_POST['name']]);
    return redirect('/admin/countries');
});

Route::get('/admin/countries/delete/{id}', function ($id) {
    Country::findOrFail($id)->delete();
    return redirect('/admin/countries');
});

// Управление городами
Route::get('/admin/cities', function () {
    $cities = City::with('country')->get();
    $countries = Country::all();
    return view('admin.cities.index', compact('cities', 'countries'));
});

Route::post('/admin/cities', function () {
    City::create([
        'name' => $_POST['name'],
        'country_id' => $_POST['country_id']
    ]);
    return redirect('/admin/cities');
});

Route::get('/admin/cities/edit/{id}', function ($id) {
    $city = City::findOrFail($id);
    $countries = Country::all();
    return view('admin.cities.edit', compact('city', 'countries'));
});

Route::post('/admin/cities/update/{id}', function ($id) {
    $city = City::findOrFail($id);
    $city->update([
        'name' => $_POST['name'],
        'country_id' => $_POST['country_id']
    ]);
    return redirect('/admin/cities');
});

Route::get('/admin/cities/delete/{id}', function ($id) {
    City::findOrFail($id)->delete();
    return redirect('/admin/cities');
});

// Управление достопримечательностями
Route::get('/admin/landmarks', function () {
    $landmarks = Landmark::with('city.country')->get();
    $cities = City::all();
    return view('admin.landmarks.index', compact('landmarks', 'cities'));
});

Route::post('/admin/landmarks', function () {
    Landmark::create([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'city_id' => $_POST['city_id']
    ]);
    return redirect('/admin/landmarks');
});

Route::get('/admin/landmarks/edit/{id}', function ($id) {
    $landmark = Landmark::findOrFail($id);
    $cities = City::all();
    return view('admin.landmarks.edit', compact('landmark', 'cities'));
});

Route::post('/admin/landmarks/update/{id}', function ($id) {
    $landmark = Landmark::findOrFail($id);
    $landmark->update([
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'city_id' => $_POST['city_id']
    ]);
    return redirect('/admin/landmarks');
});

Route::get('/admin/landmarks/delete/{id}', function ($id) {
    Landmark::findOrFail($id)->delete();
    return redirect('/admin/landmarks');
});

// Админка гостевой книги
Route::get('/admin/guestbook', function () {
    $messages = Message::latest()->get();
    return view('admin_guestbook', compact('messages'));
});

Route::get('/admin/delete/{id}', function ($id) {
    Message::find($id)->delete();
    return redirect('/admin/guestbook');
});

Route::get('/admin/approve/{id}', function ($id) {
    Message::find($id)->update(['approved' => 1]);
    return redirect('/admin/guestbook');
});

Route::get('/admin/edit/{id}', function ($id) {
    $message = Message::find($id);
    return view('edit_message', compact('message'));
});

Route::post('/admin/update/{id}', function ($id) {
    Message::find($id)->update([
        'author' => $_POST['author'],
        'content' => $_POST['content']
    ]);
    return redirect('/admin/guestbook');
});

// ========== ПУБЛИЧНЫЕ МАРШРУТЫ ==========

// Города и страны
Route::get('/', function () {
    $countries = Country::all();
    return view('countries', compact('countries'));
});

Route::get('/cities/{id}', function ($id) {
    $country = Country::findOrFail($id);
    return view('cities', compact('country'));
});

Route::get('/landmarks/{id}', function ($id) {
    $city = City::findOrFail($id);
    return view('landmarks', compact('city'));
});

Route::get('/landmark/{id}', function ($id) {
    $landmark = Landmark::findOrFail($id);
    return view('landmark', compact('landmark'));
});

// Доска объявлений
Route::get('/ads', function () {
    $categories = Category::all();
    return view('categories', compact('categories'));
});

Route::get('/ads/cat/{id}', function ($id) {
    $category = Category::findOrFail($id);
    $ads = $category->ads()->latest()->get();
    return view('ads', compact('category', 'ads'));
});

Route::post('/ads/cat/{id}', function ($id) {
    Ad::create([
        'title' => $_POST['title'],
        'description' => $_POST['description'],
        'category_id' => $id
    ]);
    return redirect("/ads/cat/$id");
});

// Гостевая книга
Route::get('/guestbook', function () {
    $messages = Message::where('approved', 1)->latest()->get();
    return view('guestbook', compact('messages'));
});

Route::post('/guestbook', function () {
    Message::create([
        'author' => $_POST['author'],
        'content' => $_POST['content'],
        'approved' => 0
    ]);
    return redirect('/guestbook')->with('success', 'Сообщение добавлено');
});