<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//user
Route::post("/register",[UserController::class,'register']);



















// // Reader //
// Route::post("/register", [ReaderController::class, 'register']);
// Route::post("/login", [ReaderController::class, 'login']);


// Books //
Route::post('/books', [BookController::class, 'addBooks']);
Route::delete('/books/{book}', [BookController::class, 'destroy']);
Route::get('/books/{book}/edit', [BookController::class, 'edit']);
Route::post('/books/{book}', [BookController::class, 'update']);


//publishers //
Route::post('/publishers', [PublisherController::class, 'addPublisher']);
Route::delete('/publishers/{publisher}', [PublisherController::class, 'destroy']);
Route::get('/publishers/{publisher}/edit', [PublisherController::class, 'edit']);
Route::post('/publishers/{publisher}', [PublisherController::class, 'update']);




Route::get('/books', [BookController::class, 'getBooks']);
Route::get('/favorites/{favorite}', [BookController::class, 'getFavoriteBooks']);
Route::get('/books/{book}', [BookController::class, 'getBookById']);
Route::get('/books/{book}', [BookController::class, 'getBookByName']);

Route::get('/categories', [BookController::class, 'getCategories']);
Route::get('/categories/{category}', [BookController::class, 'getCategoryById']);
Route::get('/investigators', [BookController::class, 'getInvestigators']);
Route::get('/investigators/{investigator}', [BookController::class, 'getInvestigatorById']);

Route::get("searches/{search}", [BookController::class, 'search']);
