<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Models\Category;

Route::get('/', function () {
    $categories = Category::all();

    return view('home', compact('categories'));
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category/{slug}', [BlogController::class, 'list'])->name('blog.list');
Route::get('/post/{slug}', [BlogController::class, 'single'])->name('blog.single');
