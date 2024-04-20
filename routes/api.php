<?php

use App\Http\Controllers\BikeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\RelationSheepController;
use App\Http\Controllers\ResponderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('responder')->controller(ResponderController::class)->group(function () {
    Route::get('hi', 'hi');
    Route::get('hi/{name}', 'greet');
    Route::get('number', 'number');
    Route::get('www', 'redirect');
    Route::get('favi', 'favicon');
    Route::get('weather', 'weather');
    Route::get('error', 'errorMessage');
    Route::get('multiply/{number1}/{number2}', 'multiply')->whereNumber(['number1', 'number2']);
});

Route::prefix('hallo-velo')->controller(BikeController::class)->group(function () {
    Route::get('bikes', 'list');
    Route::get('bikes/{bike}', 'show');
});

Route::prefix('bookler')->controller(BookController::class)->group(function () {
    Route::get('books', 'list');
    Route::get('books/{book}', 'show');

    Route::get('book-finder/slug/{book:slug}', 'show');
    Route::get('book-finder/year/{book:year}', 'show');
    Route::get('book-finder/max-pages/{pages}', 'findByMaxPages');

    Route::get('search/{search}', 'search');

    Route::get('meta/count', 'count');
    Route::get('meta/avg-pages', 'pages');

    Route::get('dashboard', 'dashboard');
});

Route::prefix('relationsheep')->controller(RelationSheepController::class)->group(function () {
    Route::get('posts', 'posts');
    Route::get('topics/{topic:slug}/posts', 'postsByTopic');
});

Route::prefix('ackerer')->controller(FarmController::class)->group(function () {
    Route::get('plants', 'plants');
    Route::get('plants/{plant:slug}', 'findBySlug');
    Route::get('farms', 'farms');
});
