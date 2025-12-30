<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
     return view("index");
});
Route::get("/tlogin", function () {
     return view("tlogin");
});
Route::get("/kursus", function () {
     return view("kursus");
});
Route::get("/kursussaya", function () {
     return view("kursussaya");
});
Route::get("/ruangbelajar", function () {
     return view("ruangbelajar");
});
Route::get("/ddashboard", function () {
     return view("ddashboard");
});
Route::get("/konfirmasiujian", function () {
     return view("konfirmasiujian");
});
Route::get("/ruangujian", function () {
     return view("ruangujian");
});
Route::get("/berhasil", function () {
     return view("berhasil");
});
Route::get("/gagal", function () {
     return view("gagal");
});
