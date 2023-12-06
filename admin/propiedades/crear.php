<?php
    include '../../includes/templates/funciones.php';
    incluirTemplate('header');
?>

<link rel="stylesheet" href="/build/css/appp.css">

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin" class="boton boton-verde">volver</a>
        
        <form class= "formulario">

        </form>
           <fieldset> 
            <legend>Informacion General</legend>

            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad">

            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="Precio Propiedad">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accep="image/jpef">

            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion"></textarea>
            
           </fieldset>

           <fieldset>
                 <legend>Informacion Propiedad</legend>

                 <label for="habitaciones">Habitaciones:</label>
                 <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="9">

                 <label for="wc">Baños:</label>
                 <input type="number" id="wc" placeholder="Ej: 3" min="1" max="9">

                 <label for="estacionamiento">Estacionamiento:</label>
                 <input type="number" id="estacionamiento" placeholder="Ej: 3" min="1" max="9">
           
                </fieldset>

                <fieldset>
                    <legend>Vendedor</legend>
                    <select>
                    <option value="1">Juan</option>
                    <option value="2">Arturo</option>
                    </select>
                </fieldset>

                <input type="submit" value="Crer Propiedad" class="boton boton-verde">

        </form>    

    </main>

<?php
    incluirTemplate('footer');
?>