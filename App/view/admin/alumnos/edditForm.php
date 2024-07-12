<div>
    <h1>Editar el registro de <?= $datos['nombre'] ?> <?= $datos['apellido'] ?> </h1>
    <form action="http://localhost/php-3a/?C=alumnoController&M=eddit" method="post">
        <input type="hidden" name="id" value= <?= $datos['id_alumno'] ?>>
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" require value= <?= $datos['nombre'] ?> >
        </div>
        <div>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" require value = <?= $datos['apellido'] ?>>
        </div>
        <div>
            <label for="edad">edad</label>
            <input type="number" name="edad" require value = <?= $datos['edad'] ?>>
        </div>
        <div>
            <label for="correo">Correo electronico</label>
            <input type="email" name="correo" require value = <?= $datos['correo_electronico'] ?>>
        </div>
        <div>
            <label for="fecha">Fecha de nacimiento</label>
            <input type="date" name="fecha" require value = <?= $datos['fecha_nacimiento'] ?>>
        </div>
        <div>
            <input type="submit" value="Eddit">
        </div>
    </form>
</div>