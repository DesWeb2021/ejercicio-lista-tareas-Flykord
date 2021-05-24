<?php 

    class Tarea {
        private $_id;
        private $_nombre;
        private $_descripcion;
        private $_fecha;
        private $_completada;
        private $_categoria_id;
        private $_usuario_id;

        public function __construct($id, $nombre, $descripcion, $fecha, $completada, $categoria_id, $usuario_id) {
            $this->setId($id);
            $this->setNombre($nombre);
            $this->setDescripcion($descripcion);
            $this->setFecha($fecha);
            $this->setCompletada($completada);
            $this->setCategoriaId($categoria_id);
            $this->setUsuarioId($usuario_id);
        }

        public function getId() {
            return $this->_id;
        }

        public function getNombre() {
            return $this->_nombre;
        }

        public function getDescripcion() {
            return $this->_descripcion;
        }

        public function getFecha() {
            return $this->_fecha;
        }

        public function getCompletada() {
            return $this->_completada;
        }

        public function getCategoriaId() {
            return $this->_categoria_id;
        }

        public function getUsuarioId() {
            return $this->_usuario_id;
        }

        public function setId($id) {
            $this->_id = $id;
        }

        public function setNombre($nombre) {
            $this->_nombre = $nombre;
        }

        public function setDescripcion($descripcion) {
            $this->_descripcion = $descripcion;
        }

        public function setFecha($fecha) {
            $this->_fecha = $fecha;
        }

        public function setCompletada($completada) {
            $this->_completada = $completada;
        }

        public function setCategoriaId($categoria_id) {
            $this->_categoria_id = $categoria_id;
        }

        public function setUsuarioId($usuario_id) {
            $this->_usuario_id = $usuario_id;
        }

        public function returnArray() {
            $tarea = array();

            $tarea["id"] = $this->getId();
            $tarea["nombre"] = $this->getNombre();
            $tarea["descripcion"] = $this->getDescripcion();
            $tarea["fecha"] = $this->getFecha();
            $tarea["completada"] = $this->getCompletada();
            $tarea["categoria_id"] = $this->getCategoriaId();
            $tarea["usuario_id"] = $this->getUsuarioId();

            return $tarea;
        }
    }

?>