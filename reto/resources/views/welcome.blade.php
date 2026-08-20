<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iron Boxing | Cursos & Equipamiento Profesional</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body data-bs-spy="scroll" data-bs-target="#navbarMain">

  <nav id="navbarMain" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top border-bottom border-secondary-subtle">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3 text-uppercase" href="#">
        Iron<span class="text-danger">Boxing</span> <i class="fa-solid fa-mitten text-danger ms-1"></i>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-semibold">
          <li class="nav-item"><a class="nav-link active" href="#hero">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#beneficios">¿Por qué nosotros?</a></li>
          <li class="nav-item"><a class="nav-link" href="#cursos">Cursos</a></li>
          <li class="nav-item"><a class="nav-link" href="#tienda">Tienda</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonios">Testimonios</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
        
        <div class="d-flex align-items-center gap-3">
          <div class="input-group input-group-sm me-2" style="width: 110px;">
            <span class="input-group-text bg-dark text-danger border-secondary fw-bold"><i class="fa-solid fa-coins"></i></span>
            <select id="currencySelector" class="form-select bg-dark text-white border-secondary fw-bold">
              <option value="USD" selected>USD ($)</option>
              <option value="BOB">BOB (Bs)</option>
              <option value="EUR">EUR (€)</option>
            </select>
          </div>

          <button class="btn btn-outline-light position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
            <i class="fa-solid fa-cart-shopping me-1"></i> Carrito
            <span id="cartBadge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <header id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
      </div>
      
      <div class="carousel-inner">
        <div class="carousel-item active hero-slide slide-1">
          <div class="carousel-caption d-flex flex-column justify-content-center h-100">
            <div class="container text-center">
              <span class="badge bg-danger text-uppercase px-3 py-2 rounded-pill mb-3 fw-bold tracking-wide">Academia & Equipamiento Elite</span>
              <h1 class="display-3 fw-black text-uppercase mb-3 text-glow">Eleva Tu Nivel En El Ring</h1>
              <p class="lead text-light mx-auto max-w-600 mb-4">
                Domina la técnica del boxeo con instructores profesionales y equípate con implementos de la más alta resistencia.
              </p>
              <div class="d-flex justify-content-center gap-3">
                <a href="#cursos" class="btn btn-danger btn-lg px-4 fw-bold shadow"><i class="fa-solid fa-graduation-cap me-2"></i>Ver Cursos</a>
                <a href="#tienda" class="btn btn-outline-light btn-lg px-4 fw-bold"><i class="fa-solid fa-store me-2"></i>Ir a la Tienda</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item hero-slide slide-2">
          <div class="carousel-caption d-flex flex-column justify-content-center h-100">
            <div class="container text-center">
              <span class="badge bg-danger text-uppercase px-3 py-2 rounded-pill mb-3 fw-bold tracking-wide">Protección Certificada</span>
              <h1 class="display-3 fw-black text-uppercase mb-3 text-glow">Guantes & Equipo Profesional</h1>
              <p class="lead text-light mx-auto max-w-600 mb-4">
                Diseñados ergonómicamente para proteger tus muñecas y nudillos en entrenamientos de alto impacto.
              </p>
              <div class="d-flex justify-content-center gap-3">
                <a href="#tienda" class="btn btn-danger btn-lg px-4 fw-bold shadow"><i class="fa-solid fa-cart-shopping me-2"></i>Comprar Equipamiento</a>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item hero-slide slide-3">
          <div class="carousel-caption d-flex flex-column justify-content-center h-100">
            <div class="container text-center">
              <span class="badge bg-danger text-uppercase px-3 py-2 rounded-pill mb-3 fw-bold tracking-wide">Aprende a Tu Ritmo</span>
              <h1 class="display-3 fw-black text-uppercase mb-3 text-glow">Entrena Donde Quieras</h1>
              <p class="lead text-light mx-auto max-w-600 mb-4">
                Acceso ilimitado a nuestros programas intensivos de preparación física, combinaciones y estrategia.
              </p>
              <div class="d-flex justify-content-center gap-3">
                <a href="#cursos" class="btn btn-danger btn-lg px-4 fw-bold shadow"><i class="fa-solid fa-play me-2"></i>Empieza Hoy</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </header>

  <!-- Beneficios -->
  <section id="beneficios" class="py-5 bg-black text-white border-bottom border-secondary-subtle">
    <div class="container">
      <div class="row g-4 text-center">
        <div class="col-md-3">
          <div class="p-3 benefit-card">
            <i class="fa-solid fa-certificate fs-1 text-danger mb-3 icon-bounce"></i>
            <h5 class="fw-bold">Certificación Oficial</h5>
            <p class="text-muted small mb-0">Avalada por entrenadores profesionales de boxeo.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="p-3 benefit-card">
            <i class="fa-solid fa-shield-halved fs-1 text-danger mb-3 icon-bounce"></i>
            <h5 class="fw-bold">Garantía de Calidad</h5>
            <p class="text-muted small mb-0">Equipamiento duradero probado en entrenamiento real.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="p-3 benefit-card">
            <i class="fa-solid fa-truck-fast fs-1 text-danger mb-3 icon-bounce"></i>
            <h5 class="fw-bold">Envíos Rápidos</h5>
            <p class="text-muted small mb-0">Despacho seguro directo a la puerta de tu hogar.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="p-3 benefit-card">
            <i class="fa-solid fa-headset fs-1 text-danger mb-3 icon-bounce"></i>
            <h5 class="fw-bold">Soporte 24/7</h5>
            <p class="text-muted small mb-0">Asesoría personalizada para la elección de tu equipo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="cursos" class="py-5 bg-dark text-white">
    <div class="container py-4">
      <div class="text-center mb-5">
        <h6 class="text-danger text-uppercase fw-bold">Capacitación On-Demand</h6>
        <h2 class="display-5 fw-bold text-uppercase">Cursos Online de Boxeo</h2>
        <p class="text-secondary">Aprende desde cero o perfecciona tu técnica con metodologías avanzadas.</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-4 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="card-header bg-transparent border-secondary d-flex justify-content-between align-items-center">
              <span class="badge bg-warning text-dark fw-bold">Principiante</span>
              <small class="text-secondary"><i class="fa-regular fa-clock me-1"></i>12 Horas</small>
            </div>
            <div class="card-body">
              <h4 class="card-title fw-bold">Fundamentos & Técnica Base</h4>
              <p class="card-text text-secondary">Aprende postura, desplazamientos, guardia y la biomecánica de los golpes principales (Jab, Directo, Crochet, Uppercut).</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex justify-content-between align-items-center pt-3">
              <span class="fs-4 fw-bold price-tag" data-usd="29.99">$29.99 USD</span>
              <button class="btn-uiverse add-course-btn" data-name="Curso: Fundamentos & Técnica Base" data-price="29.99">
                <i class="fa-solid fa-graduation-cap icon-cart"></i> <span>Inscribirme</span>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="card-header bg-transparent border-secondary d-flex justify-content-between align-items-center">
              <span class="badge bg-primary fw-bold">Intermedio</span>
              <small class="text-secondary"><i class="fa-regular fa-clock me-1"></i>18 Horas</small>
            </div>
            <div class="card-body">
              <h4 class="card-title fw-bold">Combinaciones & Defensa Avanzada</h4>
              <p class="card-text text-secondary">Aumenta la velocidad de manos, domina el cabeceo, esquivas rotacionales, bloqueo dinámico y esquemas de contraataque.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex justify-content-between align-items-center pt-3">
              <span class="fs-4 fw-bold price-tag" data-usd="49.99">$49.99 USD</span>
              <button class="btn-uiverse add-course-btn" data-name="Curso: Combinaciones & Defensa Avanzada" data-price="49.99">
                <i class="fa-solid fa-graduation-cap icon-cart"></i> <span>Inscribirme</span>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="card-header bg-transparent border-secondary d-flex justify-content-between align-items-center">
              <span class="badge bg-danger fw-bold">Avanzado</span>
              <small class="text-secondary"><i class="fa-regular fa-clock me-1"></i>25 Horas</small>
            </div>
            <div class="card-body">
              <h4 class="card-title fw-bold">Preparación Física & Sparring</h4>
              <p class="card-text text-secondary">Acondicionamiento físico de alto rendimiento, estrategias de combate en el ring, gestión del aire y resistencia muscular.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex justify-content-between align-items-center pt-3">
              <span class="fs-4 fw-bold price-tag" data-usd="69.99">$69.99 USD</span>
              <button class="btn-uiverse add-course-btn" data-name="Curso: Preparación Física & Sparring" data-price="69.99">
                <i class="fa-solid fa-graduation-cap icon-cart"></i> <span>Inscribirme</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tienda" class="py-5 bg-black text-white">
    <div class="container py-4">
      <div class="text-center mb-5">
        <h6 class="text-danger text-uppercase fw-bold">Equipamiento Oficial</h6>
        <h2 class="display-5 fw-bold text-uppercase">Artículos de Boxeo Pro</h2>
        <p class="text-secondary">Material técnico diseñado para brindar máxima protección y comodidad.</p>
      </div>

      <div class="row g-4">
        <div class="col-lg-3 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="product-img-box text-center p-4 bg-dark rounded-top overflow-hidden">
              <i class="fa-solid fa-hand-fist display-1 text-danger product-icon"></i>
            </div>
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Protección</span>
              <h5 class="card-title fw-bold">Guantes Pro Sparring 16oz</h5>
              <p class="card-text text-secondary small">Cuero de alta resistencia con relleno de gel multicapa.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex flex-column gap-3 pt-2">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-bold price-tag" data-usd="59.00">$59.00 USD</span>
                <div class="quantity-picker" data-id="p1">
                  <button class="quantity-btn btn-minus">-</button>
                  <span class="quantity-val">1</span>
                  <button class="quantity-btn btn-plus">+</button>
                </div>
              </div>

              <button class="btn-uiverse add-to-cart w-100" data-name="Guantes Pro Sparring 16oz" data-price="59.00" data-picker="p1">
                <i class="fa-solid fa-cart-plus icon-cart"></i> <span>Añadir al Carrito</span>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="product-img-box text-center p-4 bg-dark rounded-top overflow-hidden">
              <i class="fa-solid fa-tape display-1 text-danger product-icon"></i>
            </div>
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Accesorios</span>
              <h5 class="card-title fw-bold">Vendas Elásticas 4.5 Metros</h5>
              <p class="card-text text-secondary small">Algodón elástico respirable con velcro reinforced.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex flex-column gap-3 pt-2">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-bold price-tag" data-usd="12.50">$12.50 USD</span>
                <div class="quantity-picker" data-id="p2">
                  <button class="quantity-btn btn-minus">-</button>
                  <span class="quantity-val">1</span>
                  <button class="quantity-btn btn-plus">+</button>
                </div>
              </div>

              <button class="btn-uiverse add-to-cart w-100" data-name="Vendas Elásticas 4.5m" data-price="12.50" data-picker="p2">
                <i class="fa-solid fa-cart-plus icon-cart"></i> <span>Añadir al Carrito</span>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="product-img-box text-center p-4 bg-dark rounded-top overflow-hidden">
              <i class="fa-solid fa-shield-cat display-1 text-danger product-icon"></i>
            </div>
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Seguridad</span>
              <h5 class="card-title fw-bold">Protector Bucal Doble Densidad</h5>
              <p class="card-text text-secondary small">Moldeable por termofusión, máxima protección.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex flex-column gap-3 pt-2">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-bold price-tag" data-usd="15.00">$15.00 USD</span>
                <div class="quantity-picker" data-id="p3">
                  <button class="quantity-btn btn-minus">-</button>
                  <span class="quantity-val">1</span>
                  <button class="quantity-btn btn-plus">+</button>
                </div>
              </div>

              <button class="btn-uiverse add-to-cart w-100" data-name="Protector Bucal Doble Densidad" data-price="15.00" data-picker="p3">
                <i class="fa-solid fa-cart-plus icon-cart"></i> <span>Añadir al Carrito</span>
              </button>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="card uiverse-card text-white h-100 p-2">
            <div class="product-img-box text-center p-4 bg-dark rounded-top overflow-hidden">
              <i class="fa-solid fa-dumbbell display-1 text-danger product-icon"></i>
            </div>
            <div class="card-body">
              <span class="badge bg-secondary mb-2">Entrenamiento</span>
              <h5 class="card-title fw-bold">Saco Heavy Bag 120cm</h5>
              <p class="card-text text-secondary small">Vinilo extra pesado impermeabilizado con tirantes nylon.</p>
            </div>
            <div class="card-footer bg-transparent border-secondary d-flex flex-column gap-3 pt-2">
              <div class="d-flex justify-content-between align-items-center">
                <span class="fs-5 fw-bold price-tag" data-usd="85.00">$85.00 USD</span>
                <div class="quantity-picker" data-id="p4">
                  <button class="quantity-btn btn-minus">-</button>
                  <span class="quantity-val">1</span>
                  <button class="quantity-btn btn-plus">+</button>
                </div>
              </div>

              <button class="btn-uiverse add-to-cart w-100" data-name="Saco Heavy Bag 120cm" data-price="85.00" data-picker="p4">
                <i class="fa-solid fa-cart-plus icon-cart"></i> <span>Añadir al Carrito</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonios" class="py-5 bg-dark text-white border-top border-secondary-subtle">
    <div class="container py-4">
      <div class="text-center mb-5">
        <h6 class="text-danger text-uppercase fw-bold">Opiniones Comprobadas</h6>
        <h2 class="display-5 fw-bold text-uppercase">Lo Que Dicen Nuestros Alumnos</h2>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 uiverse-card">
            <div class="text-warning mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="fst-italic text-secondary">"El curso de fundamentos cambió completamente mi técnica. Los módulos son super explicativos y claros."</p>
            <h6 class="fw-bold mb-0 text-white">- Carlos Mendoza</h6>
            <small class="text-danger">Alumno de Curso Base</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 uiverse-card">
            <div class="text-warning mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="fst-italic text-secondary">"Los guantes de 16oz llegaron impecables y la amortiguación durante el sparring es superior."</p>
            <h6 class="fw-bold mb-0 text-white">- Andrés Silva</h6>
            <small class="text-danger">Cliente Verificado</small>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 uiverse-card">
            <div class="text-warning mb-2"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
            <p class="fst-italic text-secondary">"Gran calidad en los cursos online y envío rápido de las vendas. Sin duda volveré a adquirir más."</p>
            <h6 class="fw-bold mb-0 text-white">- Fernando Ríos</h6>
            <small class="text-danger">Alumno de la Academia</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contacto" class="py-5 bg-black text-white border-top border-secondary-subtle">
    <div class="container py-4">
      <div class="text-center mb-5">
        <h6 class="text-danger text-uppercase fw-bold">Atención Personalizada</h6>
        <h2 class="display-5 fw-bold text-uppercase">Ponte En Contacto</h2>
        <p class="text-secondary">¿Tienes dudas sobre los cursos o la elección de tu equipamiento? Escríbenos.</p>
      </div>

      <div class="row g-5 align-items-center">
        <div class="col-lg-5">
          <div class="uiverse-card p-4">
            <h4 class="fw-bold text-white mb-4">Información de Contacto</h4>
            
            <div class="d-flex align-items-start mb-4">
              <div class="btn btn-outline-danger btn-sm p-3 me-3 rounded-circle icon-bounce">
                <i class="fa-solid fa-location-dot fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Ubicación</h6>
                <p class="text-secondary small mb-0">Av. Principal de Entrenamientos #450, Centro Deportivo</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="btn btn-outline-danger btn-sm p-3 me-3 rounded-circle icon-bounce">
                <i class="fa-solid fa-envelope fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Correo Electrónico</h6>
                <p class="text-secondary small mb-0">contacto@ironboxing.com</p>
              </div>
            </div>

            <div class="d-flex align-items-start mb-4">
              <div class="btn btn-outline-danger btn-sm p-3 me-3 rounded-circle icon-bounce">
                <i class="fa-solid fa-phone fs-5"></i>
              </div>
              <div>
                <h6 class="fw-bold mb-1">Teléfono / WhatsApp</h6>
                <p class="text-secondary small mb-0">+591 700-00000</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <form id="contactForm" class="uiverse-card p-4 p-md-5" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="contactName" class="form-label text-white fw-bold small">Nombre Completo *</label>
                <input type="text" class="form-control bg-dark text-white border-secondary custom-input" id="contactName" placeholder="Tu nombre" required>
                <div class="invalid-feedback">Por favor, ingresa tu nombre.</div>
              </div>

              <div class="col-md-6">
                <label for="contactEmail" class="form-label text-white fw-bold small">Correo Electrónico *</label>
                <input type="email" class="form-control bg-dark text-white border-secondary custom-input" id="contactEmail" placeholder="correo@ejemplo.com" required>
                <div class="invalid-feedback">Ingresa un correo electrónico válido.</div>
              </div>

              <div class="col-12">
                <label for="contactSubject" class="form-label text-white fw-bold small">Asunto</label>
                <select class="form-select bg-dark text-white border-secondary custom-input" id="contactSubject">
                  <option selected value="Consulta General">Consulta General</option>
                  <option value="Información sobre Cursos">Información sobre Cursos</option>
                  <option value="Consulta sobre Artículos / Equipamiento">Consulta sobre Artículos / Equipamiento</option>
                  <option value="Soporte y Garantías">Soporte y Garantías</option>
                </select>
              </div>

              <div class="col-12">
                <label for="contactMessage" class="form-label text-white fw-bold small">Mensaje *</label>
                <textarea class="form-control bg-dark text-white border-secondary custom-input" id="contactMessage" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                <div class="invalid-feedback">Por favor escribe un mensaje.</div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn-uiverse w-100 py-3 mt-2 fw-bold">
                  <i class="fa-solid fa-paper-plane me-2"></i><span>Enviar Mensaje</span>
                </button>
              </div>
            </div>
            
            <div id="contactAlert" class="alert alert-success mt-4 d-none mb-0" role="alert">
              <i class="fa-solid fa-circle-check me-2"></i> ¡Tu mensaje ha sido enviado exitosamente! Nos pondremos en contacto pronto.
            </div>
            
            <div class="mb-3">
              <label for="stock" class="form-label text-white fw-bold small">Stock / Cupos *</label>
              <input type="number" name="stock" class="form-control bg-dark text-white border-secondary custom-input" id="stock" required>
    
              @error('stock')
                <small class="text-danger">{{ $message }}</small>
              @enderror
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div class="offcanvas offcanvas-end bg-dark text-white" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header border-bottom border-secondary">
      <h5 class="offcanvas-title fw-bold"><i class="fa-solid fa-cart-shopping me-2"></i> Tu Carrito</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
      <div id="cartItemsContainer" class="list-group list-group-flush mb-3">
        <p class="text-center text-secondary py-4" id="emptyCartMsg">El carrito está vacío por el momento.</p>
      </div>
      <div class="border-top border-secondary pt-3">
        <div class="d-flex justify-content-between fs-5 fw-bold mb-3">
          <span>Total:</span>
          <span class="text-danger" id="cartTotal">$0.00 USD</span>
        </div>
        <button class="btn-uiverse w-100 py-2" id="checkoutBtn" disabled>
          <i class="fa-solid fa-credit-card"></i> <span>Finalizar Compra</span>
        </button>
      </div>
    </div>
  </div>

  <footer class="bg-black text-secondary py-5 border-top border-secondary-subtle">
    <div class="container text-center">
      
      <div class="d-flex justify-content-center gap-3 mb-4">
        <a href="https://youtube.com" target="_blank" class="footer-social-link youtube" title="YouTube">
          <i class="fa-brands fa-youtube"></i>
        </a>
        <a href="https://tiktok.com" target="_blank" class="footer-social-link tiktok" title="TikTok">
          <i class="fa-brands fa-tiktok"></i>
        </a>
        <a href="https://facebook.com" target="_blank" class="footer-social-link facebook" title="Facebook">
          <i class="fa-brands fa-facebook-f"></i>
        </a>
      </div>

      <p class="mb-1 text-white-50">&copy; 2026 Iron Boxing Club. Todos los derechos reservados.</p>
      <small class="text-secondary">Diseñado para deportistas y peleadores exigentes.</small>
    </div>
  </footer>

  <div class="container my-5 text-white">
    <h3>Lista de Registros (Stock)</h3>
    <table class="table table-dark table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach(\App\Models\Contacto::all() as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->correo }}</td>
                <td>{{ $item->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('script.js') }}"></script>
</body>
</html>