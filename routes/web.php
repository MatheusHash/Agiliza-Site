<?php

use Illuminate\Support\Facades\Route;

/*
 * Rotas Controllers
 * */
Route::get('/',       [\App\Http\Controllers\HomeController::class,  'index'])->name('home');
Route::get('/alugar', [\App\Http\Controllers\HomeController::class, 'alugar'])->name('alugar');
Route::get('/comprar', [\App\Http\Controllers\HomeController::class, 'vender'])->name('vender');
Route::get('/imovel', [\App\Http\Controllers\HomeController::class, 'imovel'])->name('imovel');

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

            // Rota para deletar um ??movel //=> No controller tamb??m ser?? erxclu??do as imagens da galeria
            Route::delete('/{id}/delete',[App\Http\Controllers\admin\ImovelController::class, 'destroy'])->where('id', '[0-9]+')->name('imoveis.destroy');

            // Rota para alterar a visibilidade de um ??movel
            Route::put('/{id}/visibilidade',[App\Http\Controllers\admin\ImovelController::class, 'visibilidade'])->where('id', '[0-9]+')->name('imoveis.visibility');
            

            //rotas da galeria
            Route::prefix('galeria')->group(function(){
                Route::get('/{idImovel}',[App\Http\Controllers\admin\GaleriaController::class, 'index'])->name('galeria');
                Route::delete('deletarImagem/{idImagem}',[App\Http\Controllers\admin\GaleriaController::class, 'destroy'])->name('imagem.destroy');
                Route::put('novaImagemPrincipal/{idImovel}',[App\Http\Controllers\admin\GaleriaController::class, 'novaImagemCapa'])->name('imagemCapa.update');
            });
        });

        Route::prefix('cidades')->group(function(){
            // Rotas para listar e Adicionar cidades no BD
            Route::get('/', [App\Http\Controllers\admin\CidadeController::class, 'index'])->name('cidades.index');
            Route::post('/adicionar', [App\Http\Controllers\admin\CidadeController::class, 'store'])->name('cidades.store');
        });
        
        Route::prefix('categorias')->group(function(){
            // Rotas para listar e Adicionar categorias no BD
            Route::get('/', [App\Http\Controllers\admin\CategoriaController::class, 'index'])->name('categorias.index');
            Route::post('/adicionar', [App\Http\Controllers\admin\CategoriaController::class, 'store'])->name('categorias.store');
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
 * Cada rota dentro do grupo ir?? conter o prefixo admin.
 * */
//Route::prefix('admin')->group(function(){
//    Route::get('/login',function (){
//        return view('admin/login/login');
//    });
//});


/*
 * Para tratar erros de rotas que n??o existem
 *
 * */
Route::fallback(function (){

    return "P??gina n??o encontrada";

});

require __DIR__.'/auth.php';
