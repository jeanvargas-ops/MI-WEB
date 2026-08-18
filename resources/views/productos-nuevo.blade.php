<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <header style="padding: 10px 20px;">
        <h1>Panel de Administración</h1>
        
        <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
            @csrf
            <button type="submit" style="background-color: #334155;">Cerrar Sesión</button>
        </form>
    </header>

    <main style="max-width: 500px; margin: 20px auto;">
        <section>
            <h2>Agregar Nuevo Producto</h2>

            @if(session('exito'))
                <p class="aviso exito" style="display: block;">{{ session('exito') }}</p>
            @endif

            @if($errors->any())
                <div class="aviso error" style="display: block;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/productos/nuevo" method="POST">
                @csrf

                <div class="grupo-campo">
                    <label for="nombre">Nombre del Producto:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ej. Guantes Profesional">
                </div>

                <div class="grupo-campo">
                    <label for="precio">Precio (Bs.):</label>
                    <input type="number" id="precio" name="precio" required placeholder="Ej. 250">
                </div>

                <div class="grupo-campo">
                    <label for="descripcion">Descripción (Opcional):</label>
                    <textarea id="descripcion" name="descripcion" rows="3" placeholder="Detalles del producto..."></textarea>
                </div>

                <button type="submit">Guardar Producto</button>
            </form>

            <br>
            <a href="/" style="color: #2563eb; text-decoration: none;">Ver Catálogo / Inicio</a>
        </section>
    </main>

</body>
</html>