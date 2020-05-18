<?php
//iniciar la conexion con la base de datos
include_once 'app/Conexion.inc.php';

//iniciar el conteo de los usuarios
include_once 'app/RepositorioUsuario.inc.php';

include_once 'app/ValidadorRegistro.inc.php';

if (isset($_POST['registrar'])) {
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave'], $_POST['clave2']);

    if ($validador->registro_valido()) {
        $usuario = new Usuario('', $validador->getNombre, $validador->getEmail, $validador->getClave, '', '');
        $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: getConexion,$usuario);
    }
}

$titulo = 'Registro';
//Codigo para incluir la cabecera de un programa html
include_once 'plantillas/documento-declaracion.inc.php';

//barra de arriba negra
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
    <div class="jumbotron">
        <h1 class="text-center"> Registro </h1>

    </div>
</div>
<div class="container">

    <!--Contenedor del panel y explicacion de las instrucciones-->
    <div class="col-md-6 text-center">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Informacion Importante
                </h3>
            </div>
            <div class="panel-body">
                <br>
                <p class="text-justify">
                    AsLoop es un sitio para interactuar, conectarte y 
                    conseguir gente nueva. Para registrarte llena los datos
                    y proporciona informacion real, ya que es verificada a 
                    través de tu correo electronico. Bienvenido a un mundo nuevo
                </p>
                <br>
                <a href="#"> ¿Estás registrado? </a>
                <br>
                <br>
                <a href="#"> ¿Olvidaste tu contraseña? </a>
                <br>
                <br>
            </div>
        </div>
    </div>


    <div class="col-md-6 text-center">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    Ingresa tu informacion.
                </h3>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <?php
                    if (isset($_POST['registrar'])) {
                        include_once 'plantillas/registro_validado.inc.php';
                    } else {
                        include_once 'plantillas/registro_vacio.inc.php';
                    }
                    ?>
                </form>
            </div>
        </div>


    </div>
</div>





<?php
// declaracion del cierre del documento
include_once 'plantillas/documento-cierre.inc.php';

