<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Воспоминания Симэнавы</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/vospominanie-simenavi</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Воспоминания Симэнавы"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="#">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/Ochishchenie-pamyati.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Воспомина-ния Симэнавы</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает силу атаки на 18%.</p>
                            <p>При использовании элементального навыка, если у персонажа 15 или более единиц энергии, он теряет 15 единиц энергии, 
                                а урон обычной атаки, заряженной атаки и атаки в падении увеличивается на 50% в течение 10 сек.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Воспоминания Симэнавы"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Воспоминания Симэнавы можно получить в 
                    качестве награды запрохождение подземелья Кленовый зал.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Воспоминания Симэнавы"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
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
                            <a href="<?=$chars_config['ShenHe']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/SHen-KHe.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Шэнь Хэ</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Ayaka']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/ayaka.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Аяка</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Yoimiya']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/yoimiya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ёимия</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Feiuan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/feiyan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Янь Фэй</p>
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
                            <a href="<?=$chars_config['GanYoi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/ganyu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Гань Юй</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Xiao']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../../assets/images/mini-characters/xiao.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сяо</p>
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

