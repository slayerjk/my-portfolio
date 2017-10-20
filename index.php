<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Вёрстка (psd to html) и наполнение сайта.">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Портфолио html-верстальщика</title>

  <link href="css/normalize.css" rel="stylesheet">

  <!--<link href="css/style.css" rel="stylesheet">-->
  <link href="css/style-min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/jquery-ui.min.css">
  <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">-->

  <!--<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">-->
  <!--<link href="FONT" rel="stylesheet">-->

  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
  <![endif]-->

</head>

<body>
  <header id="home" class="header">
    <div class="toggle-header-menu__btn">
      <svg version="1.0" id="toggle-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40" height="40" viewBox="0 0 22.928 21.982" enable-background="new 0 0 22.928 21.982" xml:space="preserve">
        <g>
          <rect width="40" height="4" fill="gold" fill-opacity="0.7"/>
          <rect y="9.009" width="40" height="4" fill="gold" fill-opacity="0.7"/>
          <rect y="18.018" width="40" height="4" fill="gold" fill-opacity="0.7"/>
        </g>
      </svg>
    </div>
    <nav class="header-top-menu">
      <ul class="header-top-menu__list">
        <li class="header-top-menu__li">
          <a href="#home" class="header-top-menu__link">
            <span class="header-top-menu__icon-font flaticon-homepage"></span>
            <span class="header-top-menu__span">Наверх</span>
          </a>
        </li>
        <li class="header-top-menu__li">
          <a href="#about" class="header-top-menu__link">
            <span class="header-top-menu__icon-font flaticon-id-card"></span>
            <span class="header-top-menu__span">О себе</span>
          </a>
        </li>
        <li class="header-top-menu__li">
          <a href="#works" class="header-top-menu__link">
            <span class="header-top-menu__icon-font flaticon-briefcase"></span>
            <span class="header-top-menu__span">Мои работы</span>
          </a>
        </li>
        <li class="header-top-menu__li">
          <a href="mailto:slayer.jk@mail.ru" class="header-top-menu__link">
            <span class="header-top-menu__icon-font flaticon-contact"></span>
            <span class="header-top-menu__span">Почта</span>
          </a>
        </li>
      </ul>
    </nav>
    <div class="header-bottom">
      <div class="container">
        <span class="colored-text1 header-bottom__span">Email:</span>
        <a class="header-bottom__mailto-link" href="mailto:slayer.jk@mail.ru">slayer.jk@mail.ru</a>
      </div>
    </div>
  </header>

  <div id="about" class="about-me">
    <div class="container">
      <h1 class="colored-text1 about-me__my-name">Марченко Максим Викторович</h1>
      <h2 class="about-me__prof">Html-верстальщик</h2>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Возраст:</span> 33 года
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Место проживания:</span> Республика Казахстан, г. Алматы.
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Образование:</span> высшее - КазНУ им. Аль-Фараби, Физический факультет.
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Сертификаты:</span>
         <ul>
           <li class="about-me__text">HTMLAcademy.ru -    Базовый HTML и CSS(#14 08.01-09.07 2016) (HTML, CSS, Git, Photoshop).</li>
           <li class="about-me__text">HTMLAcademy.ru - Продвинутый HTML и CSS(#11 c 22 мая по 28 июня 2017) (Gulp, SASS, БЭМ, Adaptive/Responsive, Ретинизация графики, Optimization).</li>
         </ul>
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Владение языками:</span> английский - технический, казахский(со словарём), русский(родной).
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Профессиональные навыки:</span> Html(5)&Css(3), адптивная/резиновая вёрстка, SASS, БЭМ, JavaScript/JQuery(basic), ретинизация графики, оптимизация сайта(basic).
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Знание ПО:</span> Win/Linux; WordPress, Git, Photoshop/Gimp(для вёрстки); автоматизация с GULP, локальный веб-сервер, различные редакторы кода(Brackets и др.).
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Подробности:</span> Верстаю по стандартам W3C (валидный код), соблюдаю кроссбраузерность(IE, Chrome, FireFox).
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Личные качества:</span> ответственность, пунктуальность, аккуратность.
      </p>
      <p class="about-me__text">
        <span class="colored-text1 about-me__span">Цель:</span> вырасти из любителя в профессионала в сфере Web(frontend)-разработки, freelance.
      </p>
    </div>
  </div>

  <div id="works" class="my-works">
    <div class="container container_my-works">
      <h2 class="about-me__prof about-me__prof_works">Мои работы:</h2>
      <div class="my-works__wrapper">

      <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">HTML Academy - Pink</h3>
            <p class="my-works__work-description">
              Трёхстраничный (index/media/form) сайт, посвященный мобильному приложению.
              <br>Responsive: <span class="colored-text1">Responsive(320px-1200px).</span>.
              <br>Technologies: <span class="colored-text1">JS, БЭМ, Gulp, retina(2x)</span>
              <br>Свёрстано с макета HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-pink/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-pink/pink-media.html" class="my-works__work-link">Media</a>
              <a href="works/htmlacademy-pink/pink-contest.html" class="my-works__work-link">Form</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__pink.jpg" width="1017" height="751" alt="Htmlacademy.ru-Pink">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">HTML Academy - Sedona</h3>
            <p class="my-works__work-description">
              Трёхстраничный (index/media/form) туристический сайт.
              <br>Responsive: <span class="colored-text1">Responsive(320px-1200px).</span>.
              <br>Technologies: <span class="colored-text1">JS, БЭМ, Gulp, retina(2x)</span>
              <br>Курсовая работа Продвинутого интенсива(№11 c 22 мая по 28 июня 2017) HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-sedona/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-sedona/sedona-media.html" class="my-works__work-link">Media</a>
              <a href="works/htmlacademy-sedona/sedona-form.html" class="my-works__work-link">Form</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__sedona.jpg" width="1113" height="577" alt="Htmlacademy.ru-Glacy">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">HTML Academy - Glacy</h3>
            <p class="my-works__work-description">
              Двухстраничный сайт(index/catalog) интернет-магазина.
              <br>Adaptive/Responsive: <span class="colored-text1">adaptive(1200px-900px).</span>.
              <br>Technologies: <span class="colored-text1">JS</span>
              <br>Свёрстано с учебного макета HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-glacy/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-glacy/catalog-creamy.html" class="my-works__work-link">Catalog</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__glacy.jpg" width="1170" height="375" alt="Htmlacademy.ru-Glacy">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">Free psd - Eclipse</h3>
            <p class="my-works__work-description">
              Landing page.
              <br>Adaptive/Responsive: <span class="colored-text1">responsive</span>.
              <br>Свёрстано с бесплатного макета.
              <br><a class="my-works__work-link" href="http://blazrobar.com/free-psd-website-templates/eclipse-free-website-psd-template/">Ссылка на макет</a>
            </p>
            <div class="my-works__work-links">
              <a href="works/eclipse-free-psd/index.html" class="my-works__work-link">Index</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__eclipse.jpg" width="1403" height="817" alt="Htmlacademy.ru-Technomart">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">HTMLAcademy-Technomart</h3>
            <p class="my-works__work-description">
              Двухстраничный сайт(index/catalog) интернет-магазина.
              <br>Adaptive/Responsive: <span class="colored-text1">none(fixed, 960px)</span>.
              <br>Technologies: <span class="colored-text1">JS</span>
              <br>Свёрстано с учебного макета HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-technomart/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-technomart/technomart-catalog-perforators.html" class="my-works__work-link">Catalog</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__technomart.jpg" width="1188" height="798" alt="Htmlacademy.ru-Technomart">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">HTMLAcademy-Nerds</h3>
            <p class="my-works__work-description">
              Двухстраничный сайт(index/catalog) интернет-магазина.
              <br>Adaptive/Responsive: <span class="colored-text1">none(fixed, 880px)</span>.
              <br>Technologies: <span class="colored-text1">JS</span>
              <br>Свёрстано с учебного макета HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-nerds/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-nerds/catalog.html" class="my-works__work-link">Catalog</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__nerds.jpg" width="1181" height="821" alt="HTMLAcademy-Nerds">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">Htmlacademy.ru-Device</h3>
            <p class="my-works__work-description">
              Двухстраничный сайт(index/catalog) интернет-магазина.
              <br>Adaptive/Responsive: <span class="colored-text1">none(fixed, 1160px).</span>.
              <br>Technologies: <span class="colored-text1">JS</span>
              <br>Курсовая работа базового интенсива(#14 08.01-09.07 2016).
              <br>Свёрстано с учебного макета HTMLAcademy.ru.
            </p>
            <div class="my-works__work-links">
              <a href="works/htmlacademy-device/index.html" class="my-works__work-link">Index</a>
              <a href="works/htmlacademy-device/catalog-selfie-monopods.html" class="my-works__work-link">Catalog</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__device.jpg" width="1370" height="767" alt="Htmlacademy.ru-Device">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">One-Page.kz test-project</h3>
            <p class="my-works__work-description">
              Одностраничный сайт-анкета(заполненный моими данными).
              <br>Adaptive/Responsive: <span class="colored-text1">responsive(320+)</span>.
              <br>Technologies: <span class="colored-text1">JS, БЭМ, Gulp</span>
              <br>Тестовое задание на должность «HTML верстальщик» в компании One-Page.kz.
            </p>
            <div class="my-works__work-links">
              <a href="works/one-page-test/index.html" class="my-works__work-link">Index</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__one-page-test.jpg" width="370" height="230" alt="PixelPlus test-project">
        </div>

        <div class="my-works__work">
          <div class="my-works__work-overlay">
            <h3 class="my-works__work-title">PixelPlus test-project</h3>
            <p class="my-works__work-description">
              Тестовое задание на должность «WEB разработчик, HTML верстальщик» в компании Пиксель Плюс - 3 уровень сложности.
              <br>Adaptive/Responsive: <span class="colored-text1">responsive</span>.
              <br>Technologies: <span class="colored-text1">JS</span>
              <br><a class="my-works__work-link" href="http://www.pixelplus.ru/test/lvl3/pixelplus.ru-test-v3.psd">Ссылка на макет</a>
            </p>
            <div class="my-works__work-links">
              <a href="works/pixel-plus-test-psd/index.html" class="my-works__work-link">Index</a>
            </div>
          </div>
          <img class="my-works__work-img" src="img/my-works__pixel-plus.jpg" width="1267" height="686" alt="PixelPlus test-project">
        </div>
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container clearfix">
      <div class="used-materials">
        <span class="used-materials__span">В портфолио использованы:</span>
        <a class="used-materials__link" href="https://fonts.google.com/specimen/Open+Sans?selection.family=Open+Sans">OpenSans fonts</a>
        <a class="used-materials__link" href="http://www.flaticon.com/">Icons/Icon-font</a>
        <a class="used-materials__link" href="http://wallpaperswide.com/night_sky_3-wallpapers.html">Background</a>

      </div>
      <div class="copyright">
        ©<?php echo date(Y); ?>
      </div>
    </div>
  </footer>

  <div class="overlay"></div>

  <!-- Scripts______________________________________ -->
  <script src="script/jquery-3.1.1.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

  <script src="script/jquery-ui.min.js"></script>
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->

  <!--<script src="script/script.js"></script>-->
  <script src="script/script-min.js"></script>

</body>

</html>
