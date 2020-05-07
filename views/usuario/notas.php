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
                                <button id="modal-add-nota" class="ui black button">Agregar Grabación</button>
                                <br><br>
                                <div class="ui styled fluid accordion">

                                    <?php
                                        $notas = parent::consultarNotas();
                                        foreach($notas as $nota){ 
                                    ?>
                                    <div class="title">
                                        <i class="dropdown icon"></i>
                                        <?php echo $nota->nombre_cancion ?>
                                    </div>
                                    <div class="content">
                                        <p class="transition hidden">
                                            <button class="ui blue button modal-actualizar-nota"
                                                data-id="<?php echo $nota->id_nota ?>">Actualizar</button>
                                            <button class="ui red button modal-eliminar-nota"
                                                data-id="<?php echo $nota->id_nota ?>">Eliminar</button>

                                            <div class="ui divider"></div>
                                            <h2>Autor: <?php echo $nota->nombre ?></h2>
                                            <h3>Comentario: <?php echo $nota->comentario ?></h3>
                                            <div class="ui divider"></div>

                                            <audio controls autoplay>
                                                <source src="<?php echo $nota->grabacion ?>">
                                            </audio>
                                        </p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Agregar notas -->
                    <div class="ui agregar modal">
                        <div class="header">Agregar Nueva Grabación</div>
                        <div class="content">
                            <form action="?class=Usuarios&view=storeNotas" method="post"
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
                                <input type="file" name="file" id="file" class="inputfile" required />
                                <label for="file"> <i class="ui upload icon"></i> Elegir Grabación</label>
                        </div>
                        <div class="actions">
                            <button type="submit" class="ui green button">Agregar</button>
                            </form>
                            <div class="ui red cancel button">Cancel</div>
                        </div>
                    </div>
                    <!-- fin modal Agregar notas -->
                    <!-- Modal Actualizar notas -->
                    <div class="ui actualizar modal" id="responseActualizarNota">

                    </div>
                    <!-- fin modal actualizar notas -->
                    <!-- modal Eliminar notas -->
                    <div class="ui eliminar basic modal">
                        <div class="ui icon header">
                            <i class="archive icon"></i>
                            Eliminar nota
                        </div>
                        <div class="content">
                            <p>¿Estás seguro que quieres eliminar esta nota? si la eliminas no podrá ser
                                recuperada y los de
                                la banda se cagaran de todo</p>
                        </div>
                        <div class="actions">
                            <div class="ui green ok inverted button eliminar-nota">
                                <i class="checkmark icon"></i>
                                Yes
                            </div>
                            <div class="ui red basic cancel inverted button">
                                <i class="remove icon"></i>
                                No
                            </div>
                        </div>
                    </div>
                    <!-- fin Modal Eliminar notas -->
                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>