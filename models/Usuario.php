<?php
    class Usuario extends DB{

        public function updateVisto($fk_usuario,$fk_usuario_para){
            try{
                $str = parent::conectar()->prepare("UPDATE mensajes SET visto = 1 WHERE fk_usuario = ? AND fk_usuario_para = ?");
                $str->bindParam(1,$fk_usuario,PDO::PARAM_INT);
                $str->bindParam(2,$fk_usuario_para,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
        
    }
?>