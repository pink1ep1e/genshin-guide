<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Встречная комета</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/vstrechnaya-cometa</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Встречная комета"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/vstrechtaya-kometa.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Встречная комета</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает прочность щита на 35%.</p>
                            <p>Под защитой щита увеличивает 
                                урон обычной и заряженной атаки на 40%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Встречная комета"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Встречная комета можно получить 
                    в качестве награды запрохождение подземелья Владения Гуюнь.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Встречная комета"?</p>
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
                            <a href="<?=$chars_config['Noelle']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/noelle.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ноэлль</p>
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

