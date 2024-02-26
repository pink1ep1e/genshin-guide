<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Цветок потерянного рая</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/tsvetok-poteranogo-raya</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Цветок потерянного рая"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-42" href="">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/TSvetok-poteryannogo-raya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Цветок потерянного рая</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает мастерство стихий на 80 ед.</p>
                            <p>Увеличивает урон реакций Бутонизация, Вегетация и Цветение экипированного этим набором персонажа на 40%. 
                                Кроме того, активация реакций Бутонизация, Вегетация и Цветение экипированным этим набором персонажем усилит этот эффект на 25%. 
                                Каждое суммирование длится 10 сек. Эффект складывается до 4 раз, может возникнуть раз в 1 сек. и активируется, 
                                даже если экипированный этим набором персонаж не активен.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Цветок потерянного рая"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Цветок потерянного рая можно получить в 
                    качестве награды запрохождение подземелья Песчаное царство.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Цветок потерянного рая"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kirara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../../assets/images/mini-characters/Kirara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кирара</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kaveh']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../../assets/images/mini-characters/Kavekh.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кавех</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sinobu']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/kuki.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Синобу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Toma']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/thoma.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Тома</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Raiden']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/shougun.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Райдэн</p>
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

