<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Возлюбленная юная дева</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/vozlublennie-devi</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Возлюбленная юная дева"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-42" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/tseremonia-dreyney-znati.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Церемония древней знати</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает лечение персонажа на 15%.</p>
                            <p>Увеличивает получаемое лечение всех членов отряда 
                                на 20% в течении 10 сек. после использования элементального навыка или взрыва стихии.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Возлюбленная юная дева"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Возлюбленная юная дева можно 
                    получить в качестве награды запрохождение подземелья Долина воспоминаний.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Возлюбленная юная дева"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
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
                            <a href="<?=$chars_config['TsiTsi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/qiqi.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ци Ци</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Diona']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/diona.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Диона</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Barbara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/barbara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Барбара</p>
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

