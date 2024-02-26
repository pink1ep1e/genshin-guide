<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Сердце глубин</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/serdtse-glubin</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Сердце глубин"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/sertse_glubin.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Сердце глубин</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает бонус Гидро урона на 15%.</p>
                            <p>Увеличивает урон обычной и заряженной атаки на 30% 
                                в течение 15 сек. после использования элементального навыка.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Сердце глубин"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Сердце глубин можно получить в 
                    качестве награды запрохождение подземелья Пик Виндагнира.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Сердце глубин"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nevellete']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/neuvillette.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нёвиллет</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kandakia']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/Candace.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кандакия</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['ELan']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/yelan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Е Лань</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Auato']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/ayato.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Аято</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kokomi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/kokomi.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кокоми</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Tartalia']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/tartaglia.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Тарталья</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['SinTsu']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/xingqiu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Син Цю</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Mona']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/mona.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Мона</p>
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

