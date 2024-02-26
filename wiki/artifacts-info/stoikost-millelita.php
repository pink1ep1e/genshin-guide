<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Стойкость Миллелита</title>
</head>
<body>
      <?php 
        include '../../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts-info/stoikost-millelita</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title-25">
                    <p>Набор артефактов "Стойкость Миллелита"</p>
                </div>
                <div class="row">
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="legend-background">
                                  <img src="../../assets/images/mini-artifacts/Stoykost-Millelita.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Стойкость Миллелита</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-10">
                        <div class="left-side-description-top">
                            <p>Увеличивает макс. HP на 20%.</p>
                            <p>Когда элементальный навык попадает по врагу, атака всех членов отряда, которые находятся 
                                рядом, увеличивается на 20%, а прочность щитов увеличивается на 30% на 3 секунды. 
                                Эффект можно активировать каждых 0.5 секунд. Также эффект срабатывает даже в том случае, 
                                если использующий этот артефакт персонаж не находится на поле боя.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title-25">
                <p>Как получить артефакты из набора "Стойкость Миллелита"</p>
              </div>
              <div class="left-side-description">
                <p>Артефакты Стойкость Миллелита можно получить в 
                    качестве награды запрохождение подземелья Горный дозор.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title-25">
                  <p>Кому лучше всего подойдет набор артефактов "Стойкость Миллелита"?</p>
                </div>
                <div class="left-side-description">
                  <p>Список персонажей для которых будут полезны эти артефакты:</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Shevrez']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/Shevryez.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Шеврёз</p>
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
                            <a href="<?=$chars_config['Kirara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../../assets/images/mini-characters/Kirara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кирара</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Mika']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/Mika.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Мика</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Dehia']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/Dehya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дэхья</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['YaoYao']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../../assets/images/mini-characters/YAo_YAo.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Яо Яо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Faruzan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../../assets/images/mini-characters/Faruzan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фарузан</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Laila']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/layla.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Лайла</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nilu']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../../assets/images/mini-characters/Nilou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нилу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Dori']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/Dori.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дори</p>
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
                            <a href="<?=$chars_config['Sinobu']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../../assets/images/mini-characters/kuki.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Синобу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Toma']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../../assets/images/mini-characters/thoma.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Тома</p>
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
                            <a href="<?=$chars_config['Zongli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../../assets/images/mini-characters/zhongli.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Чжун Ли</p>
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
                            <a href="<?=$chars_config['Diona']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../../assets/images/mini-characters/diona.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Диона</p>
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

