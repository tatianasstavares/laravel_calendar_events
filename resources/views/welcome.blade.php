<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>Laravel</title>
    </head>
    <body>
        <h1>Algum título</h1>
        <img src="/img/banner.jpg" alt="">
        @if(10>5)
            <p>A condição é true</p>
            <p>O nome é {{$nome}} tem {{$idade}} anos.</p>
        @endif
        @if($nome == "Pedro")
            <p>O nome é Pedro, e a sua profissão é {{$profissao}}</p>
        @else
            <p>O nome não é Pedro</p>
        @endif
        @for ($i = 0; $i < count($arr); $i++)
            <p>{{$i}} - {{$arr[$i]}}</p>
        @endfor
        @php
            $name = "Tatiana";
            echo $name
        @endphp
        @foreach ($nomes as $nome)
        <p>{{$loop->index}} - {{$nome}}</p>
        @endforeach
        <script src="/js/script.js"></script>
    </body>
</html>
