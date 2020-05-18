<?php
//iniciar la conexion con la base de datos
include_once 'app/Conexion.inc.php';

//iniciar el conteo de los usuarios
include_once 'app/RepositorioUsuario.inc.php';
$titulo = 'AsLoop';
//Codigo para incluir la cabecera de un programa html
include_once 'plantillas/documento-declaracion.inc.php';

//barra de arriba negra
include_once 'plantillas/navbar.inc.php';
?>


    <!--barra de arriba negra-->

    <div class="container">

        <div class="jumbotron">

            <h1>AsLoop</h1>

            <p>

                Live your dreams

            </p>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>  Búsqueda
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="¿Que desea buscar?">
                                </div>
                                <button class="form-control">
                                    Buscar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                            </div>
                            <div class="panel-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="panel panel-default">

                    <div class="panel-heading">

                        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>  Ultimas Entradas

                    </div>

                    <div class="panel-body">
                        <div class="form-group">

                            <?php
//                                include_once 'app/Conexion.inc.php';
//                                Conexion::abrirConexion();
//                                Conexion::cerrarConexion();
//                                
                            ?>

                            <p>Todavia no hay entradas por mostrar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php
include_once 'plantillas/documento-cierre.inc.php';