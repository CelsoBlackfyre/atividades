<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalculadoraController;
use App\Http\Controllers\PesquisaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('PaginaPrincipal');
});

Route::get('/form-cadastro', [FormController::class, 'exibirFormulario'])->name('formulario.mostrar');
Route::post('/form-cadastro', [FormController::class, 'cadastrar'])->name('formulario.enviar');

Route::get('/login', [LoginController::class, 'exibirFormulario'])->name('login.mostrar');
Route::post('/login', [LoginController::class, 'login'])->name('login.enviar');

Route::get('/pesquisa', [PesquisaController::class, 'mostrar'])->name('pesquisa.form');
Route::post('/pesquisa', [PesquisaController::class, 'pesquisar'])->name('pesquisa.enviar');

Route::get('/contato', [ContatoController::class, 'exibirFormContato'])->name('contato.mostrar');
Route::post('/contato', [ContatoController::class, 'enviar'])->name('contato.enviar');

Route::get('/calculadora', [CalculadoraController::class, 'mostrarCalculadora'])->name('calculadora.form');
Route::post('/calculadora', [CalculadoraController::class, 'calcular'])->name('calculadora.calcular');

Route::get('/feedback', [FeedbackController::class, 'mostrar'])->name('feedback.mostrar');
Route::post('/feedback', [FeedbackController::class, 'enviar'])->name('feedback.enviar');

Route::get("/eventos", function () {
    return view("eventos.registro");
});
Route::get("/eventos", [EventoController::class, ""])->name("");
Route::post("/eventos", [EventoController::class, "registrar"])->name("");

Route::get('/quiz', [QuizController::class, 'mostrarQuiz'])->name('quiz.mostrar');
Route::post('/quiz', [QuizController::class, 'respostasFormulario'])->name('quiz.respostas');

Route::get('/newsletter', [NewsletterController::class, 'mostrar'])->name('newsletter.mostrar');
Route::post('/newsletter', [NewsletterController::class, 'inscrever'])->name('newsletter.enviar');

Route::get("/enquete", [EnqueteController::class, 'exibirEnquete'])->name("enquete.form");
Route::post("/enquete", [EnqueteController::class, 'enviar']);

require __DIR__ . '/auth.php';

