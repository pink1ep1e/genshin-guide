<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Рыцарь крови</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/ritsar-krovi</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Рыцарь крови"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/ritsar-krovi.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Рыцарь крови</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает физ. урон на 25%.</p>
                            <p>После победы над противником увеличивает 
                                урон заряженной атаки на 50% и обнуляет 
                                стоимость выносливости заряженной атаки на 10 сек.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Рыцарь крови"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Рыцарь крови можно получить в 
                    качестве награды запрохождение подземелья Чистая вода и горная пещера.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Рыцарь крови"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Eula']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/eula.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Эола</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sinyan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/xinyan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Синь Янь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Reizor']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/razor.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Рэйзор</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['KeTsin']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/keqing.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кэ Цин</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
          <div class="col-sm-4">
            <?php 
              include '../../parts/left-side-bar.php'
            ?>
          </div>
        </div>
          <?php 
            include '../../parts/footer.php'
          ?>
      </div>
<script src="assets/js/main.js"></script>
</body>
</html>

