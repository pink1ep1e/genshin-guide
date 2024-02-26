<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Золотая труппа</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/zolotaya-truppa</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Золотая труппа"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Zolotaya-truppa.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Золотая труппа</p>
                            </a>
                        </div>
                      </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает урон элементального навыка на 20%.</p>
                            <p>Увеличивает урон элементального навыка на 20%. 
                                Кроме того, когда персонаж не на поле боя, урон элементального навыка дополнительно увеличивается на 20%. Через 2 сек. после вступления в бой эффект исчезает.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Золотая труппа"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Охотник Сумеречного двора можно получить 
                    в качестве награды запрохождение подземелья Конец греха.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Золотая труппа"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sharlotta']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/Sharlotta.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Шарлотта</p>
                            </a>
                        </div>
                    </div>
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
                            <a href="<?=$chars_config['YaeMiko']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/YAe-Miko.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Яэ Мико</p>
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

