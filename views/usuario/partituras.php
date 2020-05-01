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
                                <button id="modal-add-partitura" class="ui black button">Agregar Partitura</button>
                                <br><br>
                                <div class="ui styled fluid accordion">

                                    <?php
                                        $partituras = parent::consultarPartituras();
                                        foreach($partituras as $partitura){ 
                                    ?>
                                    <div class="title">
                                        <i class="dropdown icon"></i>
                                        <?php echo $partitura->nombre_cancion ?>
                                    </div>
                                    <div class="content">
                                        <p class="transition hidden">
                                            <button class="ui blue button modal-actualizar-partitura"
                                                data-id="<?php echo $partitura->id_partitura ?>">Actualizar</button>
                                            <button class="ui red button modal-eliminar-partitura"
                                                data-id="<?php echo $partitura->id_partitura ?>">Eliminar</button>

                                            <div class="ui divider"></div>
                                            <h3>Comentario: <?php echo $partitura->comentario ?></h3>
                                            <div class="ui divider"></div>

                                            <img src="<?php echo $partitura->imagen_partitura ?>" alt="" width="100%">
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Agregar partituras -->
                    <div class=" ui agregar modal">
                        <div class="header">Agregar Nueva Partitura</div>
                        <div class="content">
                            <form action="?class=Usuarios&view=storePartituras" method="post"
                                enctype="multipart/form-data">
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
                                <div class="ui fluid input">
                                    <textarea name="comentario" id="" cols="1000" rows="10" required
                                        placeholder="Agregar Comentario"></textarea>
                                </div>

                                <br>
                                <input type="file" name="file" id="file" class="inputfile" />
                                <label for="file"> <i class="ui upload icon"></i> Elegir Partitura</label>
                        </div>
                        <div class="actions">
                            <button type="submit" class="ui green button">Agregar</button>
                            </form>
                            <div class="ui red cancel button">Cancel</div>
                        </div>
                    </div>
                    <!-- fin modal Agregar partituras -->
                    <!-- Modal Actualizar partituras -->
                    <div class="ui actualizar modal" id="responseActualizarPartitura">

                    </div>
                    <!-- fin modal actualizar partituras -->
                    <!-- modal Eliminar partituras -->
                    <div class="ui eliminar basic modal">
                        <div class="ui icon header">
                            <i class="archive icon"></i>
                            Eliminar partitura
                        </div>
                        <div class="content">
                            <p>¿Estás seguro que quieres eliminar esta partitura? si la eliminas no podrá ser
                                recuperada y los de
                                la banda se cagaran de todo</p>
                        </div>
                        <div class="actions">
                            <div class="ui green ok inverted button eliminar-partitura">
                                <i class="checkmark icon"></i>
                                Yes
                            </div>
                            <div class="ui red basic cancel inverted button">
                                <i class="remove icon"></i>
                                No
                            </div>
                        </div>
                    </div>
                    <!-- fin Modal Eliminar partituras -->
                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>