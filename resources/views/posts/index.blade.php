<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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


</body>
</html>