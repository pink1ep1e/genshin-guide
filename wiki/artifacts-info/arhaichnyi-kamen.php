<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Архаичный камень</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/arhaichnyi-kamen</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Архаичный камень"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="#">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/arkhaichniy-kamen.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Архаичный камень</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает бонус Гео урона на 15%.</p>
                            <p>Подобранные осколки, образованные реакцией Кристалл, 
                                увеличивают бонус элементального урона всех членов отряда на 35% в течение 10 сек. Одновременно можно иметь бонус урона только одного элемента.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Архаичный камень"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Архаичный камень можно получить 
                    в качестве награды запрохождение подземелья Владения Гуюнь.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Архаичный камень"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Naviya']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/Naviya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Навия</p>
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
                            <a href="<?=$chars_config['Zongli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/zhongli.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Чжун Ли</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['NinGuan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/ningguang.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нин Гуан</p>
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

