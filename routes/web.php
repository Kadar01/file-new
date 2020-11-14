<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
	return "Nama Saya <b>Kadar</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Controller baru 1 */
use App\Http\Controllers\HomeController;
Route::get("/home/fast", [HomeController::class, "fast"]);
Route::get("/home/rk", [HomeController::class, "rk"]);
Route::get("/home/hello", [HomeController::class, "hello"]);
Route::get("/tema/bootstrap", [HomeController::class, "index"]);

/* Controller baru 2 */
use App\Http\Controllers\BackController;
Route::get("back/one", [BackController::class, "satu"]);
Route::get("back/one2", [BackController::class, "dua"]);
Route::get("back/one3", [BackController::class, "tiga"]);

/* router dan URL baru */
Route::get("/back", function () {
	return "Tanggal Lahir saya 01 januari 2000";
});

Route::get("/alamat", function () {
	return "Jl Kesehatan Dalam";
});

Route::get("/makan", function () {
	return "Makanan Kesukaan Saya <i><b>Nasi Goreng</i></b>";
});

Route::get("/kuliah", function () {
	return "Saya menjadi Mahasiswa di <u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/py1", function () {
	return "Saya Mahasiswa Semester 5";
});
