<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela de Boxeo Knockout</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <header>
        <div>
            <h1>🥊 Escuela de Boxeo Knockout</h1>
            <p>Aprende técnica, disciplina y rendimiento.</p>
        </div>
        <button id="btn-tema" aria-label="Cambiar tema">🌙 Modo Oscuro</button>
    </header>

    <nav> 
        <button id="btn-menu" aria-label="Abrir menú">☰</button>
        <ul>
            <li><a href="#horarios">Horarios</a></li>
            <li><a href="#clases">Clases</a></li>
            <li><a href="#productos">Tienda</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </nav>

    <main>

        <section id="horarios">
            <h2>Horarios de Entrenamiento</h2>
            <ul>
                <li>Mañana: 08:00 - 10:00</li>
                <li>Tarde: 16:00 - 18:00</li>
                <li>Noche: 19:00 - 21:00</li>
            </ul>
        </section>

        <section id="clases">
            <h2>Nuestras Clases</h2>
            <article>
                <h3>Técnica y Saco</h3>
                <p>Aprende vendaje, postura, desplazamientos y combinaciones de golpes.</p>
            </article>
        </section>

        <section id="productos">
            <div style="display: flex; justify-content: space-between; align-items: center;">
    <h2>Tienda del Gimnasio</h2>

    <div>
        @auth
            <!-- Si está logueado como admin -->
            <a href="/productos/nuevo" style="background-color: #2563eb; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px; font-weight: bold; margin-right: 10px;">
                + Agregar Producto
            </a>
            
            <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" style="background-color: #ef4444; color: white; border: none; padding: 8px 12px; border-radius: 5px; cursor: pointer;">
                    Cerrar Sesión
                </button>
            </form>
        @else
            <!-- Si es un visitante sin sesión -->
            <a href="/login" style="background-color: #10b981; color: white; padding: 8px 12px; text-decoration: none; border-radius: 5px; font-weight: bold;">
                Iniciar Sesión (Admin)
            </a>
        @endauth
    </div>
</div>
        </section>

        <section id="contacto">
            <h2>Contacto e Inscripciones</h2>

            <form id="form-contacto" action="/procesar" method="POST" novalidate>
                @csrf

                <div class="grupo-campo">
                    <label for="nombre">Nombre completo:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej. Juan Pérez" required>
                </div>

                <div class="grupo-campo">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="grupo-campo">
                    <label for="turno">Turno de preferencia:</label>
                    <select id="turno" name="turno" required>
                        <option value="">-- Selecciona un turno --</option>
                        <option value="manana">Mañana</option>
                        <option value="tarde">Tarde</option>
                        <option value="noche">Noche</option>
                    </select>
                </div>

                <div class="grupo-campo">
                    <label for="mensaje">Mensaje o consulta:</label>
                    <textarea id="mensaje" name="mensaje" rows="3" placeholder="¿Tienes alguna duda sobre los entrenamientos?" required></textarea>
                </div>

                <button type="submit">Enviar Solicitud</button>

                <p id="aviso-contacto" class="aviso"></p>
            </form>
        </section>

    </main>

    <footer>
        <p>&copy; 2026 Escuela de Boxeo - Proyecto de Maquetación</p>
    </footer>

    <script src="{{ asset('script.js') }}"></script>

</body>
</html>