<div class="ui white secondary pointing banner menu">
  <a href="?class=Usuarios&view=index" class="active item">
    Home
  </a>
  
  <a href="?class=Usuarios&view=mensajes" class="active item">
    Mensajes
    <?php
      $mensajesUser = parent::mensajesUsuario($_SESSION['nombres']->id_usuario);
      if(@$mensajesUser->visto == 0){
    ?>
    <i class="ui tiny circle icon"></i>
    <?php } ?>
  </a>

  
  <?php if(isset($_SESSION['nombres'])){ ?>
  <div class="right menu">
  <a class="ui item">

      <div class="dropdown">
        <span>
        <?php echo $_SESSION['nombres']->nick_name?>
        </span>
        <div class="dropdown-content">
      </div>
      </div>

    </a>
    <a href="?class=Security&view=salir" class="ui item">
      Logout
    </a>
  </div>
  <?php }?>
</div>
                 
