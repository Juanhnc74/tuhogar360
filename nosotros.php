<?php
    include './includes/includes/header.php';
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>
                    10 Años de experiencia
                </blockquote>

                <p>Durante un cuarto de siglo en el negocio de venta de casas, nuestra empresa ha acumulado una vasta experiencia en el mercado inmobiliario. Esta experiencia implica un conocimiento profundo de las tendencias del mercado, la evolución de las preferencias de los compradores y vendedores, así como la capacidad para adaptarse a los cambios en la economía y la industria inmobiliaria.</p>

            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Con mas de 10 años en el ramo de la venta de bienes raices y mas de 500 propiedades vendidas tenemos una trayectoria que nos respalda</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Precio</h3>
                <p>Precios altamente competitivos en el mercado, nos adaptamos a tu presupuesto al igual que contamos con diversos medios de pago.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Entregas en tiempos record, obten tu primera propiedad y disfrutala en el menor lapso posible.</p>
            </div>
        </div>
    </section>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2023 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>