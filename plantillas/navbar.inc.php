

<?php
//Codigo de todos los users registrados

Conexion :: abrirConexion();
$total_usuarios = RepositorioUsuario :: getNumeroUsers(Conexion::getConexion());
Conexion :: cerrarConexion();
?>


<!--barra de arriba negra-->

<nav class="navbar navbar-default navbar-static-top">

    <!--contenedor de la barra negra donde se guardan los botones-->
    <div class="container">
        <!--este header lo que hace es colocar el boton de la pagina principal-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--titulo del boton de la barra -->
            <a class="navbar-brand" href="index.php">AsLoop</a>
        </div>

        <!--botones colocados de Entradas Favoritos y Comentarios-->

        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav"> 
                <li> <a href="#"> <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Entradas  </a> </li>
                <li> <a href="#"> <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Favoritos </a> </li>
                <li> <a href="#"> <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Comentarios </a> </li>
            </ul>

            <!--Botones de Registro e Iniciar Sesion-->

            <ul class="nav navbar-nav navbar-right">  
                <li> 
                    <a href="#"> 
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios Registrados: 
                        <?php
                        echo $total_usuarios;
                        ?>    
                    </a> 
                </li>
                <li> <a href="registro.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Registro </a> </li>
                <li> <a href="#"> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar Sesion </a> </li>                   
            </ul>

        </div>
    </div>
</nav>