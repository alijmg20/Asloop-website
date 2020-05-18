<?php
//creamos la clase Usuario
class Usuario{
    
    //datos sin tipo
    
    //Atributos de la clase
    
    private $id;
    private $nombre;
    private $email;
    private $password;
    private $fecha_registro;
    private $activo;
    
    //constructor de la clase
    public function __construct($id, $nombre, $email, $password, $fecha_registro, $activo) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->fecha_registro = $fecha_registro;
        $this->activo = $activo;
    }
    
//------------------------------------------------------------------------------
    //Metodos getters(devuelven/obtienen) de los atributos
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getFecha_registro() {
        return $this->fecha_registro;
    }

    public function isActivo() {
        return $this->activo;
    }
    
//------------------------------------------------------------------------------
    
    //Metodos set(cabiantes) de los atrbutos
    
    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
    }


    




        
    
    
    
    
}