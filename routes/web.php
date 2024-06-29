<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WantController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Want;

Route::get('/', function () {
    $categories =  Category::all();
    $query =  Want::getQuery();
    foreach ($categories as $value) {
        $query->selectRaw("count(case when category_id = '" . $value->id . "' then 1 end ) as " . $value->name);
    }
    return view('welcome', [
        'query' => $query->first(),
        'categories' => $categories,
    ]);
});
Route::prefix('admin')->group(function () {
    Route::prefix('wants')->group(function () {
        Route::get('/', [WantController::class, 'index']);
    });
});
Route::prefix('wants')->group(function () {
    Route::get('/{id}', [WantController::class, 'show']);
});
