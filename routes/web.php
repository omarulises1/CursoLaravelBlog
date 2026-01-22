<?php

use App\Http\Controllers\PostController; //Importar
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return "Hola desde la pagina principal"; 
//return view('welcome');
});

Route::get('/test', function () {
  return "Hola desde ruta test"; 
//return view('welcome');
});

Route::get('/test/{valor}', function ($valor) {
  return "Ruta dinamica, se recupera el siguiente valor: $valor"; 
//return view('welcome');
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
//return view('welcome');
});

//->whereAlphaNumeric('curso');

//->where([
//    'curso'=>'[A-Za-z]+',
 //   'categoria'=>'[A-Za-z]+'
//]);


//Ruta para motrar el listado de registros
Route::get('posts',[PostController::class,'index']);
//Route::get('/posts',function(){
//  return "Hola desde la página post";
//});


//Ruta para mostrar un formulario para crear un registro
Route::get('/posts/create',[PostController::class,'create']);
//Route::get('/posts/create',function(){
  //return "Aqui se mostrará el formulario para crear un post";
//});

//Ruta para guardar un registro
Route::get('/posts',[PostController::class,'store']);
//Route::post('/posts',function(){
//  return "Aqui se procesará el formulario para crear un post";
//});

//Ruta para mostrar un registro
Route::get('/posts/{post}',[PostController::class,'show']);
//Route::get('/posts/{post}', function($post){
//  return "Aquí se mostrará el post: $post";
//});

//Ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit',[PostController::class,'edit']);
//Route::get('/posts/{post}/edit',function($post){
//  return "Aqui se mostrará el formulario para editar el post: $post";
//});

//Ruta para actualizar un registro
Route::put('posts{post}', [PostController::class,'update']);
//Route::put('posts{post}', function($post){
//  return "Aqui se procesará el formulario para editar el post: $post";
//});

//Ruta para eliminar un registro
Route::put('posts{post}', [PostController::class,'destroy']);
//Route::delete('posts{post}', function($post){
//  return "Aqui se eliminará el post: $post";
//});