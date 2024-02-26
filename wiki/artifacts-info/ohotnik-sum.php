<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Охотник Сумеречного двора</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/ohotnik-sum</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Охотник Сумеречного двора"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-42" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Okhota-na-ten.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Охотник Сумеречного двора</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает урон обычной и заряженной атаки на 15%.</p>
                            <p>Увеличивает шанс крит. попадания на 11% на 5 сек., когда HP увеличивается или снижается. Эффект может складываться до 3 раз.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты "Охотник Сумеречного двора"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Охотник Сумеречного двора можно получить 
                    в качестве награды запрохождение подземелья Конец греха.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Охотник Сумеречного двора"?</p>
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
                            <a href="<?=$chars_config['Rizli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/wriothesley.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ризли</p>
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
                            <a href="<?=$chars_config['HuTao']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/hutao.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ху Тао</p>
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

