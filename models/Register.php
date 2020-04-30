<?php
    class Register extends DB{

        public function verify($correo){
            try{
                $str = parent::conectar()->prepare("SELECT correo FROM usuarios WHERE correo = ? ");
                $str->bindParam(1,$correo,PDO::PARAM_STR);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function stored($nick_name,$correo,$contra,$avatar,$fecha_creacion){
            try{
                $str = parent::conectar()->prepare("INSERT INTO usuarios(nick_name,correo,contra,avatar,fecha_creacion) VALUES('$nick_name','$correo','$contra','$avatar','$fecha_creacion')");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
    }
?>