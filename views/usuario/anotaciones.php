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
                            <div class="sixteen wide column">
                                <button id="modal-add-anotacion" class="ui black button">Agregar Anotación</button>
                            </div>
                            <!-- Anotaciones -->
                            <?php  
                                $anotaciones = parent::consultarAnotaciones();

                                foreach($anotaciones as $anotacion){
                            ?>
                            <div class="eight wide column">
                                <br>
                                <div class="ui piled segment">
                                    <h2 class="ui header"><?php echo $anotacion->titulo_anotacion ?></h2>
                                    <h4 class="ui header">Autor: <?php echo $anotacion->nombre ?></h4>
                                    <p><?php echo $anotacion->anotacion ?></p>
                                    <div class="ui divider"></div>
                                    <button class="ui blue button modal-actualizar-anotacion"
                                        data-id="<?php echo $anotacion->id_anotacion ?>">Actualizar</button>
                                    <button class="ui red button modal-eliminar-anotacion"
                                        data-id="<?php echo $anotacion->id_anotacion ?>">Eliminar</button>
                                </div>

                            </div>
                            <?php } ?>
                            <!--fin Anotaciones -->

                            <!-- Modal Agregar anotaciones -->
                            <div class=" ui agregar modal">
                                <div class="header">Agregar Nueva Anotación</div>
                                <div class="content">
                                    <form action="?class=Usuarios&view=storeAnotaciones" method="post">
                                        <div class="ui fluid icon input">
                                            <input name="titulo_anotacion" required
                                                placeholder="Titulo de la Anotación"></input>
                                        </div>
                                        <br>
                                        <div class="ui fluid icon input">
                                            <textarea name="anotacion" id="" cols="1000" rows="10" required
                                                placeholder="Agregar Anotación"></textarea>
                                        </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="ui green button">Agragar</button>
                                    </form>
                                    <div class="ui red cancel button">Cancel</div>
                                </div>
                            </div>
                            <!-- fin modal Agregar anotaciones -->
                            <!-- Modal Actualizar Anotaciones -->
                            <div class="ui actualizar modal" id="responseActualizarAnotacion">

                            </div>
                            <!-- fin modal actualizar Anotaciones -->
                            <!-- modal Eliminar anotaciones -->
                            <div class="ui eliminar basic modal">
                                <div class="ui icon header">
                                    <i class="archive icon"></i>
                                    Eliminar Anotación
                                </div>
                                <div class="content">
                                    <p>¿Estás seguro que quieres eliminar esta Anotación? si la eliminas no podrá ser
                                        recuperada y los de
                                        la banda se cagaran de todo</p>
                                </div>
                                <div class="actions">
                                    <div class="ui green ok inverted button eliminar-anotacion">
                                        <i class="checkmark icon"></i>
                                        Yes
                                    </div>
                                    <div class="ui red basic cancel inverted button">
                                        <i class="remove icon"></i>
                                        No
                                    </div>
                                </div>
                            </div>
                            <!-- fin Modal Eliminar anotaciones -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>