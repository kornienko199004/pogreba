<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


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
          <a class="page-header__logo" href="https://mldm.ru/">
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
            <li class="main-nav__item"><a href="https://mldm.ru/">Демонтаж</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/priem/">Прием</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/vyvoz/">Вывоз лома</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/stoimost/">Стоимость демонтажа</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/prices/">Цены</a></li>
            <li class="main-nav__item child-nav__parent">
              <a id="information-nav">Информация</a>
                <ul class="child-nav__list">
                  <li class="child-nav__item child-nav__item--active"><a>О компании</a></li>
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
          <h1 class="information__title">ООО «ФЕРРУМ»</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать демонтаж</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">О компании ООО«ФЕРРУМ»</h2>
        <p class="features__contant">Компания ООО«ФЕРРУМ» осуществляет прием лома черных металлов и цветных металлов   в наших
          пунктах приема металлолома в Санкт-Петербурге. По желанию Заказчика можем организовать вывоз металлолома с
          территории Заказчика. Покупаем б/у металлопрокат на более выгодных условиях, чем скупка металлолома.
          Приоритетным направлением ООО «ФЕРРУМ» является демонтаж металлоконструкций, станков, оборудования,
          котельных, подъём и резка кораблей. Так же при производстве демонтажных работ, по необходимости, выполняем
          высотные работы. Все работы осуществляют квалифицированные специалисты, которые могут решить любую
          производственную задачу.
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
        <h2 class="about-us__title">Почему мы?</h2>
          <p class="about-us__contant">
            Компанией ООО «ФЕРРУМ» за время существования, было сдано множество объектов с различным уровнем
            сложности - от самых простых, таких как разбор и демонтаж гаражей и заканчивая подъёмом и резкой кораблей. В
            каждом случае, строго соблюдаются все договорённости и сроки. Цена работ формируется только после выезда на
            место и оценкой объекта нашими сотрудниками. Стоимость работ складывается из множества факторов, таких как
            сложность и количество подготовительных и основных работ, согласования с контролирующими организациями,
            количество привлеченных сотрудников, техники и оборудования с инструментами, удаленность объекта, а также вывоз и
            утилизация образовавшегося лома и мусора. В большинстве случаев, при проведении демонтажа металлоконструкций,
            не заказчик платит нам, а мы платим заказчику за лом, так как мы покупаем образовавшийся лом. Наши специалисты
            просчитывают окончательную стоимость с максимальной выгодой для Заказчика.</p>
          
          <div class="slider" id="prices">
            <div class="slider__navigation">
              <button class="slider__button slider__button--checked">Черный металл</button>
              <button class="slider__button">Цветной металл</button>
            </div>
            <ul class="slider__list">
              <li class="slider__item">
                <ul class="cards-list">
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/othody_prokata.png" alt="железо">
                    </p>
                    <h3 class="card__title">Железо</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/vanna.jpg" alt="чугун">
                    </p>
                    <h3 class="card__title">Чугун</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/shaving.jpg" alt="стружка">
                    </p>
                    <h3 class="card__title">Стружка</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                </ul>
              </li>
              <li class="slider__item slider__item--no-js">
                <ul class="cards-list">
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/priem-medi-provoloka.jpg" alt="медная проволока">
                    </p>
                    <h3 class="card__title">Медная проволока / кабель</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/priem-medi.jpg" alt="лом меди">
                    </p>
                    <h3 class="card__title">Лом меди</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                  <li class="cards-list__item card">
                    <p class="card__image">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/lom-svinets.jpg" alt="медная проволока">
                    </p>
                    <h3 class="card__title">Лом свинца</h3>
                    <p class="card__contant">по запросу</p>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </section>