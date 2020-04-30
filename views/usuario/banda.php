<!-- Plantilla HTML -->

<?php require_once('views/layouts/header.php') ?>

<body>
    <?php require_once('views/layouts/banner.php') ?>

  <div class="pusher">
    <div class="ui stackable grid">
      <div class="row">
        <div class="sixteen wide column ">
          <!-- Banner navbar -->
            <?php require_once('views/layouts/bannerNav.php') ?>
          <!-- fin banner nav -->

          <div class="ui container center aligned grid">
            <div class="row">
              <div class="thirteen wide column">
                <div class="ui centered cards">
                
                  <div class="ui card">
                    <div class="image">
                      <img src="assets/img/default_user.jpg">
                    </div>
                    <div class="content">
                      <a class="header">Geovanni Reyes</a>
                      <div class="description">
                        Guitarrista
                      </div>
                    </div>
                  </div>

                  <div class="ui card">
                    <div class="image">
                      <img src="assets/img/default_user.jpg">
                    </div>
                    <div class="content">
                      <a class="header">Felipe Chacón</a>
                      <div class="description">
                        Guitarrista
                      </div>
                    </div>
                  </div>

                  <div class="ui card">
                    <div class="image">
                      <img src="assets/img/default_user.jpg">
                    </div>
                    <div class="content">
                      <a class="header">Jefferson Pinzón</a>
                      <div class="description">
                        Vocalista
                      </div>
                    </div>
                  </div>

                  <div class="ui card">
                    <div class="image">
                      <img src="assets/img/default_user.jpg">
                    </div>
                    <div class="content">
                      <a class="header">Kurt Rodriguez</a>
                      <div class="description">
                        Baterista
                      </div>
                    </div>
                  </div>

                  <div class="ui card">
                    <div class="image">
                      <img src="assets/img/default_user.jpg">
                    </div>
                    <div class="content">
                      <a class="header">Sebastian Li</a>
                      <div class="description">
                        Productor
                      </div>
                    </div>
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