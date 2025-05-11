<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secret</title>
</head>
<body>
    <div class="container">
        <header>
            <a>Pagina Secreta de Solcito </a>
            <div>
                <a href="{{ route('logout') }}" class="btn btn-danger">
                    <button type="button">Cerrar Sesión</button>
                </a>

            </div>
        </header>
    </div>
    <article class="container">
        <h1>Bienvenido a la página secreta</h1>
        <p>Esta es una página secreta que solo los usuarios autenticados pueden ver.</p>
    </article>
</body>
</html>