<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\PesquisaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/formulario', [FormController::class, 'ExibirFormulario'])->name('formulario.mostrar');
// Route::post('/formulario', [FormController::class, 'Cadastrar'])->name('formulario.enviar');


Route::get('/', function () {
    return Inertia::render('PaginaPrincipal');
});

Route::get("/FormCadastro", function () {
    return Inertia::render("FormCadastro");
});
Route::post("/FormCadastro", [FormController::class, 'Cadastrar'])->name('formulario.enviar');

Route::get("/login", function () {
    return Inertia::render("FormLogin");
});
Route::post('/login', [LoginController::class, 'login'])->name('formulario.logar');

Route::get("/pesquisa", function () {
    return Inertia::render("Pesquisa");
});

Route::get("/pesquisa/resultados", [PesquisaController::class, "pesquisa"])->name("pesquisa.resultados");

Route::get("/contato", function () {
    return Inertia::render("Contato");
});

Route::post("/contato", [ContatoController::class, "enviar"]);

Route::get("/calculadora", function () {
    return Inertia::render("Calculadora");
});

Route::post("/calculadora", [CalculadoraController::class, "calcular"]);

Route::get("/feedback", function () {
    return Inertia::render("Feedback");
});
Route::post("/feedback", [FeedbackController::class, "enviar"]);

Route::get("/quiz", [QuizController::class, "mostrarQuiz"])->name("quiz.mostrar");
;
Route::post("/quiz", [QuizController::class, "respostasFormulario"])->name("quiz.respostas");
;

Route::get("/newsletter", [NewsletterController::class, "index"]);
Route::post("/newsletter", [NewsletterController::class, "inscrever"]);

// Route::get("/", function () {
//     return Inertia::render("FormCadastro");
// });
require __DIR__ . '/auth.php';
