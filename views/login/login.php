<!-- Plantilla HTML -->

<?php require_once('views/layouts/header.php') ?>

<body>
    <div class="pusher">
        <div class="ui stackable container center aligned grid">
            <div class="row">
                <div class="six wide column ">

                    <?php if(isset($_REQUEST['noExiste'])){ ?>
                    <div class="ui red message" id="noExiste">
                        <div class="header">
                            !EL CORREO O LA CONTRASEÑA ESTÁN MAL!
                        </div>
                    </div>
                    <?php } ?>

                    <?php if(isset($_REQUEST['yaExiste'])){ ?>
                    <div class="ui red message" id="yaExiste">
                        <div class="header">
                            !EL CORREO YA EXISTE, SELECCIONA OTRO POR FAVOR!
                        </div>
                    </div>
                    <?php } ?>

                    <?php if(isset($_REQUEST['success'])){ ?>
                    <div class="ui green message" id="success">
                        <div class="header">
                            !TE HAS REGISTRADO CORRECTAMENTE!
                        </div>
                    </div>
                    <?php } ?>

                    <div class="ui segment bluee">
                        <div class="field">
                            <a class="letter-white login-button" id="login">ENTRAR</label>
                                <a class="letter-white login-button" id="registrar">REGISTRARSE</label>

                        </div>
                        <form class="ui form trans" id="form-login" action="?class=Login&view=auth" method="post">
                            <div class="field">
                                <label class="letter-gray">CORREO</label>
                                <input class="input-login" type="email" name="correo" required>
                            </div>
                            <div class="field">
                                <label class="letter-gray">CONTRASEÑA</label>
                                <input class="input-login" type="password" name="pass" required>
                            </div>

                            <button class="ui button btn-login" type="submit">ENTRAR</button>
                        </form>

                        <form class="ui form hidden" id="form-registro" action="?class=Register&view=store"
                            method="post">
                            <div class="field">
                                <label class="letter-gray">NOMBRE</label>
                                <input class="input-login" type="text" name="nombre" required>
                            </div>
                            <div class="field">
                                <label class="letter-gray">CORREO</label>
                                <input class="input-login" type="email" name="correo" required>
                            </div>
                            <div class="field">
                                <label class="letter-gray">CONTRASEÑA</label>
                                <input class="input-login" type="password" name="pass" required>
                            </div>

                            <button class="ui button btn-login" type="submit">REGISTRARSE</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php require_once('views/layouts/footer.php') ?>
</body>

</html>