<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adm/adm.css') }}">
</head>

<body>
    <header>
        <section>
            <picture>
                <img href='/' src="{{asset('img/Logo.svg')}}" alt="Logo" />
            </picture>
        </section>
    </header>
    <nav>
        <ul>
            <li>
                <a href="{{url('/')}}">Home</a>
            </li>
            <li>
                <a href="{{url('/livro')}}">Resenhas</a>
            </li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
</body>

</html>