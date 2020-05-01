<?php require_once('views/layouts/header.php') ?>

<body>
    <?php require_once('views/layouts/banner.php') ?>

    <div class="pusher">
        <div class="ui stackable grid">
            <div class="row">
                <div class="sixteen wide column ">
                    <!-- Banner navbar -->
                    <?php require_once('views/layouts/bannerNav.php') ?>

                    <div class="ui stackable container center aligned grid">
                        <div class="row">
                            <div class="sixteen wide column">
                                <div class="ui disabled pd-y segment">

                                    <i class="ui  clock outline massive icon"></i>
                                    <h1>¡Pagina En Espera, Vuelva Pronto Master!</h1>


                                </div>
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