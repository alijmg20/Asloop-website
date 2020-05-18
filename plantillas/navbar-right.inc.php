<?php
//Codigo de todos los users registrados

Conexion :: abrirConexion();
$total_usuarios = RepositorioUsuario :: getNumeroUsers(Conexion::getConexion());
Conexion :: cerrarConexion();
?>


<ul class="nav navbar-nav navbar-right">  
    <li> 
        <a href="#"> 
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios Registrados: 
            <?php
            echo $total_usuarios;
            ?>    
        </a> 
    </li>
    <li> <a href="registro.php"> Registro </a> </li>
    <li> <a href="#"> Iniciar Sesion </a> </li>                   
</ul>