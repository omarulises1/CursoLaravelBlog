<?php

use App\Http\Controllers\PostController; //Importar
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return "Hola desde la pagina principal"; 
});

Route::get('/test', function () {
  return "Hola desde ruta test"; 
});

Route::get('/test/{valor}', function ($valor) {
  return "Ruta dinamica, se recupera el siguiente valor: $valor"; 
});

Route::get('/cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if ($categoria){
        return "Bienvenido al curso: $curso, de la categoría: $categoria";
    }else{
        return"Bienvenido al curso: $curso";
    } 
});

Route::get('/persona/{id}', function ($id) {
  return "Prueba de id en archivo web.php: $id";
});

//Ruta para motrar el listado de registros
Route::get('posts',[PostController::class,'index']);

//Ruta para mostrar un formulario para crear un registro
Route::get('/posts/create',[PostController::class,'create']);

//Ruta para guardar un registro
Route::get('/posts',[PostController::class,'store']);

//Ruta para mostrar un registro
Route::get('/posts/{post}',[PostController::class,'show']);

//Ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit',[PostController::class,'edit']);

//Ruta para actualizar un registro
Route::put('posts{post}', [PostController::class,'update']);

//Ruta para eliminar un registro
Route::put('posts{post}', [PostController::class,'destroy']);
