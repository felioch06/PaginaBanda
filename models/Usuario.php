<?php
    class Usuario extends DB{

        //Canciones
        public function storedCanciones($nombre_cancion,$fk_usuario){
            try{
                $str = parent::conectar()->prepare("INSERT INTO canciones(nombre_cancion, fk_usuario) VALUES (?,?) ");
                $str->bindParam(1,$nombre_cancion,PDO::PARAM_STR);
                $str->bindParam(2,$fk_usuario,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultarCanciones(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM canciones INNER JOIN usuarios ON usuarios.id_usuario = canciones.fk_usuario");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function buscarCancion($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM canciones WHERE id_cancion = $id");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function deleteCanciones($id){
            try{
                $str = parent::conectar()->prepare("DELETE FROM canciones WHERE id_cancion = $id");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updatedCanciones($nombre_cancion,$id_cancion){
            try{
                $str = parent::conectar()->prepare("UPDATE canciones SET nombre_cancion = ? WHERE id_cancion = ?");
                $str->bindParam(1,$nombre_cancion,PDO::PARAM_STR);
                $str->bindParam(2,$id_cancion,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updateEstado($estado,$id_cancion){
            try{
                $str = parent::conectar()->prepare("UPDATE canciones SET estado = ? WHERE id_cancion = ?");
                $str->bindParam(1,$estado,PDO::PARAM_STR);
                $str->bindParam(2,$id_cancion,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        //Fin Canciones
        
    }
?>

