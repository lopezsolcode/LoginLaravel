<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="María Sol López">
    <title>Login</title>
    <meta name="keywords" content="Hotel Alicent Calidad Atención Barato Turista">
    <link rel="stylesheet" href="proyecto\resources\css\style.css">
</head>
<body>
    <div class="formulario">
        @csrf
        <h1>Inicio de sesión</h1>
        <form method="post" action="{{ route('inicia-sesion') }}">
            <div class="username">
                <input type="text" id="emailInput" name="email" required>
                <label for="emailInput">Nombre de Usuario</label>
            </div>
            <div class="username">
                <input type="password" name="password" id="passwordInput" required>
                <label for="passwordInput">Contraseña</label>
            </div>
            <div class="recuerdame">
                <input type="checkbox" id="rememberCheck" name="remember">
                <label for="recuerdame">Recuérdame</label>


            <div class="recordar">¿Olvidó su contraseña?</div>
            <input type="submit" value="Iniciar">
            <div class="registrarse">
                Quiero hacer el <a href="{{ route('register')}}">registro</a>
            </div>

            <button type ="submit" >Iniciar Sesion</button>

        </form>
    </div>

    
</body>
</html>