<?php
    class LoginController extends Login{

        private $security;

        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion_login();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function login(){
            $title = 'Login';
            require_once('views/login/login.php');
        }

        public function auth(){
            $correo = $_POST['correo'];
            $pass = $this->security->encrypt($_POST['pass']);

            $usuario = parent::verify($correo, $pass);

                if($correo == $usuario->correo && $pass == $usuario->pass){
                    $_SESSION['nombres'] = parent::user($correo, $pass);
                    header('location:?class=Usuarios&view=banda');
                }else{
                    header('location:?class=Login&view=login&noExiste');            
                }
            
        }

        

    }

?>