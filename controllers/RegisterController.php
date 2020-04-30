<?php
    

    class RegisterController extends Register{

        public function register(){
            $title = 'Register';
            require_once('views/register/register.php');
        }
        public function store(){

            $nombre= $_POST['nombre'];
            $correo = $_POST['correo'];
            $pass = md5($_POST['pass']);
            $verify = parent::verify($correo);
            
            if($correo == @$verify->correo){
                header('location:?class=Login&view=login&yaExiste');            
            }else{
                parent::stored($nombre,$correo,$pass);
            
                header('location:?class=Login&view=login&success');
            }

             
        }
    }

?>