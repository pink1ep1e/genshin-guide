<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Кокон сладких грёз</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/kokon-sladkih-grez</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Кокон сладких грёз"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Kokon-sladkikh-gryez.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Кокон сладких грёз</p>
                            </a>
                        </div>
                      </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает защиту на 30%.</p>
                            <p>Персонаж, экипированный этим набором артефактов, получает эффект 
                                Любопытства. 1 уровень Любопытства даётся активному персонажу 
                                после попадания по противнику атакой Гео (не чаще чем раз в 0,3 сек.). 
                                Когда персонаж находится вне поля боя, он получает 1 ур. Любопытства каждые 3 сек. 
                                Любопытство может складываться до 4 ур., каждый ур. прибавляет 6% к защите и 6% к Гео урону. 
                                Если персонаж не получает Любопытства в течение 6 сек., то теряет 1 накопленный уровень Любопытства.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Кокон сладких грёз"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Кокон сладких грёз можно 
                    получить в качестве награды запрохождение подземелья Дремлющий сад.
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
                            <a href="<?=$chars_config['YunTsin']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/YUn-TSzin.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Юнь Цзинь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Itto']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/itto.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Итто</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Goro']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/gorou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Горо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Noelle']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/noelle.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ноэлль</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Albedo']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/albedo.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Альбедо</p>
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

