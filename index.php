<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php include 'config/config.php';?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title><?=$site_config['SiteName']; ?> | Главная</title>
</head>
<body>
      <?php 
      include 'parts/navbar.php'
      ?>
      <div class="container">
        <div class="header-https colums">
          <p>https://www.genshin-guide.ru/</p>
        </div>
        <div id="elements-id" class="colums">
          <div class="banner-btn">
            <a class="slider-next-path" data-menu-name="banner-first-half" href="#">Текущие молитвы</a>
            <a class="slider-next-path" data-menu-name="banner-second-half" href="#">Вторая половина</a>
            <div class="banner-btn-skip col-lg-7">
            <a class="slider-next" href="#"><svg style="transform: rotate(90deg);" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg> Следующий баннер <svg style="transform: rotate(270deg);" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 6V18M12 18L7 13M12 18L17 13" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            </div>
          </div>
          <div id="slider" class="items banner-first-half">
            <div id="slider-line" class="row col-xl-11">
              <div class="col-xl-6">
                <img src="assets/images/splesh-atrs/Furina.webp" height="500px" alt="">
              </div>
              <div class="col-sm-6">
                <div class="gidro colums">
                  <div class="banner-head-text">
                    <img src="assets/images/elements/hydro.svg" height="120px">
                    <p>Фурина</p>
                  </div>
                  <div class="banner-body-text">
                    <p>Фокалорс или Фурина – Гидро Архонт, богиня справедливости и властительница Фонтейна в Genshin Impact. 
                      Она владеет одноручным мечом и исполняет роль саппорта и вспомогательного дамагера: исцеляет, баффает и наносит урон. 
                      Внешность Фокалорс. Гидро Архонт невысокого роста, одета в короткие шорты и синий пиджак, носит изящную шляпку, а позади у нее декоративные украшения пиджака.</p>
                  </div>
                </div>
              </div>
            </div>
            <div id="slider-line" class="row col-xl-11">
              <div class="col-xl-6">
                <img src="assets/images/splesh-atrs/baizhuer.png" height="500px" alt="">
              </div>
              <div class="col-sm-6">
                <div class="dendro colums">
                  <div class="banner-head-text">
                    <img src="assets/images/elements/dendro.svg" height="120px">
                    <p>Бай Чжу</p>
                  </div>
                  <div class="banner-body-text">
                    <p>Бай Чжу атакует противников, высвобождая Призрачные артерии, которые наносят Дендро урон, в следующих ситуациях: 
                      Когда персонаж находится под защитой Бесшовного щита и создаётся новый Бесшовный щит. Когда время завершается или его разбивают.
                      Восполняет здоровье при нахождении различных предметов в открытом мире, поэтому может пригодиться начинающим игрокам. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="slider-next-path-banner" class="items banner-second-half" style="display: none;">
            <div id="slider-line" class="row col-xl-11">
              <div class="col-xl-6">
                <img src="assets/images/splesh-atrs/сyno.webp" height="500px" alt="">
              </div>
              <div class="col-sm-6">
                <div class="electro colums">
                  <div class="banner-head-text">
                    <img src="assets/images/elements/Electro.svg" height="120px">
                    <p>Сайно</p>
                  </div>
                  <div class="banner-body-text">
                    <p>Вызов на официальную встречу с генералом махаматрой Сайно не сулит исследователям ничего хорошего.
                      Личный визит Сайно обычно означает, что кто-то из учёных совершил серьёзнейший академический проступок: 
                      плагиат, взяточничество, злоупотребление знаниями, подделку доклада, присвоение средств, конкуренцию с дурным умыслом, присвоение чужой научной работы...
                      Провинившемуся остаётся только проследовать за генералом махаматрой и принять наказание.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div id="slider-line" class="row col-xl-11">
              <div class="col-xl-6">
                <img src="assets/images/splesh-atrs/Kamisato-Ayato.png" height="500px" alt="">
              </div>
              <div class="col-sm-6">
                <div class="hydro colums">
                  <div class="banner-head-text">
                    <img src="assets/images/elements/hydro.svg" height="120px">
                    <p>Аято</p>
                  </div>
                  <div class="banner-body-text">
                    <p>Как глава комиссии Ясиро, Камисато Аято всеми силами поддерживает процветание и стабильность региона.
                      На первый взгляд он сдержан и грациозен. Он не любит появляться на публике и не стремится открыто демонстрировать свои способности.
                      Но те, кто с ним знаком, не смеют его недооценивать. Давным-давно, когда комиссия Ясиро переживала тяжёлые времена, 
                      а клан Камисато оказался на грани краха, именно этот юноша уладил ситуацию. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <div class="colums">
              <div class="left-side-title">
                  <p>Лента последних персонажей</p>
              </div>
              <div class="row">
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="legend-background">
                                  <div class="elements-geo"></div>
                                  <div class="left-side-sticker">Анонс</div>
                                  <img src="assets/images/mini-characters/Naviya.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Навия</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="epic-background">
                                  <div class="elements-pyro"></div>
                                  <div class="left-side-sticker">Анонс</div>
                                  <img src="assets/images/mini-characters/Shevryez.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Шеврёз</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="legend-background">
                                  <div class="elements-hydro"></div>
                                  <div class="left-side-sticker">Новый</div>
                                  <img src="assets/images/mini-characters/Furina.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Фурина</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="epic-background">
                                  <div class="elements-cryo"></div>
                                  <div class="left-side-sticker">Новый</div>
                                  <img src="assets/images/mini-characters/Sharlotta.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Шарлотта</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="legend-background">
                                  <div class="elements-cryo"></div>
                                  <img src="assets/images/mini-characters/wriothesley.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Ризли</p>
                          </a>
                      </div>
                  </div>
                  <div class="col-2">
                      <div class="left-side-characters">
                          <a href="">
                              <div class="legend-background">
                                  <div class="elements-hydro"></div>
                                  <img src="assets/images/mini-characters/neuvillette.webp" width="106px" height="106px" alt="">
                              </div>
                              <p>Нёвиллет</p>
                          </a>
                      </div>
                  </div>
              </div>
            </div>
            <div class="colums">
              <div class="left-side-title">
                <p>О нашем проекте</p>
              </div>
              <div class="left-side-description">
                <p>Сайт <?=$site_config['SiteHttps']; ?> предлагает обширную коллекцию полезной информации и руководств по игре Genshin Impact.
                   Этот сайт предназначен для игроков, которые хотят улучшить свои навыки и найти самые эффективные стратегии для прогрессирования в игре.</p>

                <p>На сайте вы найдете разделы, посвященные различным аспектам игры, включая персонажей, оружие, геймплейные механики, локации и многое другое. 
                  Каждый раздел содержит подробные гайды, советы и рекомендации от опытных игроков и экспертов.
                  Сайт также предлагает информацию о новых обновлениях игры, событиях и предложениях, чтобы вы всегда были в курсе последних новостей и возможностей в мире Genshin Impact.</p>

                <p>Мы предлагаем обширную базу гайдов, которые помогут игрокам и новичкам освоить игру, понять ее механику и преодолеть сложности. У нас вы найдете практичные советы по прохождению квестов, разбору боевой системы, а также списки секретных локаций, сокровищ и достижений, которые можно найти в игре. 
                  Наши гайды основаны на обширных исследованиях игры и опыте опытных игроков. Мы стараемся донести информацию до наших читателей максимально понятным и доступным образом, чтобы каждый мог получить максимальную выгоду и удовольствие от игры. 
                  Кроме того, мы постоянно обновляем наши гайды, чтобы быть в курсе последних обновлений и добавляемых контента. У нас также есть раздел новостей, где вы можете быть в курсе всех последних событий, объявлений и изменений в игре.
                  Мы уверены, что наш сайт станет незаменимым помощником для всех игроков Genshin Impact, помогая им достигать новых высот и открывать все секреты этой увлекательной игры.</p>
              </div>
            </div>
        </div>
          <div class="col-sm-4">
            <?php
              include 'parts/left-side-bar.php'
            ?>
          </div>
        </div>
          <?php
            include 'parts/footer.php'
          ?>
      </div>
<script src="assets/js/main.js"></script>
</body>
</html>

