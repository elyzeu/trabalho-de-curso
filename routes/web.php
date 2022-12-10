<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAgendar;
use App\Http\Controllers\ControllerGasto;
use App\Http\Controllers\ControllerSaldo;
use App\Http\Controllers\ControllerFiliado;
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

//retorna a view de visita
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])
//rota relativa a pagina inicial
->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
})

//rota com a função de retornar a view, menu.
->group(function () {
    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');
})

//rota que chama o metodo de verificação para ir a pagina agendar visita
->group(function () {
    Route::get('/events/agendar-visita', [ControllerAgendar::class, 'verific_Cad_ReturnForm'])->name('agendar-visita-form');
})

//rota que tem como função retornar o formulario para cadastrar gasto
->group(function () {
    Route::get('/events/cadastrar-gasto', function () {
        return view('form.cadastrar-gasto');
    })->name('cadastrar-gasto');
})

//rota com função de retorno a view visitas agendadas e os atributos consultados
->group(function () {
    Route::get('/events/visitas-agendadas', [ControllerAgendar::class, 'listUserAgend'])->name('visitas-agendadas');
})

//rota que chama o metodo para retornar a view e listar todas as visitas agendadas
->group(function () {
    Route::get('/events/allvisitas', [ControllerAgendar::class, 'listAllAgend'])->name('all-visitas-agendadas');
})

//rota que salva os gastos enviados pelo formulario
->group(function () {
    Route::post('/events/cadastro-gasto/save', [ControllerGasto::class, 'store'])->name('cadastrar-gasto-save');
})
->group(function () {
    Route::get('/events/buscar-gasto', function () {
        return view('form.buscar-gasto');
    })->name('buscar-gasto');
})
->group(function () {
    Route::post('/events/ver-gasto', [ControllerGasto::class, 'list'])->name('ver-gasto');
})
->group(function () {
    Route::get('/events/ver-all-gasto', [ControllerGasto::class, 'ListAllGasto'])->name('ver-all-gasto');
})

//rota para chamada do metodo destroy, para deletar as dividas
->group(function () {
    Route::delete('/events/visita/delet', [ControllerAgendar::class, 'destroy'])->name('destroy-visita-user-agendada');
})
->group(function () {
    Route::delete('/events/all-visita/delet/{id}', [ControllerAgendar::class, 'destroyAllVisita'])->name('destroy-all-visita-agendada');
})

//rota com objetivo de salvar as visitas no banco, por meio do método store
->group(function () {
    Route::post('/events/agendar-visita/create', [ControllerAgendar::class, 'store'])->name('agendar-visita-save');
})

->group(function () {
    Route::get('/events/saldo', function () {
        return view('form.cadastrar-saldo');
    })->name('saldo-cadastro-view');
})

->group(function () {
    Route::post('/events/saldo/save', [ControllerSaldo::class, 'store'])->name('saldo-save');
})
->group(function () {
    Route::get('/events/saldo/list', [ControllerSaldo::class, 'list'])->name('ver-saldo');
})
->group(function () {
    Route::get('/events/filiado', function () {
        return view('form.cadastrar-filiado');
    })->name('cadastrar-filiado');
})
->group(function () {
    Route::post('/events/filiado/save', [ControllerFiliado::class, 'store'])->name('cadastrar-filiado-save');
})
;