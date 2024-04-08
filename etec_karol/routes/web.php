<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
})->name('site.home');

Route::get('/cursos', function () {
    return view('site.cursos');
})->name('site.cursos');

Route::get('/instituicao', function () {
    return view('site.instituicao');
})->name('site.instituicao');

Route::get('/departamentos', function () {
    return view('site.departamentos');
})->name('site.departamentos');

Route::get('/oportunidades', function () {
    return view('site.oportunidades');
})->name('site.oportunidades');

Route::get('/vestibulinho', function () {
    return view('site.vestibulinho');
})->name('site.vestibulinho');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
