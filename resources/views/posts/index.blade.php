<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .color-red{
            color:red;
        }
        .color-green{
            color:green;
        }
    </style>
</head>
<body>
    <h1>Aquí se mostrará el listado de posts</h1>

    <h1><?php echo $test?></h1>
   <!-- {//!!$etiqueta!!} -->

    {{$prueba}}
    <br>

<!-- Javascript-->
    <script>
        let posts = @json($posts)

        console.log(posts); 

    </script>

<!-- PHP -->
    @if(false)
        <p>La condicional es true</p>
    @else
        <p>La condicional es false</p>
    @endif

    @unless (false)
        <p>Valor falso a la directiva unless</p>
    @endunless


    <!--Directiva switch-case-->
    @switch($dia)
        @case(1)
            <p>Lunes</p>
            @break
        @case(2)
            <p>Martes</p>
            @break
        @case(3)
            <p>Miercoles</p>
            @break
        @case(4)
            <p>Jueves</p>
            @break
        @case(5)
            <p>Viernes</p>
            @break
        @case(6)
            <p>Sábado</p>
            @break
        @case(7)
            <p>Domingo</p>
            @break
        @default
            <p>El día no existe</p>
    @endswitch

    <ul>
        <!--For each Sirve ara iteraciones-->
        @foreach ($posts as $post)
            <li @class([
                'color-red' => $loop->first,
                'color-green' => $loop->last
                ])>
                <h2>
                    {{$post['title']}}
                </h2>
                <p>
                    {{$post['content']}}
                </p>
            </li>
        @endforeach
    </ul>

        <ul>
        <!--For else Sirve ara iteraciones-->
        @forelse ($lista as $post)
            <li>
                <h2>
                    {{$post['title']}}
                </h2>
                <p>
                    {{$post['content']}}
                </p>
            </li>
        @empty
            <p>No hay elementos</p>
        @endforelse
            
    </ul>
 
    <!--for-->
    
    @for ($i = 1; $i <= $count; $i++)    
        @continue($i % 3 ==0)
        <p>
            {{$i}}
        </p>
        @break($i==10)
    @endfor
    <p>
        <b>Saliste del bucle</b>
    </p>


</body>
</html>