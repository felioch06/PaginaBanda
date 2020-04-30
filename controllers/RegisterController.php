<?php
    

    class RegisterController extends Register{

        public function register(){
            $title = 'Register';
            require_once('views/register/register.php');
        }
        public function store(){

            $nombre_usuario = $_POST['nombre_usuario'];
            $correo = $_POST['correo'];
            $pass = md5($_POST['pass']);
            $foto_perfil = 'assets/img/default_user.jpg';
            date_default_timezone_set('America/Bogota');
            $fecha = date('Y-m-d');
            $verify = parent::verify($correo);
            
            if($correo == @$verify->correo){
                header('location:?class=Login&view=login&error=error');            
            }else{
                parent::stored($nombre_usuario,$correo,$pass,$foto_perfil,$fecha);
            
                header('location:?class=Login&view=login&success=success');
            }

             
        }
    }

?>