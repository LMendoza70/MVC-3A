<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTHH Por se siempre los mejores</title>
    <link rel="stylesheet" href="app/view/style.css">

</head>
<body>
    <header class="header">
        <h1>UTHH Por ser siempre los mejores</h1>
        <nav class="navbar">
            <ul>
                <li><a href="http://localhost/php-3a">Inicio</a></li>
                <li><a href="http://localhost/php-3a?C=alumnoController&M=index">Alumnos</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="http://localhost/php-3a?C=usuarioController&M=logedOut">Loged out</a></li>
            </ul>
        </nav> 
    </header>
    <section class="container">
        <?php include_once($vista) ?>
    </section>
    <footer class="footer">
        <h3>Derechos reservados 2024</h3>
    </footer>
    
</body>
</html>