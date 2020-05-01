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
                                <button id="modal-add-letra" class="ui black button">Agregar Letra</button>
                            </div>
                            <!-- letras -->
                            <?php  
                                $letras = parent::consultarLetras();

                                foreach($letras as $letra){
                            ?>
                            <div class="eight wide column">
                                <br>
                                <div class="ui piled segment">
                                    <h2><?php echo $letra->nombre_cancion ?></h2>
                                    <h4 class="ui header">Autor: <?php echo $letra->nombre ?></h4>
                                    <p><?php echo $letra->letra ?></p>
                                    <div class="ui divider"></div>
                                    <button class="ui blue button modal-actualizar-letra"
                                        data-id="<?php echo $letra->id_letra ?>">Actualizar</button>
                                    <button class="ui red button modal-eliminar-letra"
                                        data-id="<?php echo $letra->id_letra ?>">Eliminar</button>
                                </div>

                            </div>
                            <?php } ?>
                            <!--fin letras -->

                            <!-- Modal Agregar letras -->
                            <div class=" ui agregar modal">
                                <div class="header">Agregar Nueva Letra</div>
                                <div class="content">
                                    <form action="?class=Usuarios&view=storeletras" method="post">
                                        <div class="ui form">
                                            <div class="field">
                                                <select name="fk_cancion" class="" id="">
                                                    <?php
                                                    $canciones = parent::consultarCanciones();
                                                    foreach($canciones as $cancion){
                                                        if($cancion->letra_disponible == 0){
                                                ?>
                                                    <option value="<?php echo $cancion->id_cancion ?>">
                                                        <?php echo $cancion->nombre_cancion ?></option>
                                                    <?php } } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="ui fluid input">
                                            <textarea name="letra" id="" cols="1000" rows="10" required
                                                placeholder="Agregar Letra"></textarea>
                                        </div>
                                </div>
                                <div class="actions">
                                    <button type="submit" class="ui green button">Agregar</button>
                                    </form>
                                    <div class="ui red cancel button">Cancel</div>
                                </div>
                            </div>
                            <!-- fin modal Agregar letras -->
                            <!-- Modal Actualizar letras -->
                            <div class="ui actualizar modal" id="responseActualizarLetra">

                            </div>
                            <!-- fin modal actualizar letras -->
                            <!-- modal Eliminar letras -->
                            <div class="ui eliminar basic modal">
                                <div class="ui icon header">
                                    <i class="archive icon"></i>
                                    Eliminar Letra
                                </div>
                                <div class="content">
                                    <p>¿Estás seguro que quieres eliminar esta Letra? si la eliminas no podrá ser
                                        recuperada y los de
                                        la banda se cagaran de todo</p>
                                </div>
                                <div class="actions">
                                    <div class="ui green ok inverted button eliminar-letra">
                                        <i class="checkmark icon"></i>
                                        Yes
                                    </div>
                                    <div class="ui red basic cancel inverted button">
                                        <i class="remove icon"></i>
                                        No
                                    </div>
                                </div>
                            </div>
                            <!-- fin Modal Eliminar letras -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>