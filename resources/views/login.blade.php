<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso Administrador</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <main style="max-width: 400px; margin: 50px auto;">
        <section>
            <h2>Ingreso Administrador</h2>

            @if(session('error'))
                <p class="aviso error" style="display: block;">{{ session('error') }}</p>
            @endif

            <form action="/login" method="POST">
                @csrf

                <div class="grupo-campo">
                    <label for="email">Usuario / Email:</label>
                    <input type="text" id="email" name="email" required placeholder="admin">
                </div>

                <div class="grupo-campo">
                    <label for="password">Contraseña:</label>
                    <input type="password" id="password" name="password" required placeholder="admin">
                </div>

                <button type="submit">Entrar</button>
            </form>
            <br>
            <a href="/" style="color: #2563eb; text-decoration: none;">← Volver a la tienda</a>
        </section>
    </main>

</body>
</html>