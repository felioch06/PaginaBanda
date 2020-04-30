<?php
    class Usuario extends DB{

        public function request($correo,$contra){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE correo = ? AND contra = ?");
                $str->bindParam(1,$correo,PDO::PARAM_STR);
                $str->bindParam(2,$contra,PDO::PARAM_STR);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
        

        public function consulta(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultaMensajesNuevos($fk_usuario_para){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios LEFT JOIN mensajes ON usuarios.id_usuario = mensajes.fk_usuario WHERE visto = 0 and fk_usuario_para = ? ORDER BY id_mensaje DESC LIMIT 5 ");
                $str->bindParam(1,$fk_usuario_para,PDO::PARAM_INT);
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultaMensajesAntiguos($fk_usuario_para){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios LEFT JOIN mensajes ON usuarios.id_usuario = mensajes.fk_usuario WHERE visto = 1 and fk_usuario_para = ? ORDER BY id_mensaje DESC LIMIT 5 ");
                $str->bindParam(1,$fk_usuario_para,PDO::PARAM_INT);
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultaUsuariosPorId($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM usuarios WHERE id_usuario = $id");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
        
        public function consultaMensajesUsuario($id_sala){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM mensajes WHERE fk_sala = ? ORDER BY id_mensaje DESC");
                $str->bindParam(1,$id_sala,PDO::PARAM_INT);
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
        public function consultaSala(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM sala");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function searchPersona($persona){
            try{
              $q=parent::conectar()->prepare("SELECT * FROM usuarios WHERE nick_name LIKE ? OR nombres LIKE ?");
              $q->bindParam(1,$persona,PDO::PARAM_STR);
              $q->bindParam(2,$persona,PDO::PARAM_STR);
              $q->execute();
              return $q->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
               die($e->getMessage());
            }
        }

        public function stored($fk_usuario_sala_de,$fk_usuario_sala_para,$fecha){
            try{
                $str = parent::conectar()->prepare("INSERT INTO sala(fk_tipo,fk_usuario_sala_de,fk_usuario_sala_para,fecha) VALUES( 1,$fk_usuario_sala_de,$fk_usuario_sala_para,'$fecha')");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function storedNewMensaje($fk_usuario,$fk_usuario_para,$fk_sala,$mensaje,$fecha_enviado,$hora_enviado){
            try{
                $str = parent::conectar()->prepare("INSERT INTO mensajes(fk_usuario,fk_usuario_para,fk_sala,mensaje,fecha_enviado,hora_enviado) VALUES(?,?,?,?,?,?)");
                $str->bindParam(1,$fk_usuario,PDO::PARAM_INT);
                $str->bindParam(2,$fk_usuario_para,PDO::PARAM_INT);
                $str->bindParam(3,$fk_sala,PDO::PARAM_INT);
                $str->bindParam(4,$mensaje,PDO::PARAM_STR);
                $str->bindParam(5,$fecha_enviado,PDO::PARAM_STR);
                $str->bindParam(6,$hora_enviado,PDO::PARAM_STR);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }


        public function countSala($fk_usuario_sala_de, $fk_usuario_sala_para){
            try{
              $q=parent::conectar()->prepare("SELECT COUNT(*) AS total_salas FROM sala WHERE fk_usuario_sala_de = ? AND fk_usuario_sala_para = ? OR fk_usuario_sala_de = ? AND fk_usuario_sala_para = ?");
              $q->bindParam(1,$fk_usuario_sala_de,PDO::PARAM_INT);
              $q->bindParam(2,$fk_usuario_sala_para,PDO::PARAM_INT);
              $q->bindParam(3,$fk_usuario_sala_para,PDO::PARAM_INT);
              $q->bindParam(4,$fk_usuario_sala_de,PDO::PARAM_INT);
              $q->execute();
              return $q->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
               die($e->getMessage());
            }
        }
        
        public function searchSala($fk_usuario_sala_de, $fk_usuario_sala_para){
            try{
              $q=parent::conectar()->prepare("SELECT * FROM sala WHERE fk_usuario_sala_de = ? AND fk_usuario_sala_para = ? OR fk_usuario_sala_de = ? AND fk_usuario_sala_para = ?");
              $q->bindParam(1,$fk_usuario_sala_de,PDO::PARAM_INT);
              $q->bindParam(2,$fk_usuario_sala_para,PDO::PARAM_INT);
              $q->bindParam(3,$fk_usuario_sala_para,PDO::PARAM_INT);
              $q->bindParam(4,$fk_usuario_sala_de,PDO::PARAM_INT);
              $q->execute();
              return $q->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
               die($e->getMessage());
            }
        }

        public function mensajesUsuarios($mensajes){
            try{
              $q=parent::conectar()->prepare("SELECT * FROM mensajes 
              LEFT JOIN usuarios on usuarios.id_usuario = mensajes.fk_usuario
              WHERE fk_sala = ? ");
              $q->bindParam(1,$mensajes,PDO::PARAM_STR);
              $q->execute();
              return $q->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
               die($e->getMessage());
            }
        }

        public function mensajesUsuario($fk_usuario_para){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM mensajes WHERE fk_usuario_para = ? ORDER BY id_mensaje DESC");
                $str->bindParam(1,$fk_usuario_para,PDO::PARAM_INT);
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }


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