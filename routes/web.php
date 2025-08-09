<?php

use App\Models\Round;
use App\Models\Juding;
use App\Http\Controllers\Addbook;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\JudgeController;
use App\Http\Controllers\RoundController;
use Pest\Mutate\Mutators\Math\RoundToCeil;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuggestionController;

Route::get('/', [ProfileController::class, 'start'])->name('start');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/create-round', [RoundController::class, 'create'])->middleware(['auth', 'verified'])->name('create.round');

Route::post('/round-store',[RoundController::class, 'storeRound'])->name('round.store');

Route::get('/get-judges',[RoundController::class, 'getJudges'])->name('get.judges');

Route::post('/add-book', [BookController::class, 'storeBook'])->middleware(['auth','verified'])->name('add.book');

Route::get('/my-books', [BookController::class, 'myBooks'])->middleware(['auth','verified'])->name('my.books');

Route::get('/display-juding', [JudgeController::class, 'displayJudgingRound'])->middleware(['auth','verified'])->name('display.judge');


Route::get('/create-suggestion', [SuggestionController::class, 'create'])->middleware(['auth','verified'])->name('create.suggestion');
Route::post('/round/{round}/suggestion', [SuggestionController::class, 'store'])->middleware(['auth','verified'])->name('round.suggestion.store');
Route::patch('round/{round}/winning_suggestion', [RoundController::class, 'updateWinningSuggestion'])->middleware(['auth','verified'])->name('round.updateWinningSuggestion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
