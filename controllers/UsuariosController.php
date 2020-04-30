<?php
    class UsuariosController extends Usuario{
        
        private $security;

        public function __construct(){
            try{
                $this->security = new Security();
                $this->security->validar_sesion();
            }catch(Exception $e){
                die($e->getMessage);
            }
        }
        
        public function index(){
            $title='Home';
            require_once('views/usuario/index.php');
        }
        
        public function mensajes(){
            $title='Mensajes';
            require_once('views/usuario/mensajes.php');
        }

        public function newMensaje(){

        
            $fk_usuario = $_SESSION['nombres']->id_usuario;
            $fk_usuario_para = $_REQUEST['id_para'];
            $fk_sala = $_REQUEST['id']; 
            $mensaje = $_POST['mensaje'];
            $fecha = date('y-m-d');
            $hora = date('G:i:s');
            parent::storedNewMensaje($fk_usuario, $fk_usuario_para,$fk_sala,$mensaje,$fecha,$hora);
            header('location:?class=Usuarios&view=index&id='.$fk_sala.'&id_para='.$fk_usuario_para);
        }

        public function newChat(){
            $id = $_REQUEST['id'];
            $mio = $_SESSION['nombres']->id_usuario;
        
            $sala = parent::countSala($mio, $id);

            $cantidadSalas=$sala[0]->total_salas;

            if($cantidadSalas == 0){
                $fecha = date('y-m-d G:i:s');
                parent::stored($mio, $id, $fecha);
                $searchSala = parent::searchSala($mio,$id);
                header('location:?class=Usuarios&view=index&id='.$searchSala->id_sala.'&id_para='.$id);
            }else{
                $searchSala = parent::searchSala($mio,$id);
                parent::updateVisto($id,$mio);
                header('location:?class=Usuarios&view=index&id='.$searchSala->id_sala.'&id_para='.$id);
            }                 
        }

        public function searchMensaje(){
                        $id = $_REQUEST['id'];
                        $id_usuario_para = $_REQUEST['id_para'];
                        $mensajes = parent::consultaMensajesUsuario($id); 
                            foreach($mensajes as $r){ 
                        ?>


                        <?php if($_SESSION['nombres']->id_usuario == $r->fk_usuario){ ?>
                        <div class="sixteen wide column">
                            <div class="chat-segment-primary">
                                <span><?php echo $r->hora_enviado ?></span>
                                <br>
                                <span><?php echo $r->mensaje ?></span>
                            </div>
                        </div>
                            <?php }else { ?>

                        <div class="right floated right aligned thirteen wide column">
                            <div class="chat-segment-secondary">
                                <span><?php echo $r->hora_enviado ?></span>
                                <br>
                                <span><?php echo $r->mensaje ?></span>
                            </div>
                        </div>
                            <?php  } } 
        }

        public function searchAjax(){
            $persona = $_POST['busqueda'].'%';
            ?>
                <div class="ui red message">
            <?php
            foreach(parent::searchPersona($persona) as $person){
            ?>
                
                <a href="?class=Usuarios&view=newChat&id=<?php echo $person->id_usuario ?>"><?php echo $person->nombres ?> (<?php echo $person->nick_name ?>)</a>
                <div class="ui divider"></div>
                
            <?php
            }
            ?>
            </div>

            <?php
            
        }

        
    }
?>