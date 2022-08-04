<?php

use Illuminate\Support\Facades\Route;

//http://127.0.0.1:8000/ => welcome
//http://127.0.0.1:8000/contacto => contact
//http://127.0.0.1:8000/blog => blog
//http://127.0.0.1:8000/acerca-de-mi => about

Route::view('/','welcome');
Route::view('/contacto','contact');
Route::view('/blog','blog');
Route::view('/acerca-de-mi','about');
