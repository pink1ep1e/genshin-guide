<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Сон нимфы</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/son-nimfi</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Сон нимфы"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation" href="#">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/Son-nimfy.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сон нимфы</p>
                            </a>
                        </div>
                    </div> 
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Даёт 15% бонус Гидро урона.</p>
                            <p>Попадания обычной атаки, заряженной атаки, атаки в падении, 
                                элементального навыка и взрыва стихии по противнику на 8 сек. создают 1 уровень Отражения нимфы. 
                                Когда действуют 1/2/3 и более уровня Отражения нимфы, сила атаки повышается на 7%/16%/25%, а бонус Гидро урона на 4%/9%/15%. 
                                Уровни Отражения нимфы, созданные обычными атаками, заряженными атаками, атаками в падении, 
                                элементальными навыками и взрывами стихии, существуют независимо друг от друга.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Сон нимфы"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Сон нимфы можно получить в качестве 
                    награды запрохождение подземелья Заброшенная твердыня.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Сон нимфы"?</p>
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

