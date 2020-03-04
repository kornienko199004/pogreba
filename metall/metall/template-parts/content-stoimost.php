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
            <li class="main-nav__item main-nav__item--active"><a>Стоимость демонтажа</a></li>
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
          <h1 class="information__title">Стоимость демонтажа<br/>металлоконструкций</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать демонтаж</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">Демонтаж металлоконструкций</h2>
        <p class="features__contant">Мы живем в обществе, где деревянные корабли давно вытеснены стальными, вагоны,
        автомобили, оборудование – практически все выполняется из металла. Да и современное строительство,
        особенно если речь идет о промышленных зданиях, не обходится без металлических конструкций.
        Но, наряду с ростом строительно-монтажных работ, возникает необходимость <a href="https://mldm.ru/">демонтировать объекты</a>.
        Причины у этого могут быть разные, одни только ларьки у метро чего стоят, их то ставят, то сносят каждый год.
        Доверять демонтаж абы кому не следует, чтобы хоть частично вернуть вложенные средства.
        Компании заказчики стремятся получить минимальную стоимость демонтажа металлоконструкций за тонну,
        и прочитав нашу статью, вы поймете, что это возможно.
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
        <h2 class="about-us__title">Чем демонтаж металлоконструкций отличается от демонтажа металлолома</h2>
          <p class="about-us__contant">Если конструкция демонтируется с целью, скажем, выполнить монтаж снова из того же материала,
          но в другом месте, то это одно. Если конструкция себя изжила по каким-то причинам, и дальнейший монтаж материала не
          предусмотрен, то это другое. В таком случае можно применять все легальные действенные методы резки металла, не сохраняя
          ни саму конструкцию, ни ее агрегаты в пригодном состоянии.
          Компания получает выгоду, сдавая металлоконструкции на металлолом. Причем зачастую это будет деловой лом.</p>

          <h3 class="about-us__caption">Что нужно для проведения работ по демонтажу</h3>
          <p class="about-us__contant">Независимо от целей демонтажа, для проведения работ
          понадобится квалификация компании и подписание документов, включая Договор.
          Без должного опыта можно нарваться на «специалистов», которые возьмутся за работу и
          нанесут повреждения близлежащим строениям или повредят коммуникации. А если при этом
          отношения с ними у заказчика были чисто понятийные?!  Безопасность и
          аккуратное выполнение работ характеризует опытные компании,
          наша компания ООО«ФЕРРУМ» без труда выполнить такую работу.</p>

          <h3 class="about-us__caption">Демонтаж металлических конструкций: цена за тонну металла</h3>
          <p class="about-us__contant">Именно в тоннах принято измерять стоимость за демонтаж,
          но это не фиксированная цена, а расчетная величина. </p>

          <h3 class="about-us__caption">Факторы, оказывающие влияние на цену демонтажа:</h3>
          <ul class="about-us__list">
            <li>Объем работ, который требуется произвести, напрямую влияет на
            стоимость демонтажа металлоконструкций за тонну. А стоимость, деленная на объем, как раз,
            и формирует цену за тонну демонтажа.</li>
            <li>Наличие, количество и тип соединительных элементов конструкции.
            Сварные элементы или болтовое соединение - для определения трудоемкости работ это имеет значение.</li>
            <li>Место дислокации металлоконструкций, которые требуется демонтировать, тоже важно.
            Это обусловлено тем, что для выполнения работы требуется использование механизмов или приспособлений.
            Так, например, работы по высотному демонтажу выполняются с привлечением промышленных альпинистов,
            а расположенные в непосредственной близости от других строений сооружения, требуют заказа спец техники.</li>
            <li>Наличие высотности работ и как следствие привлечение
            техники для ее выполнения напрямую влияет на цену.</li>
            <li>Стесненные условия демонтажа стоит выделить отдельно, так это всегда удорожание за
            услуги и понижение стоимости за тонну металла соответственно.</li>
          </ul>
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
        <h2 class="likbez__title">Цены на демонтаж металла за тонну в рублях.</h2>
          <table class="price-table">
            <thead>
              <tr>
              <th>Работы</th>
              <th>Минимальная цена за тонну </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Несложный демонтаж конструкций без необходимости его подъема, спуска, извлечения. То есть демонтаж
                металлоконструкций, размещенных на земле в нестесненных условиях. Толщина металла при этом до 4 см.</td>
                <td class="main">1 000</td>
              </tr>
              <tr>
                <td>Сложные металлоконструкции, такие как строительные объекты, их части, массивное промышленное оборудование,
                тяговые локомотивы и другие конструкции.</td>
                <td class="main">1200</td>
              </tr>
              <tr>
                <td>Крупные сложные конструкции и элементы, включая морские суда, линии электро-передач, тяжелую военную технику.</td>
                <td class="main">2000</td>
              </tr>
            </tbody>
          </table>
          <h3 class="likbez__caption">Как узнать стоимость за демонтаж металлоконструкций</h3>
          <p class="likbez__about">Обычно у Заказчика - все просто, а у Исполнителя – все сложно, поэтому
          оценивать работы по телефону дело неблагодарное. Но до выезда на объект можно определить порядок цифр,
          отправив нам фото. Наши оценщики обладают достаточной квалификацией и опытом, чтобы сориентировать вас про стоимость
          за демонтаж металлоконструкций за тонну.</p>

          <h3 class="likbez__caption">Какое техническое оснащение необходимо для работ по демонтажу металлоконструкций</h3>
          <p class="likbez__about">Чем сложнее конструкция, тем больше требуется для ее демонтажа. Срезать заклепки, соединяющие
          элементы, можно обыкновенной болгаркой. Газорезка на пропане тоже постоянно в ходу у демонтажника. Но это
          далеко не все, что может понадобиться. Если на пути демонтажника изделия из нержавеющей стали, то на смену
          газореке придет плазморезка. А прекрасно справляется с разрезанием каркасных конструкций навесные гидроножницы. </p>

          <h3 class="likbez__caption">Оборудование для погрузки металлоконструкций после демонтажа</h3>
          <p class="likbez__about">Разборка высотных сооружения производиться технологически сверху вниз.
          Такой порядок обеспечивает целостность делового металла для дальнейшей ее сдачи по соответствующей стоимости в металлолом.
          В ряд случаев для безопасного извлечения конструкций требуется несколько единиц техники, таких как, например,
          башенный или автомобильный кран. О необходимости привлечения альпинистов для высотных работ мы уже упоминали.
          Осталось отметить, что их задача в данном процессе обеспечить спуск деталей и частей металла с высоты на землю.
          Делают они это, понятное дело, работая все с той же грузоподъемной техникой и подъемниками.</p>
          <p class="likbez__about">Ознакомившись с материалом статьи, вы поймете, из чего складывается стоимость демонтажа
          металлоконструкций за тонну. Свяжитесь с нами любым удобным способом, и мы ответим на ваши вопросы!  </p>
      </section>