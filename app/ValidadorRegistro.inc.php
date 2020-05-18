<?php

class ValidadorRegistro {

    private $aviso_inicio;
    private $aviso_cierre;
    
    private $nombre;
    private $email;
    private $clave;
    
    private $error_nombre;
    private $error_email;
    private $error_clave1;
    private $error_clave2;

    public function __construct($nombre, $email, $clave1, $clave2) {

        $this->aviso_inicio = "<br><div class='alert alert-danger' role='alert'>";
        $this->aviso_cierre = "</div>";

        $this->nombre = "";
        $this->email = "";
        $this->clave = "";

        $this->error_nombre = $this->validar_Nombre($nombre);
        $this->error_email = $this->validar_Email($email);
        $this->error_clave1 = $this->validar_clave1($clave1);
        $this->error_clave2 = $this->validar_clave2($clave1, $clave2);
        
        if($this->error_clave1 === "" && $this->error_clave2 === ""){
            $this->clave = $clave1;
        }
        
    }

    private function variable_iniciada($variable) {
        if (isset($variable) && !empty($variable)) {
            return true;
        }
        return false;
    }

    private function validar_Nombre($nombre) {
        if (!$this->variable_iniciada($nombre)) {
            return "Faltan campos sin rellenar";
        } else {
            $this->nombre = $nombre;
        }
        if (strlen($nombre) < 6) {
            return "el nombre debe tener mas caracteres";
        }

        if (strlen($nombre) > 24) {
            return "el nombre no puede ocupar mas de 24 caracteres";
        }
        return "";
    }

    private function validar_Email($email) {
        if (!$this->variable_iniciada($email)) {
            return "Debes ingresar un email";
        } else {
            $this->email = $email;
        }

        return "";
    }

    private function validar_clave1($clave) {
        if (!$this->variable_iniciada($clave)) {
            return "Debes ingresar una contraseña";
        }

        return "";
    }

    private function validar_clave2($clave1, $clave2) {
        if (!$this->variable_iniciada($clave1)) {
            return "Primero debes rellenar la contraseña";
        }
        if (!$this->variable_iniciada($clave2)) {
            return "Debes repetir tu contraseña";
        }
        if ($clave1 !== $clave2) {
            return "ambas contraseñas deben coincidir";
        }
        return "";
    }

//------------------------------------------------------------------------------
    //metodos geters de la clase
    
    

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }
    
    
    public function getClave() {
        return $this->clave;
    }

        

    public function getError_nombre() {
        return $this->error_nombre;
    }

    public function getError_email() {
        return $this->error_email;
    }

    public function getError_clave1() {
        return $this->error_clave1;
    }

    public function getError_clave2() {
        return $this->error_clave2;
    }

    public function mostrar_nombre() {
        if ($this->nombre !== "") {
            echo 'value="' . $this->nombre . '"';
        }
    }

    public function mostrar_error_nombre() {
        if ($this->error_nombre !== "") {
            echo $this->aviso_inicio . $this->error_nombre . $this->aviso_cierre;
        }
    }

    public function mostrar_email() {
        if ($this->email !== "") {
            echo 'value="' . $this->email . '"';
        }
    }

    public function mostrar_error_email() {
        if ($this->error_email !== "") {
            echo $this->aviso_inicio . $this->error_email . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave1() {
        if ($this->error_clave1 !== "") {
            echo $this->aviso_inicio . $this->error_clave1 . $this->aviso_cierre;
        }
    }

    public function mostrar_error_clave2() {
        if ($this->error_clave2 !== "") {
            echo $this->aviso_inicio . $this->error_clave2 . $this->aviso_cierre;
        }
    }
    
    public function registro_valido(){
        if($this->error_nombre === "" && $this->error_email === "" && $this->error_clave1 === ""&& $this->error_clave2 === ""){
            return true;
        }else{
            return false;
        }
    }

}
