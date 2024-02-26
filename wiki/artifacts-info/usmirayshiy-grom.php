<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Усмиряющий гром</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/usmirayshiy-grom</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Усмиряющий гром"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-25" href="">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/usmirayshiy-grom.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Усмиряющий гром</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Повышает Электро сопротивление на +40%.</p>
                            <p>Увеличивает урон против врагов, 
                                находящихся под действием Электро, на 35%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Усмиряющий гром"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Усмиряющий гром можно получить 
                    в качестве награды запрохождение подземелья Июльские сады.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Усмиряющий гром"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
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

