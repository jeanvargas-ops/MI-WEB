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
            <h2>Tienda del Gimnasio</h2>
            <p>Equípate con lo mejor para tus entrenamientos. Pregunta por stock en recepción.</p>
            
            <div class="grid-productos">
                <article class="producto">
                    <span class="icono-producto">🥊</span>
                    <h3>Guantes Pro</h3>
                    <p>Cuero sintético, 14oz y 16oz.</p>
                    <p class="precio">Bs. 250</p>
                </article>

                <article class="producto">
                    <span class="icono-producto">🩹</span>
                    <h3>Vendas de Boxeo</h3>
                    <p>Semi-elásticas, 4.5 metros.</p>
                    <p class="precio">Bs. 35</p>
                </article>

                <article class="producto">
                    <span class="icono-producto">😬</span>
                    <h3>Protector Bucal</h3>
                    <p>Gel moldeable con estuche.</p>
                    <p class="precio">Bs. 50</p>
                </article>

                <article class="producto">
                    <span class="icono-producto">🎒</span>
                    <h3>Saco de Boxeo</h3>
                    <p>1.20m, relleno de alta densidad.</p>
                    <p class="precio">Bs. 450</p>
                </article>

                <article class="producto">
                    <span class="icono-producto">💧</span>
                    <h3>Pera de Velocidad</h3>
                    <p>Cuero genuino, incluye gancho.</p>
                    <p class="precio">Bs. 180</p>
                </article>
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