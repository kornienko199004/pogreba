<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
/**
 ** @package WordPress
 * @subpackage metall
 * @since metall
 */

?><!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php wp_head(); ?>
    <meta name="yandex-verification" content="648a6350331a7f48" />
  </head>
  <body>
    <!-- Yandex.Metrika counter -->
    <script>
      (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
      m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
      (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

      ym(52983214, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
      });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52983214" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
  <button id="toTop">
      <svg><use xlink:href="#cursor"></use></svg>
      <span class="visually-hidden">Наверх</span>
    </button>
    <header class="page-header">
      <div class="page-header__wrapper page-header__wrapper--top">
        <div class="work-hours">
          <svg><use xlink:href="#clock"></use></svg>
          Работаем ежедневно с 09-00 &mdash; до 21-00
        </div>
      </div>
      <div class="page-header__wrapper page-header__wrapper--middle">
        <div class="page-header__logo-wrapper">
          <a class="page-header__logo">
            Демонтаж, прием металла СПб
          </a>
        </div>
        <div class="page-header__inner">
          <div class="page-header__phone phone">
            <p class="page-header__number phone__number">+7(921)935-23-39</p>
            <a class="phone__link" href="">
              <span>О</span>
              <span>б</span>
              <span>р</span>
              <span>а</span>
              <span>т</span>
              <span>н</span>
              <span>ы</span>
              <span>й&nbsp;</span>
              <span>з</span>
              <span>в</span>
              <span>о</span>
              <span>н</span>
              <span>о</span>
              <span>к</span>
            </a>
          </div>
          <div class="page-header__nav user-nav">
            <button class="page-header__button user-nav__button button demontag-button" type="button">Заказать демонтаж</button>
            <a href="#photo-form" class="page-header__button user-nav__button button">Оценка по фото</a>
          </div>
        </div>
      </div>
      <div class="page-header__wrapper page-header__wrapper--bottom">
        <nav class="main-nav main-nav--no-js">
          <div class="main-nav__toggle-wrapper">
            <a class="main-nav__toggle">
              <div class="main-nav__toggle-image main-nav__toggle-image--close">
                <svg><use xlink:href="#iconMenuCross"></use></svg>
              </div>
              <div class="main-nav__toggle-image main-nav__toggle-image--open">
                  <svg><use xlink:href="#iconMenuBurger"></use></svg>
              </div>
              <span class="visually-hidden">Открыть каталог</span>
            </a>
          </div>
          <ul class="main-nav__list">
            <li class="main-nav__item main-nav__item--active"><a>Демонтаж</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/priem/">Прием</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/vyvoz/">Вывоз лома</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/stoimost/">Стоимость демонтажа</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/prices/">Цены</a></li>
            <li class="main-nav__item child-nav__parent">
              <a><span id="information-nav">Информация</span></a>
                <ul class="child-nav__list">
                  <li class="child-nav__item"><a href="https://mldm.ru/about/">О компании</a></li>
                  <li class="child-nav__item"><a href="https://mldm.ru/posts/">Статьи</a></li>
                </ul>
          </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="page-container">
      <section class="information">
        <div class="information__wrapper">
          <h1 class="information__title">Демонтаж<br/>металлоконструкций</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать демонтаж</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">Выполнение демонтажа любой сложности под ключ</h2>
        <p class="features__contant">Конструкции из металла присутствуют сегодня практически на любом предприятии.
          Каркасы, навесы, будки из металла часто можно встретить на территории частного участка или дачи.
          Но со временем эти конструкции приходят в негодность или становятся просто не нужными.
          В таком случае необходим <a href="#dismantling">демонтаж металлоконструкций в СПБ</a>, который может провести ООО«ФЕРРУМ» с дальнейшим вывозом всех материалов.
          Это комплексная работа, которая требует грамотной оценки ситуации, использования специального
          оборудования и техники. Только в таком случае можно быть уверенным что демонтаж пройдет успешно и безопасно.
        </p>
        <h3 class="feature__title feature__title--medium">Наши преимущества</h3>
        <ul class="features__list">
          <li class="features__item feature">
            <div class="feature__wrapper feature__wrapper--image">
              <svg>
                <use xlink:href="#weight"></use>
              </svg>
            </div>
            <div class="feature__wrapper">
              <h3 class="feature__title feature__title--small">Полный комплекс услуг</h3>
              <p class="feature__about">Демонтаж, резка, доставка, сортировка, переработка</p>
            </div>
          </li>
          <li class="features__item feature">
            <div class="feature__wrapper feature__wrapper--image">
              <svg>
                <use xlink:href="#truck"></use>
              </svg>
            </div>
            <div class="feature__wrapper">
              <h3 class="feature__title feature__title--small">Работаем с 9 - до 21 часа</h3>
              <p class="feature__about">Выезд оценщика в течении часа.</p>
            </div>
          </li>
          <li class="features__item feature">
            <div class="feature__wrapper feature__wrapper--image">
              <svg>
                <use xlink:href="#man"></use>
              </svg>
            </div>
          <div class="feature__wrapper">
              <h3 class="feature__title feature__title--small">Мы ценим своих клиентов</h3>
              <p class="feature__about">Индивидуальный подход к<br/>каждому клиенту</p>
            </div>
          </li>
          <li class="features__item feature">
            <div class="feature__wrapper feature__wrapper--image">
              <svg>
                <use xlink:href="#money"></use>
              </svg>
            </div>
            <div class="feature__wrapper">
              <h3 class="feature__title feature__title--small">Наличие всех документов</h3>
              <p class="feature__about">Все необходимые лицензии и разрешительные документы, предоставление
                закрывающих документов</p>
            </div>
          </li>
        </ul>
      </section>
      <section class="about-us">
        <h2 class="about-us__title">Виды демонтажа</h2>
        <p class="about-us__contant">
            В зависимости от конкретной ситуации демонтаж металлоконструкций может быть нескольких видов.
            Чаще всего это зависит от сложности работы. Можно выделить наиболее популярные типы демонтажа:
        </p>
            <ul class="about-us__list">
              <li>Простой демонтаж, когда можно легко разобрать конструкции и увезти в другое место.</li>
              <li>Сложный демонтаж требует использования резки металла, разбора сложных конструкций.</li>
              <li>Работы на высоте всегда отличаются особой опасностью.</li>
            </ul>
        <p class="about-us__contant">
            Демонтаж любых металлоконструкций представляет собой сложную задачу. Необходимо грамотно все просчитать,
            составить план действий и только после этого приступать к работе. Все части конструкции должны разбираться поэтапно.
        </p>
      </section>
      <section class="likbez">
        <h2 class="likbez__title">Ведение работ</h2>
        <div class="likbez__wrapper">
          <h3 class="likbez__caption">Порядок демонтажа</h3>
          <p class="likbez__about">Демонтаж металлических конструкций может показаться простой работой.
            Это совсем не так, поскольку есть целый ряд сложностей и трудностей.
            Важно соблюдать четкую последовательность действий при демонтаже:</p>
          <ul class="likbez__list">
            <li class="likbez__item">Для начала специалисты составляют план работы.</li>
            <li class="likbez__item">Конструкции постепенно разбираются. При этом используются специальное оборудование и транспорт.</li>
            <li class="likbez__item">Листы и фрагменты металла грузятся на транспорт.</li>
            <li class="likbez__item">Вывоз конструкций с территории участка.</li>
            <li class="likbez__item">Уборка территории.</li>
          </ul>
          <h3 class="likbez__title">Цены на демонтаж металла за тонну в рублях.</h2>
          <table class="price-table">
            <thead>
              <tr>
              <th>Работы</th>
              <th>Минимальная цена за тонну </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Несложный демонтаж конструкций</td>
                <td class="main">1 000</td>
              </tr>
              <tr>
                <td>Сложные металлоконструкции</td>
                <td class="main">1200</td>
              </tr>
              <tr>
                <td>Крупные сложные конструкции</td>
                <td class="main">2000</td>
              </tr>
            </tbody>
          </table>
          <h3 class="likbez__caption">Демонтаж с использованием спецтехники</h3>
          <p class="likbez__about">При высотных работах привлекают вышки, краны и другую спецтехнику.
            При этом крайне важно соблюдать максимальную осторожность во время проведения работ.
            Каждый шаг должен грамотно продумываться. Только так можно гарантировать правильность
            выполнения демонтажа. Это целый комплекс работ,
            в которых участвует большое количество людей.
            Необходимо задействовать сварщиков, грузчиков, водителей, крановщиков, резчиков.</p>
          <h3 class="likbez__caption">Сложность работы</h3>
          <p class="likbez__about">Демонтаж любых конструкций является потенциально опасным занятием.
            Именно поэтому специалисты настоятельно не рекомендуют выполнять такие работы самостоятельно.
            Необходимо привлекать опытных специалистов. Также при необходимости нужно использовать
            специальное оборудование и тяжелую технику.</p>
        </div>
      </section>
      <section class="dismantling">
        <div class="dismantling__wrapper" id="dismantling">
          <h2 class="dismantling__title">Примеры демонтажных работ</h2>
          <p class="dismantling__caption">Приоритетным направлением компании ООО«ФЕРРУМ» является демонтаж металлоконструкций.
            Выполняем работы любой сложности от простого реза до резки кораблей. Производим подъём кораблей с последующей разделкой.</p>
        </div>
        <div class="dismantling__inner">
          <div class="dismantling__control">
            <a class="dismantling__button dismantling__button--preview">
              <span class="visually-hidden">Назад</span>
              <div class="dismantling__button-image">
                <svg>
                  <use xlink:href="#arrowLeft"></use>
                </svg>
              </div>
            </a>
            <a class="dismantling__button dismantling__button--next">
              <span class="visually-hidden">Вперед</span>
              <div class="dismantling__button-image">
                <svg>
                  <use xlink:href="#arrowRight"></use>
                </svg>
              </div>
            </a>
          </div>
          <ul class="dismantling__slider">
            <li class="dismantling__slide">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_4.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
            <li class="dismantling__slide">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_6.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
            <li class="dismantling__slide">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_7.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
            <li class="dismantling__slide">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_8.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
            <li class="dismantling__slide">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_9.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
            <li class="dismantling__slide dismantling__slide--current">
              <div class="dismantling__image"><img src="<?php echo get_template_directory_uri(); ?>/img/dismantling_5.jpg" alt=""></div>
              <p class="dismantling__caption"></p>
            </li>
          </ul>
        </div>
      </section>