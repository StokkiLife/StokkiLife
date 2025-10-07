<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StokkiLife:</title>
    <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}">
    <link rel="stylesheet" href="{{ url('stylesheet/cadastro-login.css') }}">
</head>

<body>
    <article>
        <div class="logo">
            <img src="{{ asset('imgs/stokkilife-logo.png') }}" alt="stokkilife logo">
        </div>
        {{-- a tag a só é utilizado para inserir links de navegação e não para envio de um formulário --}}
        {{-- a tag form colocado antes estava incorretamente utilizada --}}
        <input type="button" onclick="location.href='{{ url('login') }}'" value="LOGIN">
        </div>
    </article>
</body>

</html>