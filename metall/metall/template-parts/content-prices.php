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
            <li class="main-nav__item main-nav__item--active"><a>Цены</a></li>
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
          <h1 class="information__title">Цены приема<br/> металлолома</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать демонтаж</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">Прием металлолома в СПб</h2>
        <p class="features__contant">Рынок вторичного сырья, а именно прием металлолома в Санкт-Петербурге,
          имеет важное значение для жизни города. Избавляя владельцев изживших себя металлических конструкций и принося им выгоду,
          пункты приема лома регулярно расширяют ассортимент оказываемых услуг.
          Но самым актуальным вопросом по-прежнему остаются цены приема металлолома в СПб и факторы влияющие на них.
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
        <h2 class="about-us__title">Цены на прием металлолома в Санкт-Петербурге</h2>
          <p class="about-us__contant">Каждая компания формирует прайс-лист на скупку
            черного и цветного лома исходя из огромного количества факторов. Помимо спроса на определенные
            наименования материала, по мере расширения производств, рынок вторичного металла имеет ярко выраженную сезонность.
            Колебания стоимости могут достигать 50-70%, в таких условиях не все компании способны сохранить выгодные для клиентов
            условия сотрудничества. ООО Феррум независимо от сезона и спроса, предлагает провести оценку по фото,
            и определить порядок цен быстро и максимально точно. Если предварительная оценка вас устроит,
            а зачастую это происходит именно так, то специалисты компании готовы выполнить всю работу «под ключ»,
            избавляя вас от траты времени на непрофильные заботы. Но о преимуществах сотрудничества мы еще поговорим,
            вернемся к вопросу цены приема металлолома в СПб
            и продемонстрируем ее градацию в зависимости от разных факторов.</p>

          <h3 class="about-us__caption">Что нужно для проведения работ по демонтажу</h3>
          <p class="about-us__contant">Независимо от целей демонтажа, для проведения работ
          понадобится квалификация компании и подписание документов, включая Договор.
          Без должного опыта можно нарваться на «специалистов», которые возьмутся за работу и
          нанесут повреждения близлежащим строениям или повредят коммуникации. А если при этом
          отношения с ними у заказчика были чисто понятийные?!  Безопасность и
          аккуратное выполнение работ характеризует опытные компании,
          наша компания ООО«ФЕРРУМ» без труда выполнить такую работу.</p>

          <h3 class="about-us__caption">Что влияет на стоимость сдаваемого лома:</h3>
          <ul class="about-us__list">
            <li>Номенклатурная группа металлолома (черный или цветной).</li>
            <li>Объем партии сдаваемого лома.</li>
            <li>Характеристики сдаваемого материала (физические, химические).</li>
            <li>Порядок расчетов: наличный или безналичный.</li>
          </ul>

          <p class="about-us__contant">К характеристикам относятся содержание загрязнений и примесей в сдаваемой партии,
            а если речь идет о кабеле, то важным фактором является толщина.
            Но этот список нельзя считать полным, так как для черного и цветного металлического вторсырья есть свои особенности.
            Поэтому предлагаем вам ознакомиться с общими и частными критериями,
            определяющими цены приема металлолома в СПб подробнее.</p>
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
        <h2 class="likbez__title">Сдать черный лом или цветной: что дороже</h2>
          <p class="likbez__about">Так как ответ на этот вопрос очевиден, то надолго останавливаться на этом мы не будем.
            Если за лом меди, сданный в переработку, можно получить порядка 310 руб./кг, то чугун в пункт приема лома примут
            за 16 100 руб./тонну. Говорить о разнице в цене между железом(черным ломом) и редкими цветными металлами вообще не приходиться,
            она колоссальна. Олово, например,
            можно сдать в пункт приема цветмета за 1 200руб./кг, то есть разница по цене практически в 1000 раз.</p>

            <p class="likbez__about">Лом цветных металлов по возрастанию цены можно разделить на три группы:</p>

          <ol class="likbez__list">
            <li class="likbez__item">Никелевая</li>
            <li class="likbez__item">Алюминиевая</li>
            <li class="likbez__item">Медно-латунная</li>
          </ol>
          <h3 class="likbez__caption">Градация по объему и влияние на цену (цветной металлолом)</h3>
          <table class="prices-table">
            <tbody>
              <tr>
                <td>Цена при объеме до 100 кг (приравниваем к 100%)</td>
                <td>Цена при объеме от 100 кг до 1 тонны (в процентах)</td>
                <td>Цена при объеме свыше тонны (%)</td>
              </tr>
              <tr>
                <td>100%</td>
                <td>101,5-103,5%</td>
                <td>103,5% и выше</td>
              </tr>
            </tbody>
          </table>
          <p class="likbez__about">В зависимости от конкретного наименования разница в стоимости по объему
            сдаваемого лома будет меняться. Так например, медную стружку можно сдать по цене в среднем 310 руб./кг,
            а при объеме свыше тонны она стоит уже 320 руб./кг. То есть в процентах это порядка 3,2%. А если мы рассмотрим
            разницу в цене, скажем, на примере алюминиевого радиатора, то она составит около 10%. В денежном выражении это
            40 руб./кг при небольшом объеме и 44 руб./кг, если вы хотите сдать в металлолом цветмет этого наименования свыше 1000 кг.
            Вот такие разные цены приема металлолома в СПб в зависимости от объема.</p>

          <h3 class="likbez__caption">Чистота металла и наличие примесей</h3>
          <p class="likbez__about">«Чем больше примесей в металле, тем он дешевле» - так бывает часто.
            Но наличие примесей и их количество, вопреки очевидному мнению не всегда прямо пропорционально
            снижению цены. Если мы говорим о дорогостоящем или редком металле, то все ровно наоборот. Чем выше содержание, тем дороже можно сдать лом.
            Предлагаю рассмотреть влияние на формирование цены при разном содержании меди в бронзе.</p>

          <table class="prices-table">
            <tbody>
              <tr>
                <td>Бронза с содержанием меди свыше 70 %</td>
                <td class="main">215-220 руб./кг</td>
              </tr>
              <tr>
                <td>Состав бронзы на 80% и более состоящий из меди</td>
                <td class="main">235-240 руб./кг</td>
              </tr>
            </tbody>
          </table>
          <p class="likbez__about">Если привести в пример, скажем, никель, то ситуация еще более кардинальная:</p>

          <table class="prices-table">
            <tbody>
              <tr>
                <td>Лом никеля, при его содержании порядка 7%</td>
                <td class="main">45 руб./кг</td>
              </tr>
              <tr>
                <td>Содержание никеля в составе лома свыше 9,5%</td>
                <td class="main">75 руб./кг</td>
              </tr>
            </tbody>
          </table>

          <h3 class="likbez__caption">Лом цветных металлов или стружка: как тип влияет на цены</h3>
          <p class="likbez__about">От того, в каком виде металл, подлежащий вторичной переработке, тоже зависит его стоимость.
            Предлагаем для наглядности
            посмотреть на диапазон цен на лом и стружку разных видов цветного металлолома.</p>
          <div class="table__wrapper table__wrapper--comparison">
            <div class="table__control">
              <input type="radio" checked name="column" value="2">
              <input type="radio" name="column" value="3">
            </div>
            

          <table class="prices-table table__comparison">
            <thead>
              <tr>
              <th>Номенклатура цветмета</th>
              <th class="second-column">Стружка (усредненная цена в руб.)</th>
              <th class="third-column hidden-column">Лом (руб. и примечание)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="main">Медь</td>
                <td class="second-column">340</td>
                <td class="third-column hidden-column">340</td>
              </tr>
              <tr>
                <td class="main">Алюминий</td>
                <td class="second-column">55</td>
                <td class="third-column hidden-column">100 за профиль, пищевой или электротехнический</td>
              </tr>
              <tr>
                <td class="main">Латунь</td>
                <td class="second-column">220</td>
                <td class="third-column hidden-column">243 кусок или микс</td>
              </tr>
            </tbody>
          </table>
          </div>
          <p class="likbez__about">Конечно, номенклатура гораздо шире, мы рассмотрели это в качестве примера,
            чтобы вы понимали, что колебание в цене по этому критерию в
            диапазоне от 10 до 80% в зависимости от конкретного наименования материала.</p>

          <h3 class="likbez__caption">Как форма оплаты влияет на цену за металлолом</h3>
          <p class="likbez__about">Конечно, для удобства клиентов большинство компаний очень гибкие как по условиям, так и по форме оплаты.
            Поэтому прайс на прием лома формируется и по наличному и по безналичному расчету.
            Ведь независимо от статуса продавца, его товар ценен для переработки на вторичном рынке.
            Физическое лицо реализует предметы быта или оборудование, находящееся в прошлом в
            его личном пользовании, а юридические лица сдают металлолом в более серьезном объеме.</p>
          <p class="likbez__about">Цена за безналичный расчет всегда выше, чем за наличный, но насколько выше, зависит от конкретной
            номенклатурной группы сдаваемого материала.
            Причем стоимость по безналичному расчету за один и тот же сдаваемый лом может отличаться для юридических и
            физических лиц. Но это уже совершенно не
            обязательно и зависит от политики компании, принимающей вторсырье на переработку.</p>

          <h3 class="likbez__caption">Преимущества нашего приемного пункта</h3>
          <ul class="likbez__list">
            <li class="likbez__item">Готовы оказать весь комплекс услуг под ключ, включая демонтаж, резку, доставку, сортировку и переработку металлолома.
              Если такой необходимости нет, то наш пункт приема выгодно купит имеющийся объем и ассортимент металлолома, которым вы располагаете.</li>
            <li class="likbez__item">Отслеживаем актуальность прайс-листа на сайте в соответствии с
              формированием цены на сдачу металлолома в переработку на сегодняшний день.</li>
            <li class="likbez__item">В наличии есть точные весы, вся необходимая техника в исправном состоянии и квалифицированные специалисты компании,
              готовые проконсультировать, осмотреть и принять на переработку черный и цветной металлолом.</li>
          </ul>

          <h3 class="likbez__caption">Как узнать нашу актуальную цену на прием лома в СПб:</h3>
          <ul class="likbez__list">
            <li class="likbez__item">На сайте mldm.ru</li>
            <li class="likbez__item">По телефону +7(960)275-68-26</li>
          </ul>
          <p class="likbez__about">Как видите, определение цены приема металлолома в СПб - дело сложное и требует индивидуального подхода.
            Но очевидно одно, мы предложим цену тем больше, чем больше металлолома вы решите сдать. </p>
      </section>