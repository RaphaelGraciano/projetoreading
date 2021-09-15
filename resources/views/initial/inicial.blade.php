<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/initial/initial.css')}}" />
    <link rel="stylesheet" href="{{asset('css/initial/carousel.css')}}" />
</head>

<body>
    <header>
        <section>
            <picture>
                <img href='/' src="{{asset('img/Logo.svg')}}" alt="Logo" />
            </picture>
        </section>
        @if (Route::has('login'))
        <div>
            @auth
            <a href="{{ url('/livro') }}" class="text-sm text-gray-700 underline">Livros</a>
            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Perfil</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registrar</a>
            @endif
            @endauth
        </div>
        @endif
    </header>
    <main>
        <section class="carousel">
            <ol>
                @foreach($imagens as $image)
                <li>
                    <img src="{{asset($image['url'])}}" alt="{{$image['nome']}}" />
                </li>
                @endforeach
            </ol>
        </section>
        <h1>
            Bem vindo(a) ao nosso blog! Aqui traremos alguns livros e suas resenhas para que vocês possamacompanhar e até ter inspirações para iniciar outras leituras!
        </h1>
    </main>
</body>


</html>