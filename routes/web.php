<?php

# routing untuk homepage
Route::get('/', function () {
  return view('homepage');
});

# routing untuk halaman about
Route::get('/about', function () {
  return view('about');
});

# routing untuk halaman list projects
Route::get('/contact', function () {
  return view('contact');
});

Route::get('/programstudi', function () {
  return view('programstudi');
});