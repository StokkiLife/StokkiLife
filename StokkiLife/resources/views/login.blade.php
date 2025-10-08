<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - StokkiLife</title>
    <link rel="icon" href="{{ asset('imgs/stokkilife-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('stylesheet/cadastro-login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
</head>
<body>
    <article>
        <div class="logo">
            <img src="{{ asset('imgs/stokkilife-logo.png') }}" alt="StokkiLife Logo">
        </div>
        <form method="POST">
            <div class="formulario-login">
                <p><i class="bi bi-envelope-fill"></i> <label for="email">Email: </label>
                    <input type="email" name="email" required>
                </p>
            </div>
            <div class="formulario-login">
                <p><i class="bi bi-lock-fill"></i> <label for="senha">Senha: </label>
                    <input type="password" name="senha" required>
                </p>
            </div>
            <input type="submit" value="ENTRAR">
        </form>
    </article>
</body>
</html>