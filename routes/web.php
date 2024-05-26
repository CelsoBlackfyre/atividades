<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/formulario', [FormController::class, 'ExibirFormulario'])->name('formulario.mostrar');
// Route::post('/formulario', [FormController::class, 'Cadastrar'])->name('formulario.enviar');

Route::post("/FormCadastro", [FormController::class, 'Cadastrar'])->name('formulario.enviar');

Route::get("/", function () {
    return Inertia::render("FormCadastro");
});

// Route::get("/", function () {
//     return Inertia::render("FormCadastro");
// });
require __DIR__ . '/auth.php';
