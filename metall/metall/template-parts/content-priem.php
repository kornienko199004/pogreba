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
            <li class="main-nav__item main-nav__item--active"><a>Прием</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/vyvoz/">Вывоз лома</a></li>
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
          <h1 class="information__title">Прием<br/>металлолома</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать вывоз</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features" id="about-company">
        <h2 class="features__title">Прием лома цветных и черных металлов в СПБ и Ленинградской области</h2>
        <p class="features__contant">На предприятии или в быту скапливается огромное количество ненужного металла.
          Это могут быть короба систем вентиляции или старые никому не нужные чугунные ванны.
          Даже при беглом осмотре собственной дачи, можно увидеть, как минимум несколько десятков килограмм,
          которые никогда не будут использованы в хозяйстве. Давать ржаветь металлу – не самая лучшая идея.
          Оптимальный выход – привлечь компанию, которая самостоятельно проводит прием металлолома.
          Какие преимущества может получить потребитель?
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
        <h2 class="about-us__title">Погрузка металла</h2>
          <p class="about-us__contant">Металлолом не отличается правильными формами. Погрузить в частный транспорт и вывезти по
        определенному адресу – достаточно сложная логистическая задача.
        Нанимать транспорт тоже не всегда выгодно. Для автомобиля понадобятся грузчики или небольшой кран на платформе грузовика.
        Все это сильно удорожает себестоимость самостоятельной реализации металла.</p>
          <h3 class="about-us__caption">Экономия времени</h3>
          <p class="about-us__contant">Клиент выполняет только несколько действий:</p>
          <ul class="about-us__list">
            <li>Заказывает транспорт по удобной локации нахождения металла.</li>
            <li>Оговаривает сумму контракта.</li>
            <li>Получает деньги на счет.</li>
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
                    <!-- <p class="card__contant">от <span class="card__price">8000 ₽</span> / тонна </p> -->
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
        <h2 class="likbez__title">Покупка металла компанией ООО«ФЕРРУМ»</h2>
          <p class="likbez__about">В результате, получает свободное пространство от отходов. Можно провести озеленение или расширить территорию для иных
            бытовых или производственных нужд.</p>
          <h3 class="likbez__caption">Удобный расчет</h3>
          <p class="likbez__about">Представьте ситуацию, когда прием металла будет выполнен не по вашему адресу,
            а с доставкой в пункт сдачи. Вам нужно организовать транспорт, погрузить и вывезти за пределы города
            (там часто расположены подобные пункты). По прибытии, приемщик не всегда готов предложить заявленную ранее цену.
            Претензии могут быть высказаны к большому содержанию неметаллических частей – различных сплавов, примесей или пластика.
            Разумеется, возвращать груз будет не совсем удобно. Развитие подобной ситуации будет исключено, когда прием металлолома с
            будет осуществляться ООО ФЕРРУМ.
            Если вас не устроит цена – вы можете отказаться. Все расчеты могут быть проведены в зависимости от вашего желания:</p>
          <ul class="likbez__list">
            <li class="likbez__item">На расчетный счет.</li>
            <li class="likbez__item">Наличными деньгами, с подтверждением кассового чека.</li>
          </ul>
          <h3 class="likbez__caption">Оптимальное решение</h3>
          <p class="likbez__about">
            Компания приемщик металла принимает все обязанности по вывозу груза на себя.
            Специалисты организуют логистику и взвешивание лома. С вашей стороны,
            необходимо только предоставить лом. Все быстро и удобно.</p>
          <p class="likbez__about">
          Не тратьте собственное время и ресурсы. Поручите прием металла, компании,
          имеющей ресурсы для организации вывоза и оплаты по привлекательной цене!</p>
      </section>