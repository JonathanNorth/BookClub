<?php

use App\Models\Round;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoundController;
use Pest\Mutate\Mutators\Math\RoundToCeil;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuggestionController;

Route::get('/', [ProfileController::class, 'start'])->name('start');

Route::get('/dashboard', function () {
    $rounds = Round::all();
    return view('dashboard',['rounds' => $rounds]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/create-round', [RoundController::class, 'create'])->middleware(['auth', 'verified'])->name('create.round');

Route::post('/round-store',[RoundController::class, 'storeRound'])->name('round.store');

Route::get('/get-judges',[RoundController::class, 'getJudges'])->name('get.judges');

Route::get('/create-suggestion', [SuggestionController::class, 'create'])->middleware(['auth','verified'])->name('create.suggestion');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
