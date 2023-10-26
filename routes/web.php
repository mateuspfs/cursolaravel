<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

// Routes 

// Route::get('/', function () {
//     return redirect()->route('admin.dashboard');
// });

// Route::any('/any', function(){
//     return 'Permite todo tipo de acesso http(put, delete, get and post)';
// });

// Route::match(['put', 'delete'], '/match', function(){
//     return 'Permite apenas acessos definidos';
// });

// // concatenando variavéis junto da rota 
// Route::get('/produto/{id}/{cat}', function($id, $cat){
//     return 'O id do produto é: ' . $id . '<br> A categoria é: ' . $cat;
// });

// // caminho facilitado
// Route::redirect('/sobre', '/empresa');
// Route::view('/empresa', 'site/empresa');

// // adicionando nome a esta rota
// Route::get('/timesnownews', function(){
//     return view('news');
// })->name('noticias');

// // redireciona a outra rota através do nome dado a ela 
// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });

// sem usar prefix ou name
// Route::get('/admin/users', function(){
//     return 'users';
// })->name('admin.users');

// Route::get('/admin/clientes', function(){
//     return 'clientes';
// })->name('admin.clientes');

// Route::get('/admin/dashboard', function(){
//     return 'dashboard';
// })->name('admin.clientes');


// agrupando por prefix e nome
// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
// ], function(){

//     Route::get('users', function(){
//         return "users";
//     })->name('users');
    
//     Route::get('clientes', function(){
//         return "clientes";
//     })->name('clientes');
    
//     Route::get('dashboard', function(){
//         return "dashboard";
//     })->name('dashboard');
// });

// Controllers

Route::resource('produtos', ProdutoController::class);
