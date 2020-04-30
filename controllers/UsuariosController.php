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
            $anotacion = $_POST['anotacion'];
            $fk_usuario = $_SESSION['nombres']->id_usuario;

            parent::storedCanciones($anotacion, $fk_usuario);
            header('location:?class=Usuarios&view=canciones');
        }

        public function eliminarCancion(){
            $id_cancion=$_POST['id'];

            parent::deleteCanciones($id_cancion);

        }

        public function actualizarCancion(){
            $cancion = parent::buscarCancion($_POST['id']);
            ?>
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
        <div class="ui red cancel button">Cancel</div>
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
<div class="header">Actualizar Anotacion</div>
<div class="content">
    <form action="?class=Usuarios&view=updateanotaciones" method="post">
        <div class="ui fluid icon input">
            <input type="text" value="<?php echo $anotacion->titulo_anotacion ?>" name="titulo_anotacion"
                placeholder="Nombre de la Canción" required>
        </div>
        <br>
        <div class="ui fluid icon input">
            <textarea name="anotacion"  cols="1000" rows="10" required
                placeholder="Agregar Anotación"> <?php echo $anotacion->anotacion ?></textarea>
            <input type="hidden" value="<?php echo $anotacion->id_anotacion ?>" name="id_anotacion">
        </div>
        <br><br>
        <button type="submit" class="ui green button">Actualizar</button>
        <div class="ui red cancel button">Cancel</div>
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

        

        public function album(){
            $title = 'Album';
            require_once('views/usuario/album.php');
        }

        public function letras(){
            $title = 'Letras';
            require_once('views/usuario/letras.php');
        }
        
        public function partituras(){
            $title = 'Partituras';
            require_once('views/usuario/partituras.php');
        }
        
    }
?>