<?php
    class UsuariosController extends Usuario{

        private $security;
        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function banda(){
            $title = 'Banda';
            require_once('views/usuario/banda.php');
        }

        //canciones

        public function canciones(){
            $title = 'Canciones';
            require_once('views/usuario/canciones.php');
        }
        public function storeCanciones(){
            $cancion = $_POST['nombre_cancion'];
            $cancionVerificado = $this->security->string($cancion);
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            parent::storedCanciones($cancionVerificado, $fk_usuario);
            header('location:?class=Usuarios&view=canciones');
        }

        public function eliminarCancion(){
            $id_cancion=$_POST['id'];

            parent::deleteCanciones($id_cancion);

        }

        public function actualizarCancion(){
            $cancion = parent::buscarCancion($_POST['id']);
            ?>
<i class="close icon"></i>
<div class="header">Actualizar Canción</div>
<div class="content">
    <form action="?class=Usuarios&view=updateCanciones" method="post">

        <div class="ui fluid icon input">
            <input type="text" value="<?php echo $cancion->nombre_cancion ?>" name="nombre_cancion"
                placeholder="Nombre de la Canción" required>
            <input type="hidden" value="<?php echo $cancion->id_cancion ?>" name="id_cancion">
        </div>
        <br><br>
        <button type="submit" class="ui green button">Agragar</button>
    </form>
</div>

<?php
        }

        public function updateCanciones(){
            $nombre_cancion = $_POST['nombre_cancion'];
            $id_cancion = $_POST['id_cancion'];

            parent::updatedCanciones($nombre_cancion,$id_cancion);
            header('location:?class=Usuarios&view=canciones');
        }

        public function actualizarEstadoCancion(){
            $id_cancion = $_REQUEST['id'];
            $cancion = parent::buscarCancion($id_cancion);

            if($cancion->estado == 1){
                parent::updateEstado(0,$id_cancion);
                header('location:?class=Usuarios&view=canciones');
            }else{
                parent::updateEstado(1,$id_cancion);
                header('location:?class=Usuarios&view=canciones');
            }
        }

        //fin Canciones

        //anotaciones

        public function anotaciones(){
            $title = 'Anotaciones';
            require_once('views/usuario/anotaciones.php');
        }
        public function storeAnotaciones(){
            $titulo_anotacion = $_POST['titulo_anotacion'];
            $anotacion = $_POST['anotacion'];
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            parent::storedAnotaciones($titulo_anotacion,$anotacion, $fk_usuario);
            header('location:?class=Usuarios&view=anotaciones');
        }

        public function eliminarAnotacion(){
            $id_anotacion=$_POST['id'];

            parent::deleteAnotaciones($id_anotacion);

        }

        public function actualizarAnotacion(){
            $anotacion = parent::buscarAnotacion($_POST['id']);
            ?>
<i class="close icon"></i>
<div class="header">Actualizar Anotacion</div>
<div class="content">
    <form action="?class=Usuarios&view=updateanotaciones" method="post">
        <div class="ui fluid icon input">
            <input type="text" value="<?php echo $anotacion->titulo_anotacion ?>" name="titulo_anotacion"
                placeholder="Nombre de la Canción" required>
        </div>
        <br>
        <div class="ui fluid icon input">
            <textarea name="anotacion" cols="1000" rows="10" required
                placeholder="Agregar Anotación"> <?php echo $anotacion->anotacion ?></textarea>
            <input type="hidden" value="<?php echo $anotacion->id_anotacion ?>" name="id_anotacion">
        </div>
        <br><br>
        <button type="submit" class="ui green button">Actualizar</button>
    </form>
</div>

<?php
        }

        public function updateAnotaciones(){
            $titulo_anotacion = $_POST['titulo_anotacion'];
            $anotacion = $_POST['anotacion'];
            $id_anotacion = $_POST['id_anotacion'];

            parent::updatedAnotaciones($titulo_anotacion,$anotacion,$id_anotacion);
            header('location:?class=Usuarios&view=anotaciones');
        }

        //fin anotaciones

        //letras

        public function letras(){
            $title = 'Letras';
            require_once('views/usuario/letras.php');
        }
        public function storeLetras(){
            $letra = $_POST['letra'];
            $fk_cancion = $_POST['fk_cancion'];
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            parent::storedLetras($letra,$fk_cancion, $fk_usuario);
            parent::updateLetraDisponible(1,$fk_cancion);
            header('location:?class=Usuarios&view=letras');
        }

        public function eliminarLetra(){
            $id_letra=$_POST['id'];
            
            $letra = parent::buscarletra($id_letra);
            parent::updateLetraDisponible(0,$letra->fk_cancion);
            parent::deleteLetras($id_letra);

        }

        public function actualizarLetra(){
            $letra = parent::buscarLetra($_POST['id']);
            ?>
<i class="close icon"></i>
<div class="header">Actualizar letra</div>
<div class="content">
    <form action="?class=Usuarios&view=updateLetras" method="post">
        <div class="ui form">
            <div class="field">
                <select name="fk_cancion" class="" id="">
                    <?php
                        $canciones = parent::consultarCanciones();
                        foreach($canciones as $cancion){
                    ?>
                    <option value="<?php echo $cancion->id_cancion ?>">
                        <?php echo $cancion->nombre_cancion ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <br>
        <div class="ui fluid icon input">
            <textarea name="letra" cols="1000" rows="10" required
                placeholder="Agregar Anotación"> <?php echo $letra->letra ?></textarea>
            <input type="hidden" value="<?php echo $letra->id_letra ?>" name="id_letra">
            <input type="hidden" value="<?php echo $letra->fk_cancion ?>" name="fk_cancion_anterior">
        </div>
        <br><br>
        <button type="submit" class="ui green button">Actualizar</button>
    </form>
</div>

<?php
        }

        public function updateLetras(){
            
            $letra = $_POST['letra'];
            $fk_cancion = $_POST['fk_cancion'];
            $fk_cancion_anterior = $_POST['fk_cancion_anterior'];
            $id_letra = $_POST['id_letra'];
            
            parent::updateLetraDisponible(0,$fk_cancion_anterior);
            parent::updateLetraDisponible(1,$fk_cancion);
            parent::updatedLetras($letra,$fk_cancion,$id_letra);
            header('location:?class=Usuarios&view=letras');
        }

        //fin Letras

        //partituras

        public function partituras(){
            $title = 'partituras';
            require_once('views/usuario/partituras.php');
        }
        public function storePartituras(){
            $comentario = $_POST['comentario'];
            $fk_cancion = $_POST['fk_cancion'];
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            $route = "assets/img/partituras/";
            $name_file = $_FILES['file']['name'];
            $tpm_name = $_FILES['file']['tmp_name'];
            $imagen_partitura = 'assets/img/partituras/'.$name_file;
            move_uploaded_file($tpm_name,'assets/img/partituras/'. $name_file);

            parent::storedPartituras($imagen_partitura, $comentario, $fk_cancion, $fk_usuario);
            header('location:?class=Usuarios&view=partituras');
        }

        public function eliminarPartitura(){
            $id_partitura=$_POST['id'];
            
            $partitura = parent::buscarPartitura($id_partitura);
            parent::deletePartituras($id_partitura);

        }

        public function actualizarPartitura(){
            $partitura = parent::buscarPartitura($_POST['id']);
            ?>
<i class="close icon"></i>
<div class="header">Actualizar partitura</div>
<div class="content">
    <form action="?class=Usuarios&view=updatepartituras" method="post" enctype="multipart/form-data">
        <div class="ui form">
            <div class="field">
                <select name="fk_cancion" class="" id="">
                    <?php
                        $canciones = parent::consultarCanciones();
                        foreach($canciones as $cancion){
                    ?>
                    <option value="<?php echo $cancion->id_cancion ?>">
                        <?php echo $cancion->nombre_cancion ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <br>
        <div class="ui fluid icon input">
            <textarea name="comentario" cols="1000" rows="10" required
                placeholder="Agregar Anotación"> <?php echo $partitura->comentario ?></textarea>

            <input type="hidden" value="<?php echo $partitura->id_partitura ?>" name="id_partitura">
        </div>
        <br>
        <input type="file" name="imagen" id="file" class="inputfile" />
        <label for="file"> <i class="ui upload icon"></i> Elegir Partitura</label>
        <br><br>
        <button type="submit" class="ui green button">Actualizar</button>
    </form>
</div>

<?php
        }

        public function updatePartituras(){
            
            $comentario = $_POST['comentario'];
            $fk_cancion = $_POST['fk_cancion'];
            $id_partitura = $_POST['id_partitura'];
            
            $route = "assets/img/partituras/";
            $name_file = $_FILES['imagen']['name'];
            $tpm_name = $_FILES['imagen']['tmp_name'];
            $imagen_partitura = 'assets/img/partituras/'.$name_file;
            move_uploaded_file($tpm_name,'assets/img/partituras/'. $name_file);

            echo $name_file;
            echo $tpm_name;
            echo $imagen_partitura;
        }

        //fin partituras

        

        public function album(){
            $title = 'Album';
            require_once('views/usuario/album.php');
        }
        
    }
?>