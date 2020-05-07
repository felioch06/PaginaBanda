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

        public function updateLetraDisponible($letra_disponible, $id_cancion){
            try{
                $str = parent::conectar()->prepare("UPDATE canciones SET letra_disponible = ? WHERE id_cancion = ?");
                $str->bindParam(1,$letra_disponible,PDO::PARAM_INT);
                $str->bindParam(2,$id_cancion,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        //Fin Canciones

        //anotaciones
        public function storedAnotaciones($titulo_anotacion,$anotacion,$fk_usuario){
            try{
                $str = parent::conectar()->prepare("INSERT INTO anotaciones(titulo_anotacion,anotacion, fk_usuario) VALUES (?,?,?) ");
                $str->bindParam(1,$titulo_anotacion,PDO::PARAM_STR);
                $str->bindParam(2,$anotacion,PDO::PARAM_STR);
                $str->bindParam(3,$fk_usuario,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultarAnotaciones(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM anotaciones INNER JOIN usuarios ON usuarios.id_usuario = anotaciones.fk_usuario");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function buscarAnotacion($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM anotaciones WHERE id_anotacion = $id");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function deleteAnotaciones($id){
            try{
                $str = parent::conectar()->prepare("DELETE FROM anotaciones WHERE id_anotacion = $id");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updatedAnotaciones($titulo_anotacion,$anotacion,$id_anotacion){
            try{
                $str = parent::conectar()->prepare("UPDATE anotaciones SET titulo_anotacion = ?, anotacion = ? WHERE id_anotacion = ?");
                $str->bindParam(1,$titulo_anotacion,PDO::PARAM_STR);
                $str->bindParam(2,$anotacion,PDO::PARAM_STR);
                $str->bindParam(3,$id_anotacion,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }
        

        //Fin anotaciones

        //letras
        public function storedLetras($letra,$fk_cancion,$fk_usuario){
            try{
                $str = parent::conectar()->prepare("INSERT INTO letras(letra,fk_cancion, fk_usuario) VALUES (?,?,?) ");
                $str->bindParam(1,$letra,PDO::PARAM_STR);
                $str->bindParam(2,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(3,$fk_usuario,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultarLetras(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM letras INNER JOIN usuarios ON usuarios.id_usuario = letras.fk_usuario INNER JOIN canciones ON canciones.id_cancion = letras.fk_cancion");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function buscarletra($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM letras  INNER JOIN canciones ON canciones.id_cancion = letras.fk_cancion WHERE id_letra = $id ");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function deleteLetras($id){
            try{
                $str = parent::conectar()->prepare("DELETE FROM letras WHERE id_letra = $id");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updatedLetras($letra,$fk_cancion,$id_letra){
            try{
                $str = parent::conectar()->prepare("UPDATE letras SET letra = ?, fk_cancion = ? WHERE id_letra = ?");
                $str->bindParam(1,$letra,PDO::PARAM_STR);
                $str->bindParam(2,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(3,$id_letra,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }


        //Fin letras

        //partituras
        public function storedPartituras($imagen_partitura,$comentario,$fk_cancion,$fk_usuario){
            try{
                $str = parent::conectar()->prepare("INSERT INTO partituras(imagen_partitura,comentario,fk_cancion, fk_usuario) VALUES (?,?,?,?) ");
                $str->bindParam(1,$imagen_partitura,PDO::PARAM_STR);
                $str->bindParam(2,$comentario,PDO::PARAM_STR);
                $str->bindParam(3,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(4,$fk_usuario,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultarPartituras(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM partituras INNER JOIN usuarios ON usuarios.id_usuario = partituras.fk_usuario INNER JOIN canciones ON canciones.id_cancion = partituras.fk_cancion ORDER BY fk_cancion ASC");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function buscarPartitura($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM partituras  INNER JOIN canciones ON canciones.id_cancion = partituras.fk_cancion WHERE id_partitura = $id ");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function deletePartituras($id){
            try{
                $str = parent::conectar()->prepare("DELETE FROM partituras WHERE id_partitura = $id");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updatedPartituras($imagen_partitura,$comentario,$fk_cancion,$id_partitura){
            try{
                $str = parent::conectar()->prepare("UPDATE partituras SET imagen_partitura = ?, comentario = ?, fk_cancion = ? WHERE id_partitura = ?");
                $str->bindParam(1,$imagen_partitura,PDO::PARAM_STR);
                $str->bindParam(2,$comentario,PDO::PARAM_STR);
                $str->bindParam(3,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(4,$id_partitura,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }


        //Fin partituras

        //notas
        public function storedNotas($grabacion,$comentario,$fk_cancion,$fk_usuario){
            try{
                $str = parent::conectar()->prepare("INSERT INTO notas(grabacion,comentario,fk_cancion, fk_usuario) VALUES (?,?,?,?) ");
                $str->bindParam(1,$grabacion,PDO::PARAM_STR);
                $str->bindParam(2,$comentario,PDO::PARAM_STR);
                $str->bindParam(3,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(4,$fk_usuario,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function consultarNotas(){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM notas INNER JOIN usuarios ON usuarios.id_usuario = notas.fk_usuario INNER JOIN canciones ON canciones.id_cancion = notas.fk_cancion ORDER BY fk_cancion ASC");
                $str->execute();
                return $str->fetchAll(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function buscarNota($id){
            try{
                $str = parent::conectar()->prepare("SELECT * FROM notas  INNER JOIN canciones ON canciones.id_cancion = notas.fk_cancion WHERE id_nota = $id ");
                $str->execute();
                return $str->fetch(PDO::FETCH_OBJ);
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function deleteNotas($id){
            try{
                $str = parent::conectar()->prepare("DELETE FROM notas WHERE id_nota = $id");
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }

        public function updatedNotas($grabacion,$comentario,$fk_cancion,$id_nota){
            try{
                $str = parent::conectar()->prepare("UPDATE notas SET grabacion = ?, comentario = ?, fk_cancion = ? WHERE id_nota = ?");
                $str->bindParam(1,$grabacion,PDO::PARAM_STR);
                $str->bindParam(2,$comentario,PDO::PARAM_STR);
                $str->bindParam(3,$fk_cancion,PDO::PARAM_INT);
                $str->bindParam(4,$id_nota,PDO::PARAM_INT);
                $str->execute();
            }catch(Exception $e){
                die('mal'.$e->getMessage());
            }
        }


        //Fin notas
        
    }
?>

