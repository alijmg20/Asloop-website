<!--nombre de usuario-->
<div class="form-group">
    <label>
        Nombre de usuario :
    </label>
    <input type="text" class="form-control" name="nombre" placeholder="nombre "<?php $validador->mostrar_nombre() ?>>
    <?php
    $validador->mostrar_error_nombre();
    ?>
</div>

<!--Correo electronico-->
<div class="form-group">
    <label>
        Correo electronico :
    </label>
    <input type="email" class="form-control" name="email" placeholder="ejemplo@example.com"<?php $validador->mostrar_email() ?>>
    <?php
    $validador->mostrar_error_email();
    ?>
</div>

<!--Contraseña-->
<div class="form-group">
    <label>
        Contraseña :
    </label>
    <input type="password" class="form-control" name="clave" placeholder="contraseña">
    <?php
    $validador->mostrar_error_clave1();
    ?>
</div>
<!--repetir la contraseña-->
<div class="form-group">
    <label>
        Repite la contraseña :
    </label>
    <input type="password" class="form-control" name="clave2" placeholder="repetir Contraseña">
    <?php
    $validador->mostrar_error_clave2();
    ?>
</div>
<br>
<button type="submit" class="btn btn-primary" name="registrar"> Registrar</button>
<button type="reset" class="btn btn-primary "> Limpiar</button>