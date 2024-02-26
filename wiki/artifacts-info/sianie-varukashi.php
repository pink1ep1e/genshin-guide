<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Сияние Вурукаши</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/sianie-varukashi</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Сияние Вурукаши"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Siyanie-sladkoy-rosy.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сияние Вурукаши</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает НР на 20%.</p>
                            <p>Увеличивает урон элементального навыка и взрыва стихии на 10%. 
                                Если экипированный персонаж получает урон, этот эффект увеличивается на 80% на 5 сек. 
                                Эффект увеличения может складываться до 5 раз. Отсчёт времени каждого уровня происходит отдельно. 
                                Эти эффекты активируются даже если экипированный персонаж не на поле боя.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Сияние Вурукаши"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Сияние Вурукаши можно получить в качестве 
                    награды запрохождение подземелья Заброшенная твердыня.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Сияние Вурукаши"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Furina']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/Furina.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фурина</p>
                            </a>
                        </div>
                    </div>
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
                            <a href="<?=$chars_config['Dehia']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/Dehya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дэхья</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nilu']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/Nilou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нилу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Zongli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/zhongli.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Чжун Ли</p>
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

