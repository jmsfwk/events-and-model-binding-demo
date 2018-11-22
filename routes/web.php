<?php

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

use App\Cat;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cats', function () {
    return \App\Cat::all();
});

Route::get('/cats/new', function () {
    return view('new');
});

Route::post('/cats', function (Request $request) {
    $cat = Cat::create($request->all());

    if ($request->fluffyness > 4) {
        event(new \App\Events\SuperFluffyCatCreated($cat));
    }

    return redirect('/cats');
});

Route::get('/cats/bad/{cat}', function ($cat) {
    dd($cat);
});

Route::get('/cats/good/{cat}', function (Cat $cat) {
    dd($cat);
});
