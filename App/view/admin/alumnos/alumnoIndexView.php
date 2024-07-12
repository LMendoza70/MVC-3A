<div>
    <h1>Administracion de Alumnos</h1>
    <p>
        en esta seccion podremos tener el control de nuestros alumnos
    </p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, illo molestias qui, fugit eos molestiae perspiciatis mollitia aut et saepe reiciendis officia laborum hic nostrum cumque modi, cum quibusdam dolor!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis eius consequatur nemo quam officiis quisquam itaque recusandae. Distinctio tempora ipsa expedita repellat. Obcaecati ut dicta ex voluptatem officia voluptate quod!
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quidem sunt minus, reiciendis nisi dolorem cupiditate, modi dicta fugit sapiente cumque, sit tempora quisquam eaque obcaecati ratione ab cum necessitatibus!
    </p>

    <h3><a href="http://localhost/php-3a?C=alumnoController&M=callInsertForm">Insertar nuevo alumno</a></h3>

    <table border="1">
        <thead>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Edad</td>
                <td>Correo</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datos as $dato){
                    echo "<tr>";
                    echo "<td>" . $dato['nombre'] . "</td>";
                    echo "<td>" . $dato['apellido'] . "</td>";
                    echo "<td>" . $dato['edad'] . "</td>";
                    echo "<td>" . $dato['correo_electronico'] . "</td>";
                    echo "<td> 
                    <button onclick='editar(". $dato['id_alumno'] .")'>Editar</button> 
                    <button onclick='eliminar(". $dato['id_alumno'] .")'>Eliminar</button> 
                    </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <script>
        function editar(id){
            window.location.href="http://localhost/php-3a?C=alumnoController&M=callFormEddit&id="+id;
        }
        function eliminar(id){

            if(confirm("Realmente quieres eliminar al registro "+ id+"?")){
                //alert("registro eliminado")
                window.location.href="http://localhost/php-3a?C=alumnoController&M=delete&id="+id;
            }

            
        }
    </script>
</div>