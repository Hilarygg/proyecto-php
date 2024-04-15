<?php
    private $id;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $direccion;
    private $telefono;
    private $correo;
    private $usuario;
    private $password;

    //Creacion del constructaor de la clase
    public function __construct ($nombre, $apaterno, $amaterno, $direccion, $telefono, $correo, $usuario, $password) {
        $this->nombre = $nombre;
        $this->apaterno = $apaterno;
        $this->amaterno = $amaterno;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->usuario = $usuario;
        $this->password = $password;
    }

    //Getters y Setters para cada uno de las propiedades
    public function getId () {
        return $this->id;
    }

    public function setId ($id) {
        $this->id = $id;
    }

    public function getNombre () {
        return $this->nombre;
    }

    public function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    public function getApaterno () {
        return $this->apaterno;
    }

    public function setApaterno ($apaterno) {
        $this->apaterno = $apaterno;
    }

    public function getAmaterno () {
        return $this->amaterno;
    }

    public function setAmaterno ($amaterno) {
        $this->id = $amaterno;
    }

    public function getDireccion () {
        return $this->direccion;
    }

    public function setDireccion ($direccion) {
        $this->direccion = $direccion;
    }

    public function getCorreo () {
        return $this->correo;
    }

    public function setCorreo ($correo) {
        $this->correo = $correo;
    }

    public function getTelefono () {
        return $this->telefono;
    }

    public function setTelefono ($telefono) {
        $this->telefono = $telefono;
    }

    public function getUsuario () {
        return $this->usuario;
    }

    public function setUsuario ($usuario) {
        $this->usuario = $usuario;
    }

    public function getPassword () {
        return $this->password;
    }

    public function setPassword ($password) {
        $this->password = $password;
    }

   
?>