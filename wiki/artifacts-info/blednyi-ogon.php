<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Бледный огонь</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/blednyi-ogon</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Бледный огонь"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="#">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/Blednyy-ogon.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Бледный огонь</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает физ. урон на 25%.</p>
                            <p>Когда элементальный навык попадает по врагу, атака увеличивается на 9% в течение 7 секунд. 
                                Эффект может складываться до 2 раз и срабатывает каждые 0.3 секунды. Как только будет наложено 2 эффекта, 
                                бонусов 2 предметов увеличится до 100%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Бледный огонь"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Бледный огонь можно 
                    получить в качестве награды запрохождение подземелья Горный дозор.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Бледный огонь"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Fremine']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/Fremine.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фремине</p>
                            </a>
                        </div>
                    </div>
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
                            <a href="<?=$chars_config['Rosaria']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/rosaria.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Розария</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Fishil']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/fischl.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фишль</p>
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

