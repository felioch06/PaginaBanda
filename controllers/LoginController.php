<?php
    class LoginController extends Login{

        private $usuario;

        public function __construct(){
            try{
                $this->usuario = new Usuario();
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
            $contra = md5($_POST['contra']);

            $usuario = $this->usuario->request($correo, $contra);

                if($correo == $usuario->correo && $contra == $usuario->contra){
                    $_SESSION['nombres'] = $usuario;
                    header('location:?class=Usuarios&view=index');
                }else{
                    header('location:?class=Login&view=login&noExiste');            
                }
            
        }

        

    }

?>