<?php
    

    class RegisterController extends Register{

        private $security;

        public function __construct(){
            try{
                $this->security = new Security();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function register(){
            $title = 'Register';
            require_once('views/register/register.php');
        }
        public function store(){

            $nombre= $_POST['nombre'];
            $nombreVerificado = $this->security->string($nombre);
            $correo = $_POST['correo'];
            $correoVerificado = $this->security->email($correo);
            $pass = $this->security->encrypt($_POST['pass']);
            $verify = parent::verify($correo);
            
            if($correo == @$verify->correo){
                header('location:?class=Login&view=login&yaExiste');            
            }else{
                parent::stored($nombreVerificado,$correoVerificado,$pass);
            
                header('location:?class=Login&view=login&success');
            }

             
        }
    }

?>