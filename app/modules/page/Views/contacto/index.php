<style>
  .contenedor-contacto-dos-columnas {
    margin-top: 10vh;
    margin-bottom: 5vh;
    min-height: 600px;
  }

  .contenedor-contacto-dos-columnas .row {
    display: flex;
    flex-wrap: wrap;
    align-items: flex-start;
    gap: 0;
  }

  .formulario-contacto {
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-color) 100%);
    border-radius: 15px;
    padding: 1.8rem 1.5rem;
    margin: 0;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    height: fit-content;
    width: 100%;

  }

  .info-contacto {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    padding: 2rem;
    margin: 0;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    height: fit-content;

    top: 2rem;
    width: 100%;
  }

  /* Responsive */
  @media (max-width: 991px) {
    .contenedor-contacto-dos-columnas {
      flex-direction: column;
      gap: 2rem;
    }

    .info-contacto {
      position: static;
      order: 1;
    }

    .formulario-contacto {
      order: 2;
    }
  }

  .formulario-contacto::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse"><path d="M 10 0 L 0 0 0 10" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100" height="100" fill="url(%23grid)"/></svg>');
    pointer-events: none;
  }

  .formulario-contacto .titulo-formulario {
    text-align: center;
    color: var(--accent-color);
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 0.3rem;
    position: relative;
  }

  .formulario-contacto .subtitulo-formulario {
    text-align: center;
    color: rgba(255, 255, 255, 0.8);
    font-weight: 300;
    font-size: 0.95rem;
    margin-bottom: 1.5rem;
  }

  .grupo-campo {
    margin-bottom: 1rem;
  }

  .grupo-campo label {
    display: block;
    color: var(--accent-color);
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
    text-transform: none;
    letter-spacing: 0.5px;
  }

  .campo-input {
    width: 100%;
    padding: 0.8rem 1rem;
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.95);
    color: var(--gris-oscuro);
    font-size: 0.95rem;
    font-weight: 400;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
  }

  .campo-input:focus {
    outline: none;
    border-color: var(--secondary-color);
    background: rgba(255, 255, 255, 1);
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
  }

  .campo-input::placeholder {
    color: var(--gris-medio);
    font-weight: 300;
    opacity: 0.7;
  }

  .campo-textarea {
    min-height: 80px;
    resize: vertical;
    font-family: inherit;
  }

  .grupo-checkbox {
    display: flex;
    align-items: flex-start;
    gap: 0.6rem;
    margin: 1rem 0;
    position: relative;
    z-index: 2;
  }

  .checkbox-custom {
    width: 20px;
    height: 20px;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.1);
    cursor: pointer;
    transition: all 0.3s ease;
    flex-shrink: 0;
    margin-top: 2px;
  }

  .checkbox-custom:hover {
    border-color: var(--secondary-color);
    background: rgba(255, 255, 255, 0.2);
  }

  .checkbox-custom input[type="checkbox"] {
    display: none;
  }

  .checkbox-custom input[type="checkbox"]:checked+.checkmark {
    background: var(--secondary-color);
    border-color: var(--secondary-color);
  }

  .checkbox-custom input[type="checkbox"]:checked+.checkmark::after {
    content: '✓';
    color: var(--accent-color);
    font-weight: bold;
    font-size: 14px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .checkmark {
    width: 100%;
    height: 100%;
    border-radius: 4px;
    transition: all 0.3s ease;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .texto-checkbox {
    color: var(--accent-color);
    font-size: 0.9rem;
    line-height: 1.4;
  }

  .texto-checkbox a {
    color: var(--secondary-color);
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .texto-checkbox a:hover {
    color: var(--accent-color);
    text-decoration: underline;
  }

  .captcha-container {
    margin: 1rem 0;
    position: relative;
    z-index: 2;
  }

  .btn-enviar {
    width: 100%;
    background: linear-gradient(135deg, var(--secondary-color) 0%, #ffa500 100%);
    color: var(--accent-color);
    border: none;
    padding: 0.9rem 1.5rem;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.8px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    box-shadow: 0 6px 20px rgba(249, 180, 1, 0.3);
  }

  .btn-enviar:hover {
    transform: translateY(-3px);
    box-shadow: 0 12px 35px rgba(249, 180, 1, 0.4);
    background: linear-gradient(135deg, #ffa500 0%, var(--secondary-color) 100%);
  }

  .btn-enviar:active {
    transform: translateY(-1px);
  }

  .fila-campos {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1rem;
  }

  .info-contacto {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 20px;
    padding: 2rem;
    margin: 0;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    height: fit-content;
    position: sticky;
    top: 2rem;
  }

  .info-contacto .titulo-info {
    color: var(--primary-color);
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    text-align: center;
  }

  .item-info {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 0.8rem 0;
    border-bottom: 1px solid var(--gris-claro);
  }

  .item-info:last-child {
    border-bottom: none;
  }

  .icono-info {
    width: 45px;
    height: 45px;
    background: var(--tertiary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--accent-color);
    font-size: 1.2rem;
    flex-shrink: 0;
  }

  .texto-info {
    flex: 1;
  }

  .texto-info .label {
    font-weight: 600;
    color: var(--primary-color);
    font-size: 0.9rem;
    display: block;
    margin-bottom: 0.2rem;
  }

  .texto-info .valor {
    color: var(--gris-oscuro);
    font-size: 1rem;
    font-weight: 400;
  }

  /* Responsive */
  @media (min-width: 992px) {
    .contenedor-contacto-dos-columnas .col-lg-5 {
      flex: 0 0 41.66666667%;
      max-width: 41.66666667%;
      padding-right: 1rem;
    }

    .contenedor-contacto-dos-columnas .col-lg-7 {
      flex: 0 0 58.33333333%;
      max-width: 58.33333333%;
      padding-left: 1rem;
    }
  }

  @media (max-width: 991px) {
    .contenedor-contacto-dos-columnas {
      flex-direction: column;
    }

    .contenedor-contacto-dos-columnas .col-lg-5,
    .contenedor-contacto-dos-columnas .col-lg-7 {
      flex: 0 0 100%;
      max-width: 100%;
      padding: 0;
    }

    .info-contacto {
      position: static;
      margin-bottom: 2rem;
    }
  }

  @media (max-width: 768px) {
    .contenedor-contacto-dos-columnas {
      margin: 1.5rem 0;
    }

    .formulario-contacto {
      padding: 1.5rem 1.2rem;
    }

    .formulario-contacto .titulo-formulario {
      font-size: 1.6rem;
    }

    .fila-campos {
      grid-template-columns: 1fr;
      gap: 0.8rem;
    }

    .info-contacto {
      padding: 1.5rem;
    }
  }

  @media (max-width: 480px) {
    .formulario-contacto {
      padding: 1.2rem 1rem;
      border-radius: 12px;
    }

    .formulario-contacto .titulo-formulario {
      font-size: 1.4rem;
    }

    .campo-input {
      padding: 0.7rem 0.9rem;
    }

    .info-contacto {
      padding: 1rem;
      border-radius: 12px;
    }
  }
</style>
<?php echo $this->banner ?>
<div class="contenido-nosotros contenido-interna overflow-hidden">
  <?php echo $this->contenido ?>
  <?php $infopageModel = new Page_Model_DbTable_Informacion();
  $infopage = $infopageModel->getById(1);
  ?>

  <!-- Contenedor en dos columnas -->
  <div class="container">
    <div class="row contenedor-contacto-dos-columnas">
      <!-- Columna izquierda - Información de Contacto -->
      <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
        <div class="info-contacto">
          <h3 class="titulo-info">Información de Contacto</h3>
          <div class="item-info">
            <div class="icono-info">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="texto-info">
              <span class="label">Dirección</span>
              <span class="valor"><?php echo $infopage->info_pagina_direccion_contacto; ?></span>
            </div>
          </div>
          <div class="item-info">
            <div class="icono-info">
              <i class="fas fa-phone"></i>
            </div>
            <div class="texto-info">
              <span class="label">Teléfono</span>
              <span class="valor"><?php echo $infopage->info_pagina_telefono; ?></span>
            </div>
          </div>
          <div class="item-info">
            <div class="icono-info">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="texto-info">
              <span class="label">Email</span>
              <span class="valor"><?php echo $infopage->info_pagina_correos_contacto; ?></span>
            </div>
          </div>

        </div>
      </div>

      <!-- Columna derecha - Formulario de Contacto -->
      <div class="col-lg-7 col-md-12">
        <div class="formulario-contacto">
          <h2 class="titulo-formulario">¡Contáctanos!</h2>
          <p class="subtitulo-formulario">Estamos aquí para ayudarte. Completa el formulario y te responderemos pronto.</p>

          <form id="formularioContacto" action="#" method="POST">
            <div class="fila-campos">
              <div class="grupo-campo">
                <label for="nombre">Nombre completo *</label>
                <input type="text" id="nombre" name="nombre" class="campo-input" placeholder="Tu nombre completo" required>
              </div>

              <div class="grupo-campo">
                <label for="email">Correo electrónico *</label>
                <input type="email" id="email" name="email" class="campo-input" placeholder="tu@email.com" required>
              </div>
            </div>

            <div class="fila-campos">
              <div class="grupo-campo">
                <label for="telefono">Teléfono de contacto *</label>
                <input type="tel" id="telefono" name="telefono" class="campo-input" placeholder="Tu número de teléfono" required>
              </div>

              <div class="grupo-campo">
                <label for="ciudad">Ciudad</label>
                <input type="text" id="ciudad" name="ciudad" class="campo-input" placeholder="Tu ciudad">
              </div>
            </div>

            <div class="grupo-campo">
              <label for="asunto">Asunto</label>
              <input type="text" id="asunto" name="asunto" class="campo-input" placeholder="¿De qué quieres hablar?">
            </div>

            <div class="grupo-campo">
              <label for="mensaje">Comentario o mensaje *</label>
              <textarea id="mensaje" name="mensaje" class="campo-input campo-textarea" placeholder="Cuéntanos lo que necesitas..." required></textarea>
            </div>

            <div class="grupo-checkbox">
              <div class="checkbox-custom">
                <input type="checkbox" id="politicas" name="politicas" required>
                <div class="checkmark"></div>
              </div>
              <label for="politicas" class="texto-checkbox">
                Acepto las <a href="#" data-bs-toggle="modal" data-bs-target="#modalPoliticas">políticas de privacidad</a> y autorizo el tratamiento de mis datos personales.
              </label>
            </div>

            <div class="captcha-container">
              <!-- Aquí iría el reCAPTCHA -->
              <div class="g-recaptcha" data-sitekey="tu-site-key-aqui"></div>
            </div>

            <button type="submit" class="btn-enviar">
              <i class="fas fa-paper-plane"></i> Enviar mensaje
            </button>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- Modal para Políticas de Privacidad -->
  <div class="modal fade modalPoliticas" id="modalPoliticas" tabindex="-1" aria-labelledby="modalPoliticasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalPoliticasLabel">Políticas de Privacidad</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>1. Recopilación de Información:</strong> Recopilamos información personal que nos proporciona voluntariamente cuando se pone en contacto con nosotros.</p>

          <p><strong>2. Uso de la Información:</strong> Utilizamos su información personal para:</p>
          <ul>
            <li>Responder a sus consultas y solicitudes</li>
            <li>Proporcionarle información sobre nuestros servicios</li>
            <li>Mejorar nuestros servicios</li>
          </ul>

          <p><strong>3. Protección de Datos:</strong> Implementamos medidas de seguridad apropiadas para proteger su información personal.</p>

          <p><strong>4. No Compartimos su Información:</strong> No vendemos, comercializamos ni transferimos su información personal a terceros sin su consentimiento.</p>

          <p><strong>5. Sus Derechos:</strong> Tiene derecho a acceder, actualizar o eliminar su información personal en cualquier momento.</p>

          <p>Para más información sobre nuestras políticas de privacidad, puede contactarnos directamente.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Validación del formulario
    const formulario = document.getElementById('formularioContacto');

    formulario.addEventListener('submit', function(e) {
      e.preventDefault();

      // Validación básica
      const nombre = document.getElementById('nombre').value.trim();
      const email = document.getElementById('email').value.trim();
      const telefono = document.getElementById('telefono').value.trim();
      const mensaje = document.getElementById('mensaje').value.trim();
      const politicas = document.getElementById('politicas').checked;

      if (!nombre || !email || !telefono || !mensaje || !politicas) {
        alert('Por favor, completa todos los campos obligatorios y acepta las políticas de privacidad.');
        return;
      }

      // Validación de email
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Por favor, ingresa un email válido.');
        return;
      }

      // Si llega aquí, el formulario es válido
      // Aquí puedes agregar el código para enviar el formulario
      alert('¡Gracias por contactarnos! Te responderemos pronto.');

      // Opcional: resetear el formulario
      formulario.reset();
    });

    // Animación suave para los campos al hacer foco
    const campos = document.querySelectorAll('.campo-input');
    campos.forEach(campo => {
      campo.addEventListener('focus', function() {
        this.parentElement.classList.add('campo-activo');
      });

      campo.addEventListener('blur', function() {
        if (!this.value) {
          this.parentElement.classList.remove('campo-activo');
        }
      });
    });
  });
</script>