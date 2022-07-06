<?php

use Illuminate\Support\Facades\Route;

/*
 * Rotas Controllers
 * */
Route::get('/',       [\App\Http\Controllers\HomeController::class,  'index'])->name('home');
Route::get('/alugar', [\App\Http\Controllers\AlugaController::class, 'index'])->name('alugar');
Route::get('/vender', [\App\Http\Controllers\VendeController::class, 'index'])->name('vender');
Route::get('/alto-padrao', [\App\Http\Controllers\AltoPadraoController::class, 'index'])->name('alto-padrao');

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

        Route::prefix('imoveis')->group(function (){

            // Rotas para formulario e adicionar um Imovel no BD
            Route::get('/adicionar', [App\Http\Controllers\admin\ImovelController::class, 'page'])->name('imoveis.store.form');
            Route::post('/adicionar',[App\Http\Controllers\admin\ImovelController::class, 'store'])->name('imoveis.store');
            
            // Rotaa para listar todos os imoveis
            Route::get('/listaDeImoveis', [App\Http\Controllers\admin\ImovelController::class,'show'])->name('imoveis.show');
            
            // Rota para um mostrar imovel pelo ID
            Route::get('/{id}', [App\Http\Controllers\admin\ImovelController::class,'showById'])->name('showById.index');

            // Rota para mostrar o formulario de update do Imovel
            Route::get('/{id}/editar',[App\Http\Controllers\admin\ImovelController::class, 'edit'])->name('imoveis.edit');
            Route::put('/{id}/update',[App\Http\Controllers\admin\ImovelController::class, 'update'])->where('id', '[0-9]+')->name('imoveis.update');
       
        });



        Route::prefix('cidades')->group(function(){
            // Rotas para listar e Adicionar cidades no BD
            Route::get('/', [App\Http\Controllers\admin\CidadeController::class, 'index'])->name('cidades.index');
            Route::put('/adicionar', [App\Http\Controllers\admin\CidadeController::class, 'store'])->name('cidades.store');

        });

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
