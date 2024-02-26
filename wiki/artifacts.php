<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include '../config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Артефакты</title>
</head>
<body>
      <?php 
        include '../parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/wiki/artifacts</p>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
                <div class="left-side-title">
                    <p>Общая информация об артефактах</p>
                </div>
                <div class="left-side-description">
                    <p>Артефакты — это один из предметов экипировки позволяющий усилить вашего персонажа. 
                        Всего на одного персонажа можно надеть пять артефактов, каждый в свой слот: 
                        Корона разума, Кубок пространства, Пески времени, Перо смерти, Цветок жизни. 
                        Каждый артефакт может иметь от одного до двух бонусов комплекта, это означает что при 
                        надевании на персонажа двух артефактов из одного комплекта вы получите бонус, а при надевании 
                        четырех два бонуса.</p>
                </div>
                <div class="left-side-title">
                    <p>Список артефактов</p>
                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="left-side-characters">
                            <a class="left-side-artifact-animation-42" href="artifacts-info/ohotnik-sum">
                                <div class="legend-background">
                                    <img src="../assets/images/mini-artifacts/Okhota-na-ten.webp" width="106px" height="106px" alt="">
                                </div>
                                <p>Охотник Сумеречного двора</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/zolotaya-truppa">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Zolotaya-truppa.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Золотая труппа</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/sianie-varukashi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Siyanie-sladkoy-rosy.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Сияние Вурукаши</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="artifacts-info/son-nimfi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Son-nimfy.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Сон нимфы</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/tsvetok-poteranogo-raya">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/TSvetok-poteryannogo-raya.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Цветок потерянного рая</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/hroniki-chertogov-pustini">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/KHroniki-CHertogov-v-pustyne.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Хроники Чертогов в пустыне</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/pozolochenie-sni">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Pozolochennye-sny.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Позолочен-ные сны</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/vospominanie-drem-lesa">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Vospominaniya-dremuchego-lesa.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Воспоминан-ия дремучего леса</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/kinovarnoe-zagrobie">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Kinovarnoe-zagrobe.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Киноварное загробье</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/otgoloski-podnoshenia">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Otgoloski-podnosheniya.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Отголоски подношения</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/molusk-morkih-krasok">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Mollyusk-morskikh-krasok.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Моллюск морских красок</p>
                          </a>
                      </div>
                    </div> 
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/kokon-sladkih-grez">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Kokon-sladkikh-gryez.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Кокон сладких грёз</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/vospominanie-simenavi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Ochishchenie-pamyati.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Воспомина-ния Симэнавы</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/emblema-raschetnoi-sudbi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Pechat-izolyatsii-_1_.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Эмблема рассечённой судьбы</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/blednyi-ogon">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Blednyy-ogon.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Бледный огонь</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/stoikost-millelita">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/Stoykost-Millelita.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Стойкость Миллелита</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/serdtse-glubin">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/sertse_glubin.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Сердце глубин</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/zabludshi-v-meteli">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/zabludshiy-v-meteli.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Заблудший в метели</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/vstrechnaya-cometa">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/vstrechtaya-kometa.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Встречная комета</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/arhaichnyi-kamen">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/arkhaichniy-kamen.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Архаичный камень</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/stupayshyi-po-lave">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/stupayshiy-po-lave.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Ступающий по лаве</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/gorashaia-vedma">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/gorashya-alaia-vedma.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Горящая алая ведьма</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/usmirayshiy-grom">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/usmirayshiy-grom.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Усмиряющий гром</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/gremoglasniy-grom-uarosti">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/gromoglasniy-rev-uarosti.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Громоглас-ный рёв ярости</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/izumrudnaya-ten">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/izumrudnaya-ten.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Изумрудная тень</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/ritsar-krovi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/ritsar-krovi.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Рыцарь крови</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/tseremenia-drevney-znati">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/tseremonia-dreyney-znati.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Церемония древней знати</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/vozlublennie-devi">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/vozlublennaya-unaya-deva.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Возлюбленн-ая юная дева</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-42" href="artifacts-info/stranstvuyshi-ansambl">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/stranstvuyushiy-ansambl.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Странству-ющий ансамбль</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="artifacts-info/konets-gladiatora">
                              <div class="legend-background">
                                  <img src="../assets/images/mini-artifacts/konets-gladiatora.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Конец гладиатора</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/izgnannik.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Изгнанник</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/instruktor.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Инструктор</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/shaman-vodi.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Шаман воды</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/shaman-ogna.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Шаман огня</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/shaman-lda.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Шаман льда</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/shaman-molnij.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Шаман молний</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/ucheniy.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Учёный</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/azarntyi-igrok.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Азартный игрок</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/dusha-hrabretsa.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Душа храбреца</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/malenkoe-chudo.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Маленькое чудо</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/vola-zashitnika.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Воля защитника</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/voin.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Воин</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation-25" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/reshimost-vremenshika.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Решимость временщика</p>
                          </a>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="left-side-characters">
                          <a class="left-side-artifact-animation" href="">
                              <div class="epic-background">
                                  <img src="../assets/images/mini-artifacts/berserk.png" width="106px" height="106px" alt="">
                              </div>
                              <p>Берсерк</p>
                          </a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="colums">
              <div class="left-side-title">
                <p>Характеристики артефактов</p>
              </div>
              <div class="left-side-description">
                <p>У каждого артефакта есть своя основная характеристика, 
                    сила которой зависит от степени редкости артефакта. 
                    Кроме того данная характеристика зависит от слота в который помещается артефакт.
                </p>
                <p>Помимо основной характеристики у артефактов также есть дополнительные. 
                    Эти характеристики добавляются случайно при улучшении артефакта. 
                    Также они имеют ряд ограничений, прежде всего они не могут совпадать с 
                    основной характеристикой артефакта, а также повторятся, то есть артефакт 
                    может иметь только один бонус к силе атаки (либо от основной характеристики 
                    либо от дополнительной).
                </p>
                <p>Для улучшения артефактов вам не потребуются дополнительные материалы 
                    как это требуется для возвышения оружия или персонажа. 
                    Улучшение происходит посредством объединения основного артефакта с другими, 
                    то есть чтобы усилить конкретный артефакт, вам придется пожертвовать другими.
                </p>
              </div>
            </div>
            <div class="colums">
                <div class="left-side-title">
                  <p>Рекомендации по выбору артефактов для разных ролей персонажей</p>
                </div>
                <div class="left-side-description">
                  <p>Для атакующий персонажей подойдут артефакты с 
                    характеристиками на критический урон и атаку. 
                    Помимо этого обратите внимание на то от каких характеристик зависит сила 
                    умений персонажа, для некоторых героев бонус защиты может быть также полезен 
                    для нанесения урона.
                  </p>
                  <p>Для персонажей специализирующихся на исцелении и блокировании урона больше 
                    подойдут предметы для усиления защиты и здоровья. Кроме усиления выживаемости 
                    они зачастую дают бонус к исцелению или щитам.
                  </p>
                  <p>Для героев поддержки мы рекомендуем сфокусироваться на артефактах с 
                    бонусами к восстановлению энергии и мастерству стихий. 
                    Данные характеристики помогут героям чаще использовать свои способности, 
                    а также наносить больше урона за счет элементальных реакций.
                  </p>
                  <p>Вне зависимости от роли вам также необходимо 
                    обращать внимание на бонусы которые дают комплекты предметов, 
                    зачастую эти бонусы дают значительный прирост урона или исцеления.
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

