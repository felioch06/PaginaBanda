<?php
    class Login extends DB{
        public function verify($correo, $pass){
            try{
                $str = parent::conectar()->prepare("SELECT correo, pass FROM usuarios WHERE correo = ? AND pass = ?");
                $str->bindParam(1,$correo,PDO::PARAM_STR);
                $str->bindParam(2,$pass,PDO::PARAM_STR);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

            public function user($correo, $pass){
                try{
                    $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE correo = ? AND pass = ?");
                    $str->bindParam(1,$correo,PDO::PARAM_STR);
                    $str->bindParam(2,$pass,PDO::PARAM_STR);
                    $str->execute();
                    return $str->fetch(PDO::FETCH_OBJ);
                }catch(Exception $e){
                    die('mal'.$e->getMessage());
                }
            }
        
    }
?>