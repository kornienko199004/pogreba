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
            <button class="page-header__button user-nav__button button demontag-button" type="button">Заказать вывоз</button>
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
            <li class="main-nav__item main-nav__item--active"><a>Вывоз лома</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/stoimost/">Стоимость демонтажа</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/prices/">Цены</a></li>
            <li class="main-nav__item child-nav__parent">
              <a id="information-nav">Информация</a>
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
          <h1 class="information__title">Вывоз лома черных<br/>и цветных металлов</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать вывоз</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">Вывоз металлолома в СПБ и Ленинградской области от 100 кг</h2>
        <p class="features__contant">Необходимость демонтажа металлических конструкций возникает повсеместно и
          неуклонно растет. Крупные стройки и производства, использующие
          металлические комплектующие, время от времени заинтересованы в их вывозе и
          утилизации. Обеспечить достойную цену за металлический лом можно,
          осуществляя вывоз лома от 100 кг непосредственно с места демонтажа
          или складирования.
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
        <h2 class="about-us__title">Как сделать заказ на вывоз лома черных и цветных металлов</h2>
          <p class="about-us__contant">У этого процесса есть конкретные этапы действий, при соблюдении которых, не
            будет возникать недопонимания с исполнителем работ.</p>
          <ul class="about-us__list">
            <li>Для того, чтобы сделка в конечном итоге состоялась,
              вам необходимо удостовериться в том, что вес металла действительно больше либо равен ста кг. </li>
            <li>Так как это немаленький объем и потребуется привлечение спецтехники,
              то важным требованием является возможность подъехать к месту складирования.
              То есть Заказчик услуги обеспечивает наличие подъездных путей для погрузки.</li>
            <li>Кроме массы для вывоза груза важно понимать его габариты.
              Здесь возможны варианты, в зависимости от того, какой металлолом подлежит вывозу.
              Для цветного лома, подготовленного для транспортировки, понадобятся показатели длины в упакованном виде.</li>
            <li>Так как, заказывая вывоз металлолома от 100 кг, компания не всегда имеет возможность
              подготовить его для погрузки, то есть еще один нюанс. Важно определить, есть ли необходимость производить
              демонтажные работы и осуществлять резку металла по месту для последующей транспортировки.</li>
            <li>Кто производит погрузку на транспортное средство, заказчик или исполнитель
              услуги? Это напрямую влияет на стоимость, так как погрузо-разгрузочные работы могут потребовать
              задействование дополнительных единиц техники. Если погрузка нужна, то важно понимать, откуда она
              будет выполняться. То есть, нужно ли, например, забирать металлолом с этажей при помощи грузового крана. </li>
          </ul>
          <p class="about-us__contant">Все эти и многие другие моменты прозрачны и обсуждаемы, поэтому не откладывайте звонок
            в нашу компанию ООО Феррум для уточнения деталей. Мы заинтересованы в клиентах, поэтому делаем свою работу
            качественно и всегда исходя из их индивидуальных потребностей. Но кому и почему выгодно не сдавать самостоятельно
            в Пункт приема металла, а заказывать вывоз с места?!</p>
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

      <section class="likbez">
        <h2 class="likbez__title">Работа с ООО«ФЕРРУМ»</h2>
          <h3 class="likbez__caption">Почему выгодно производить вывоз металлолома: причины</h3>
          <p class="likbez__about">Время – деньги, которое нужно ценить. Поэтому зачем компаниям,
            занимающимся производством или строительством тратить время на непрофильную работу.
            Гораздо выгоднее, доверить это профессионалам своего дела, которые сделают все быстро,
            четко и за выгодную обеим сторонам сделки стоимость. Если посчитать временные затраты и проблемы,
            которые могут возникнуть на пути самостоятельного демонтажа, спуска, погрузки и перевозки для вывоза
            металла, то окажется гораздо выгоднее воспользоваться готовой услугой на вывоз лома от 100 кг под ключ.</p>
          <p class="likbez__about">
          Давайте для наглядности сравним показатели, чтобы вы поняли почему выгодно найти исполнителя,
          а не действовать самостоятельно.</p>
          <h3 class="likbez__caption">Сравнительный анализ:</h3>
          <div class="table__wrapper table__wrapper--comparison">
            <div class="table__control">
              <input type="radio" checked name="column" value="2">
              <input type="radio" name="column" value="3">
            </div>
            <table class="table__comparison">
              <thead>
                <tr>
                <th>Показатель</th>
                <th class="second-column">
                  Работа с ООО«ФЕРРУМ»
                </th>
                <th class="third-column hidden-column">
                    Делаете самостоятельно
                  </th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="main">Техника</td>
                  <td class="second-column">Наличие специализированной техники требуемых характеристик и габаритов для перевозки металлолома                  </td>
                  <td class="third-column hidden-column">Нужно арендовать технику, которой может не быть в нужный момент. К тому же,
                    требуется понимать, какую именно технику заказывать, в противном случае можно потерять деньги и время</td>
                </tr>
                <tr>
                  <td class="main">Рабочие</td>
                  <td class="second-column">Сотрудники, которые могут практически на автомате выполнять работу по демонтажу и погрузке металла для транспортировки.
                    Говорить, что с закрытыми глазами не будем, все-таки работа ответственная</td>
                  <td class="third-column hidden-column">Вряд ли у вас в распоряжении есть рабочие, не занятые в каком-то процессе. Чтобы привлечь их к сбору,
                    подготовке и вывозу металла, нужно быть уверенными,
                    что они справятся с этой задачей. Кроме того, пока они занимаются вывозом лома, кто будет делать их работу?</td>
                </tr>
                <tr>
                  <td class="main">ТБ</td>
                  <td class="second-column">Соблюдение техники безопасности у нас уже практически в крови</td>
                  <td class="third-column hidden-column">За своих сотрудников отвечаете вы сами, а резка и транспортировка металла дело нехитрое только с виду…</td>
                </tr>
                <tr>
                  <td class="main">Время</td>
                  <td class="second-column">Подстроится под график работы предприятия или строительного объекта – одна из наших задач,
                    вам не придется терпеть простои.</td>
                  <td class="third-column hidden-column">Чтобы организовать вывоз без отрыва от производства придется, опять-таки, отвлекать сотрудников, а если
                    арендованная техника не приедет вовремя или кто-то из рабочих подведет, то вся подготовка насмарку.</td>
                </tr>
                <tr>
                  <td class="main">Комплексный подход</td>
                  <td class="second-column">Не нужно думать, что заказывая вывоз металлолома с перевозкой и погрузо-разгрузочными работами,
                    вы с лихвой переплатите. На самом деле, компаниям гораздо выгоднее брать заказ под ключ, чем работы
                    по отдельности. Поэтому эффект будет обратный, вы скорее всего сэкономите.</td>
                  <td class="third-column hidden-column">Аренда техники, зарплата рабочих, множество движений по вклинивание в расписание труда не
                    свойственной для вашей организации деятельности – все это точно не относиться к оптимизированным
                    эффективным процессам. Если вам удалось все организовать без ущерба основной деятельности, то вы,
                    скорее, исключение из правил.</td>
                </tr>
              </tbody>
            </table>
          </div>
          <h3 class="likbez__caption">Преимущества работы с ООО Феррум для вас:</h3>
          <ul class="likbez__list">
            <li class="likbez__item">Компания выкупает металлолом дорого, и даже с учетом расходной части по дополнительным услугам
              (резка, погрузка и перевозка), для заказчика это очень выгодно.</li>
            <li class="likbez__item">Мы работаем с огромным ассортиментом металлолома. Чтобы вы не хотели утилизировать,
              если в составе есть Ferrum, то обязательно звоните нам.</li>
            <li class="likbez__item">Мы работаем с огромным ассортиментом металлолома. Чтобы вы не хотели утилизировать, если в
              составе есть Ferrum, то обязательно звоните нам.</li>
            <li class="likbez__item">Расчеты производятся любыми удобными заказчику способами, документы оформляются быстро и четко.</li>
          </ul>
          <p class="likbez__about">Одним словом, работать с ООО Феррум – сплошное удовольствие, а если при этом вы осуществите вывоз металлолома
            от 100 кг по привлекательной цене, то вдвойне!</p>
      </section>