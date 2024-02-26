<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Хроники Чертогов в пустыне</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/hroniki-chertogov-pustini</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Хроники Чертогов в пустыне"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-42" href="">
                                <div class="legend-background">
                                    <img src="../../assets/images/mini-artifacts/KHroniki-CHertogov-v-pustyne.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Хроники Чертогов в пустыне</p>
                            </a>
                        </div>
                    </div> 
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает бонус Анемо урона на 15%.</p>
                            <p>Попадание заряженной атакой на 15 сек. повышает скорость обычной атаки на 10%, 
                                а урон обычной атаки, заряженной атаки и атаки в падении – на 40%.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Хроники Чертогов в пустыне"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Хроники Чертогов в пустыне можно получить в 
                    качестве награды запрохождение подземелья Песчаное царство.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Хроники Чертогов в пустыне"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Strannik']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../../assets/images/mini-characters/Strannik.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Странник</p>
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

