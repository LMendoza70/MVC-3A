<div>
    <h1>Formulario de insertar</h1>
    <form action="http://localhost/php-3a/?C=alumnoController&M=eddit" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" require>
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" require>
        </div>
        <div>
            <label for="edad">edad</label>
            <input type="number" name="edad" require>
        </div>
        <div>
            <label for="correo">Correo electronico</label>
            <input type="email" name="correo" require>
        </div>
        <div>
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" name="fecha" require>
        </div>
        <div>
            <input type="submit" value="Add">
        </div>
    </form>
</div>