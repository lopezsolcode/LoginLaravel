<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="María Sol López">
    <title>Registro</title>
    <meta name="keywords" content="Hotel Alicent Calidad Atención Barato Turista">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl" crossorigin="anonymous">
</head>
<body>
    <div class="formulari">
        <h1>Registrarme</h1>
        <form method="post" action="{{ route('validar-registro') }}">
            @csrf
            <div class="registro">
                <div class="nombre">
                    <label for="userInput">Ingrese su nombre completo</label>
                    <input type="text" name="name" id="userInput" required>
                </div>
                <div class="email">
                    <label for="emailInput">Ingrese su dirección de correo electrónico</label>
                    <input type="email" name="email" id="emailInput" required>
                </div>
                <div class="nuevaContraseña">
                    <label for="passwordInput">Cree una contraseña</label>
                    <input type="password" id="passwordInput" name = "password" required>
                </div>
                <div class="nuevaContraseña2">
                    <label>Confirma la contraseña</label>
                    <input type="password" required>
                </div>
            </div>
            
            <input class="btn" type="submit" value="Registrarme">

        </form>
    </div>

</body>
</html>