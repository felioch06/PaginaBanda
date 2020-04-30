<?php
    class UsuariosController extends Usuario{

        private $security;
        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function banda(){
            $title = 'Banda';
            require_once('views/usuario/banda.php');
        }

        //Canciones

        public function canciones(){
            $title = 'Canciones';
            require_once('views/usuario/canciones.php');
        }
        public function storeCanciones(){
            $nombre_cancion = $_POST['nombre_cancion'];
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            parent::storedCanciones($nombre_cancion, $fk_usuario);
            header('location:?class=Usuarios&view=canciones');
        }

        public function eliminarCancion(){
            $id_cancion=$_POST['id'];

            parent::deleteCanciones($id_cancion);

        }

        //fin Canciones

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