<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("home");
});

Route::get("/gioi-thieu", function () {
    return view("about");
});

Route::get("/du-an", function () {
    return view("projects");
});

Route::get("/tin-tuc", function () {
    return view("news");
});

Route::get("/lien-he", function () {
    return view("contact");
});

Route::get("/d-metropole-ha-tinh", function () {
    return view("d-metropole");
});
