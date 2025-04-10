<?php
require '../../includes/config/database.php';
$db = conectarDB();



require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Crear</h1>
    <a class="boton boton-verde" href="/admind">Volver</a>
    <form class="formulario" method="get" action="/admind/propiedades/crear.php">
        <fieldset>
            <legend>Informacion General</legend>
            <label for="titulo">Titulo</label>
            <input type="text" id="titulo" placeholder="Titulo Propiedad" required>
            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="Precio Propiedad" required>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png" required>
            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" require></textarea>
        </fieldset>
        <fieldset>
            <legend>Informacion Propiedad</legend>
            <label for="habitaciones">Habitaciones</label>
            <input type="number" id="habitaciones" placeholder="Ej: 3" min="1" max="20" required>
            <label for="wc">Baños</label>
            <input type="number" id="wc" placeholder="Ej: 3" min="1" max="29" required>
            <label for="estacionamiento">Estacionamiento</label>
            <input type="number" id="estacionamiento" placeholder="Ej: 3" min="0" max="5" required>
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <select>
                <option value="1">Marco</option>
                <option value="2">Jordi</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>