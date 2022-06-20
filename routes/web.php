<?php

use Illuminate\Support\Facades\Route;

/*
 * Rotas Controllers
 * */
Route::get('/',       [\App\Http\Controllers\HomeController::class,  'index'])->name('home');
Route::get('/alugar', [\App\Http\Controllers\AlugaController::class, 'index'])->name('alugar');
Route::get('/vender', [\App\Http\Controllers\VendeController::class, 'index'])->name('vender');

/*
 * Fim das rotas Controllers
 * */
// Rota para pagina de LOGIN
Route::get('/login',function (){
    return view('login');
})->name('login');

Route::middleware('auth')->group(function (){ //Middleware para autenticar o usuario antes de entrar nas rotas Admin

    Route::prefix('admin')->group(function(){// Grupo de rotas Admin
        /*
         * Rotas com controllers */
        Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/insereImovel', [App\Http\Controllers\admin\InserirImovel::class,    'index'])->name('insereImovel');
    });
});

//Route::get('/imovel/{cod?}',function ($cod = null){
//   return view('imovel',['cod' => $cod]);
//})->where('cod', '[0-9]+'); --> where, para aceitar somente numeros(cod) como parametros


//Route::get('imovel/{cod}',function (\App\Models\User $cod){
//    return view('Imovel');
//});


/*
 * Grupo de rotas 'admin'
 *
 * Cada rota dentro do grupo irá conter o prefixo admin.
 * */
//Route::prefix('admin')->group(function(){
//    Route::get('/login',function (){
//        return view('admin/login/login');
//    });
//});


/*
 * Para tratar erros de rotas que não existem
 *
 * */
Route::fallback(function (){

    return "Página não encontrada";

});

require __DIR__.'/auth.php';
