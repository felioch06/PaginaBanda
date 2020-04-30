<?php require_once('views/layouts/header.php') ?>

<body>
    <?php require_once('views/layouts/banner.php') ?>

    <div class="pusher">
        <div class="ui stackable grid">
            <div class="row">
                <div class="sixteen wide column ">
                    <!-- Banner navbar -->
                    <?php require_once('views/layouts/bannerNav.php') ?>

                    <div class="ui stackable container grid">
                        <div class="row">

                            <div class="two wide column"></div>

                            <div class="twelve wide column">

                                <button id="modal-add-cancion" class="ui black button">Agregar Canción</button>
                                <!-- Tabla de Canciones -->
                                <table class="ui celled table">
                                    <thead>
                                        <tr>
                                            <th>Añadido Por</th>
                                            <th>Nombre Canción</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                            $canciones = parent::consultarCanciones();

                                            foreach($canciones as $cancion){
                                        ?>
                                        <tr class="<?php if($cancion->estado == 1){  echo 'terminada'; } ?>">
                                            <td><?php echo $cancion->nombre ?></td>
                                            
                                            <td><?php echo $cancion->nombre_cancion ?></td>
                                            <td class="ui center aligned">
                                                <a href="?class=Usuarios&view=actualizarEstadoCancion&id=<?php echo $cancion->id_cancion ?>" class="ui green button terminar-cancion"
                                                    data-id="<?php echo $cancion->id_cancion ?>">Terminada</a>
                                                <button class="ui blue button modal-actualizar-cancion"
                                                    data-id="<?php echo $cancion->id_cancion ?>">Actualizar</button>
                                                <button class="ui red button modal-eliminar-cancion"
                                                    data-id="<?php echo $cancion->id_cancion ?>">Eliminar</button>
                                            </td>
                                        </tr>

                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- Fin de la tabla de Canciones -->

                                <!-- Modal Agregar Canciones -->
                                <div class="ui agregar modal">
                                    <div class="header">Agregar Nueva Canción</div>
                                    <div class="content">
                                        <form action="?class=Usuarios&view=storeCanciones" method="post">

                                            <div class="ui fluid icon input">
                                                <input type="text" name="nombre_cancion"
                                                    placeholder="Nombre de la Canción" required>
                                            </div>
                                    </div>
                                    <div class="actions">
                                        <button type="submit" class="ui green button">Agragar</button>
                                        </form>
                                        <div class="ui red cancel button">Cancel</div>
                                    </div>
                                </div>
                                <!-- fin modal Agregar Canciones -->
                                <!-- Modal Actualizar Canciones -->
                                <div class="ui actualizar modal" id="responseActualizarCancion">

                                </div>
                                <!-- fin modal actualizar Canciones -->
                                <!-- modal Eliminar Canciones -->
                                <div class="ui eliminar basic modal">
                                    <div class="ui icon header">
                                        <i class="archive icon"></i>
                                        Eliminar Canción
                                    </div>
                                    <div class="content">
                                        <p>¿Estás seguro que quieres eliminar esta canción? si la eliminas no podrá ser
                                            recuperada y los de
                                            la banda se cagaran de todo</p>
                                    </div>
                                    <div class="actions">
                                        <div class="ui green ok inverted button eliminar-cancion">
                                            <i class="checkmark icon"></i>
                                            Yes
                                        </div>
                                        <div class="ui red basic cancel inverted button">
                                            <i class="remove icon"></i>
                                            No
                                        </div>
                                    </div>
                                </div>
                                <!-- fin Modal Eliminar Canciones -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>