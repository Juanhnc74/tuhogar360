<?php
    include './includes/includes/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>
        <!--Galeria-->
        <div class="containerg">
            
            <div class="img_container">
                <img src="build/img/Img1.png" alt="" class="main_img">
            </div>
    
            <div class="thumbnail_container">
                <img class="thumbnail active" src="build/img/Img1.png" alt="">
                <img class="thumbnail" src="build/img/Img2.png" alt="">
                <img class="thumbnail" src="build/img/Img3.png" alt="">
                <img class="thumbnail" src="build/img/Img4.png" alt="">
            </div>
        </div>
        <br>

        <!--boton vista 360-->
        <div class="botton360">
            
            <a href="http://localhost/app-files/index.html" class="vista360-btn">
                Abrir Vista 
                <img src="build/img/icono_360button.png" alt="">
            </a>
        </div>
        <br>


        <div class="resumen-propiedad">
            <p class="precio">$4,500,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono"  loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <div class="title-cards">
                <h2></h2>
            </div>
        
            <div class="title-cards">
                <h3></h3>
            </div>
          
            <div class="container-card">
          
            <div class="card">
              <figure>
                <img src="build/img/destacada.jpg">
              </figure>
              <div class="contenido-card">
                <h3>UBICACIÓN DE LA PROPIEDAD</h3>
                <a href="https://maps.app.goo.gl/75odFnR5rXdbhS3k9">
                    <img src="build/img/Ubicación.png">
                </a>
                <p</p>
              </div>
            </div>
          
            <div class="card">
              <figure>
                <img src="build/img/INTERIORES.jpg">
              </figure>
              <div class="contenido-card">
                <h3>DETALLES DE LA PROPIEDAD</h3>
                <p>-5 habitaciones.</p>
                <p>-3 baños completos</p>
                <p>-cocina integral</p>
                <p>-Comedor familiar</p>
                <p>-Sala/-Comedor</p>
                <p>-Cochera para 2 vehiculos</p>
              </div>
            </div>
          
            <div class="card">
              <figure>
                <img src="build/img/SERVICIOS.jpg">
              </figure>
              <div class="contenido-card col-4">
                <h3>SERVICIOS</h3>
                <p>-Agua potable</p>
                <p>-Servicio de Energía eléctrica</p>
                <p>-Telefono</p>
                <p>-Internet</p>
                <p>-Drenaje</p>
                <p>-0 adeudos</p>
                <p>-Documentos en orden</p>
                <p>-Contacto: 246 148 1578</p>
              </div>
            </div>
          </div>
            

            <p></p>

            <p></p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.php">Nosotros</a>
                <a href="anuncios.php">Anuncios</a>
                <a href="blog.php">Blog</a>
                <a href="contacto.php">Contacto</a>
            </nav>
        </div>

        <p class="copyright">Todos los derechos Reservados 2021 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>
</html>