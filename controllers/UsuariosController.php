<?php
    class UsuariosController extends Usuario{
        public function banda(){
            $title = 'Banda';
            require_once('views/usuario/banda.php');
        }

        public function canciones(){
            $title = 'Canciones';
            require_once('views/usuario/canciones.php');
        }

        public function anotaciones(){
            $title = 'Anotaciones';
            require_once('views/usuario/anotaciones.php');
        }

        public function album(){
            $title = 'Album';
            require_once('views/usuario/album.php');
        }

        public function letras(){
            $title = 'Letras';
            require_once('views/usuario/letras.php');
        }
        
        public function partituras(){
            $title = 'Partituras';
            require_once('views/usuario/partituras.php');
        }
        
    }
?>