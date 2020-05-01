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
                                <div class="ui styled fluid accordion">
                                    <div class="title">
                                        <i class="dropdown icon"></i>
                                        What is a dog?
                                    </div>
                                    <div class="content">
                                        <p class="transition hidden">
                                            <img src="assets/app/img/partituras/partitura1.png" alt="">
                                        </p>
                                    </div>
                                    <div class="title">
                                        <i class="dropdown icon"></i>
                                        What kinds of dogs are there?
                                    </div>
                                    <div class="content">
                                        <p class="transition hidden">There are many breeds of dogs. Each breed varies in
                                            size and temperament. Owners often select a breed of dog that they find to
                                            be compatible with their own lifestyle and desires from a companion.</p>
                                    </div>
                                    <div class="title ">
                                        <i class="dropdown icon"></i>
                                        How do you acquire a dog?
                                    </div>
                                    <div class="content ">
                                        <p class="transition visible">Three common ways for a prospective owner to
                                            acquire a dog is from pet shops, private owners, or shelters.</p>
                                        <p class="transition visible">A pet shop may be the most convenient way to buy a
                                            dog. Buying a dog from a private owner allows you to assess the pedigree and
                                            upbringing of your dog before choosing to take it home. Lastly, finding your
                                            dog from a shelter, helps give a good home to a dog who may not find one so
                                            readily.</p>
                                    </div>
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