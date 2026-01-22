<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController; //Importar
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'index']);

/*
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function(){
    
    //Ruta para motrar el listado de registros
    Route::get('/','index')->name('index');

    //Ruta para mostrar un formulario para crear un registro
    Route::get('/create','create')->name('create');

    //Ruta para guardar un registro
    Route::get('/','store')->name('store');

    //Ruta para mostrar un registro
    Route::get('/{post}','show')->name('show');

    //Ruta para mostrar un formulario para editar un registro
    Route::get('/{post}/edit','edit')->name('edit');

    //Ruta para actualizar un registro
    Route::put('/{post}','update')->name('update');

    //Ruta para eliminar un registro
    Route::put('/{post}','destroy')->name('destroy');
}
);


//Cambio de URI
Route::resource('articulos',PostController::class)
    ->parameters(['articulos'=>'post'])
    ->names('posts');
    //->only(['index']);
*/

Route::resource('posts',PostController::class);
