<?php

use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/ => welcome
//http://127.0.0.1:8000/contacto => contact
//http://127.0.0.1:8000/blog => blog
//http://127.0.0.1:8000/acerca-de-mi => about

Route::view('/','welcome')->name('home');
Route::view('/contacto','contact')->name('contact');
Route::view('/blog','blog')->name('blog');
Route::view('/acerca-de-mi','about')->name('about');
