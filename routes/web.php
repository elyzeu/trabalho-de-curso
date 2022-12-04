<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAgendar;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
})->group(function () {
    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');
})
->group(function () {
    Route::get('/events/agendar-visita', function () {
        return view('form.agendar-visita');
    })->name('agendar-visita-form');
})
->group(function () {
    Route::get('/events/cadastrar-gasto', function () {
        return view('form.cadastrar-gasto');
    })->name('cadastrar-gasto');
})
->group(function () {
    Route::get('/events/visitas-agendadas', [ControllerAgendar::class, 'listUserAgend'])->name('visitas-agendadas');
})
->group(function () {
    Route::get('/events/allvisitas', [ControllerAgendar::class, 'listAllAgend'])->name('all-visitas-agendadas');
})
->group(function () {
    Route::get('/events/cadastro-gasto/save', [ControllerGasto::class, 'store'])->name('cadastrar-gasto-save');
})
->group(function () {
    Route::delete('/events/visita/delet', [ControllerAgendar::class, 'destroy'])->name('destroy-visita-user-agendada');
})

->group(function () {
    Route::post('/events/agendar-visita/create', [ControllerAgendar::class, 'store'])->name('agendar-visita-save');
});