<?php

namespace App\Http\Controllers;


class PostController extends Controller
{
    public function index(){

        $posts = [
            [
                'title' => 'Post 1',
                'content' => 'Contenido del post 1' 
            ],
            [
                'title' => 'Post 2',
                'content' => 'Contenido del post 2' 
            ],
            [
                'title' => 'Post 3',
                'content' => 'Contenido del post 3' 
            ]
        ];

        $etiqueta = "<h1>Este es un parrafo.</h1>";
        $dia=5;
        $lista=[];
        $count=10;

        return view('posts.index', compact('posts','dia','lista','count'));  //Comando para mandar a la vista
    }

    public function create(){
        return view('posts.create');;
    }

    public function store(){
        return "Aqui se procesará el formulario para crear un post";
    }

    public function show($post){
        //return view('posts.show',['post' => $post]);  //Mandar valor desde laravel

        $prueba="hola mundo desde php";

        return view('posts.show',compact('post','prueba'));
    }

    public function edit($post){
        return "Aqui se mostrará el formulario para editar el post: $post";
    }
    public function update($post){
        return "Aqui se procesará el formulario para editar el post: $post";
    }
    public function destroy($post){
        return "Aqui se eliminará el post: $post";
    }
}
