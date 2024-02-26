<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Список персонажей</title>
</head>
<body>
        <?php 
            include '../parts/navbar.php'
        ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/characters</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title">
                    <p>Все персонажи Genshin Impact</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['SyanYun']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <div class="left-side-sticker">Новый</div>
                                    <img src="../assets/images/mini-characters/Syan-YUn.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сянь Юнь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['KaMin']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <div class="left-side-sticker">Новый</div>
                                    <img src="../assets/images/mini-characters/Ka-Min.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ка мин</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Naviya']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/Naviya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Навия</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Shevrez']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/Shevryez.webp" width="106px" height="106px" alt="">
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
                                    <img src="../assets/images/mini-characters/Furina.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фурина</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sharlotta']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/Sharlotta.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Шарлотта</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Rizli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/wriothesley.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ризли</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nevellete']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/neuvillette.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нёвиллет</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Lini']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/Lini.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Лини</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Fremine']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/Fremine.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фремине</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Linett']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/Linett.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Линетт</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kirara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/Kirara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кирара</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['BayChzu']; ?>">
                                <div class="legend-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/Bay-CHzhu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Бай Чжу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kaveh']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/Kavekh.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кавех</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Mika']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/Mika.webp" width="106px" height="106px" alt="">
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
                                    <img src="../assets/images/mini-characters/Dehya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дэхья</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['AlHaitam']; ?>">
                                <div class="legend-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/Al_KHaytam.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Аль-Хайтам</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['YaoYao']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/YAo_YAo.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Яо Яо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Strannik']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/Strannik.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Странник</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Faruzan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/Faruzan.webp" width="106px" height="106px" alt="">
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
                                    <img src="../assets/images/mini-characters/layla.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Лайла</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nahida']; ?>">
                                <div class="legend-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/nahida.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нахида</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Nilu']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/Nilou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нилу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Cyno']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/Cyno.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сайно</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kandakia']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/Candace.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кандакия</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Dori']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/Dori.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дори</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Tignari']; ?>">
                                <div class="legend-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/tighnari.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Тигнари</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kollei']; ?>">
                                <div class="epic-background">
                                    <div class="elements-dendro"></div>
                                    <img src="../assets/images/mini-characters/Collei.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Коллеи</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Heidzo']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/Heizou.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Хэйдзо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sinobu']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/kuki.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Синобу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['ELan']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/yelan.webp" width="106px" height="106px" alt="">
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
                                    <img src="../assets/images/mini-characters/ayato.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Аято</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['YaeMiko']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/YAe-Miko.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Яэ Мико</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['ShenHe']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/SHen-KHe.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Шэнь Хэ</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['YunTsin']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/YUn-TSzin.png" width="106px" height="106px" alt="">
                                </div>
                                <p>Юнь Цзинь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Itto']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/itto.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Итто</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Goro']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/gorou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Горо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Toma']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/thoma.webp" width="106px" height="106px" alt="">
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
                                    <img src="../assets/images/mini-characters/kokomi.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кокоми</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Raiden']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/shougun.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Райдэн</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Aloi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/aloy.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Элой</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/sara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сара</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Yoimiya']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/yoimiya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ёимия</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Say']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/sayu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Саю</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Ayaka']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/ayaka.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Аяка</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kadzuha']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/kazuha.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кадзуха</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Eula']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/eula.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Эола</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Feiuan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/feiyan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Янь Фэй</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Rosaria']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/rosaria.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Розария</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['HuTao']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/hutao.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ху Тао</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Xiao']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/xiao.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сяо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['GanYoi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/ganyu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Гань Юй</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Albedo']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/albedo.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Альбедо</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Zongli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/zhongli.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Чжун Ли</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sinyan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/xinyan.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Синь Янь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Tartalia']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/tartaglia.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Тарталья</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Diona']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/diona.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Диона</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Kli']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/klee.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кли</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Venti']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/venti.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Венти</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['TsiTsi']; ?>">
                                <div class="legend-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/qiqi.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ци Ци</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Mona']; ?>">
                                <div class="legend-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/mona.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Мона</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['KeTsin']; ?>">
                                <div class="legend-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/keqing.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кэ Цин</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Diluc']; ?>">
                                <div class="legend-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/diluc.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Дилюк</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Jean']; ?>">
                                <div class="legend-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/jean.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Джинн</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Ember']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/amber.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Эмбер</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['ChounYon']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/chongyun.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Чун Юнь</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Fishil']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/fischl.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Фишль</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['SyanLin']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/xiangling.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сян Лин</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['SinTsu']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/xingqiu.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Син Цю</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Sakharoza']; ?>">
                                <div class="epic-background">
                                    <div class="elements-anemo"></div>
                                    <img src="../assets/images/mini-characters/sucrose.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Сахароза</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Reizor']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/razor.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Рэйзор</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Noelle']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/noelle.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Ноэлль</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['NinGuan']; ?>">
                                <div class="epic-background">
                                    <div class="elements-geo"></div>
                                    <img src="../assets/images/mini-characters/ningguang.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Нин Гуан</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Lisa']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/lisa.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Лиза</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Keia']; ?>">
                                <div class="epic-background">
                                    <div class="elements-cryo"></div>
                                    <img src="../assets/images/mini-characters/kaeya.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Кэйа</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['BayDou']; ?>">
                                <div class="epic-background">
                                    <div class="elements-electro"></div>
                                    <img src="../assets/images/mini-characters/baidou.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Бэй Доу</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Bennet']; ?>">
                                <div class="epic-background">
                                    <div class="elements-pyro"></div>
                                    <img src="../assets/images/mini-characters/bennett.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Беннет</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a href="<?=$chars_config['Barbara']; ?>">
                                <div class="epic-background">
                                    <div class="elements-hydro"></div>
                                    <img src="../assets/images/mini-characters/barbara.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Барбара</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title">
                <p>Как получить персонажей Геншин Импакт</p>
              </div>
              <div class="left-side-description">
                <p>В игре Геншин Импакт присутствует большое количество самых разных персонажей. 
                   В этом разделе вы найдете актуальный список персонажей доступных для игры, а также тех, кого уже совсем скоро добавят в игру. 
                   На детальной странице вы можете узнать рейтинг персонажа его основные особенности и актуальные билды, подобрать оружие и артефакты а также ознакомится с необходимыми для прокачки персонажа материалами.
                </p>
                <p>Часть персонажей открываются по мере прохождения сюжетной линии, к ним относятся: Кейа, Лиза, Сян Лин и Эмбер. 
                   Некоторых персонажей можно получить за различные активности - Коллеи за прохождение Витой бездны, а Барбару по спец. квесту. 
                   Кроме того, во время различных внутриигровых событий также можно получить разных персонажей. 
                   К примеру, во время события «Праздничный свет фонарей» можно было выбрать одного из шести четырехзвездочных персонажей. 
                   Помимо внутриигровых событий в игре присутствует возможность купить персонажа в Магазине Паймон за звездную пыль. 
                   Остальных же персонажей можно попытаться добыть только при покупке специальных баннеров.
                </p>
              </div>
            </div>
        </div>
          <div class="col-sm-4">
            <?php 
                include '../parts/left-side-bar.php'
            ?>
          </div>
        </div>
            <?php 
                include '../parts/footer.php'
            ?>
      </div>
<script src="assets/js/main.js"></script>
</body>
</html>

