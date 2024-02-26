<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Киноварное загробье</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/kinovarnoe-zagrobie</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Киноварное загробье"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Kinovarnoe-zagrobe.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Киноварное загробье</p>
                            </a>
                        </div>
                      </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает силу атаки на 18%.</p>
                            <p>После активации взрыва стихии на 16 сек. Cоздаёт cкрытое сияние, которое повышает силу атаки на 8%. Сила атаки персонажа увеличивается ещё на 10%, когда он теряет HP. 
                                Этот эффект может возникнуть максимум 4 раза и не чаще, чем раз в 0,8 сек. 
                                Скрытое сияние исчезает, когда персонаж покидает поле боя. При повторной активации взрыва стихии существующее Скрытое сияние снимается.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Киноварное загробье"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Киноварное загробье можно получить в 
                    качестве награды запрохождение подземелья Затерянная долина.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Киноварное загробье"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['KaMin']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/Ka-Min.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ка мин</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Lini']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/Lini.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Лини</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Xiao']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../../assets/images/mini-characters/xiao.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сяо</p>
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

