<?php
    class Security extends DB{
        public function validar_sesion(){
            if(empty($_SESSION['nombres']) || is_null($_SESSION['nombres'])){
                header("location:?class=Login&view=login");
            }
        }

        public function validar_sesion_login(){
            if(@!empty($_SESSION['nombres']) || @!is_null($_SESSION['nombres'])){
                header("location:?class=Usuarios&view=banda");
            }
        }
    }
?>