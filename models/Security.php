<?php
    class Security extends DB{
        public function validar_sesion(){
            if(empty($_SESSION['nombres']) || is_null($_SESSION['nombres'])){
                header("location:?class=Login&view=login");
            }
        }
    }
?>