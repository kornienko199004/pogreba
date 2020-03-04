<?php
/**
 * Главная страница (index.php)
 * @package WordPress
 * @subpackage pogreba-theme
 */
get_header(); // подключаем header.php ?>

    <div class="slider-wrapper mb-5">
      <div class="carousel-wrapper mb-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="Пластиковый погреб Селлар базовый - Боковой вертикальный">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="Пластиковый погреб Селлар базовый - Верхний вертикальный вход">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="Пластиковый погреб Селлар базовый - Верхний наклонный вход 45 гр">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="Пластиковый погреб Селлар - базовый с классическим входом">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="Пластиковый погреб Селлар - боковой вертикальный комфорт">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/6.jpg" alt="Пластиковый погреб Селлар - Боковой горизонтальный вход">
            </div>
            <div class="carousel-item">
              <img class="d-block mx-auto"  src="<?php echo get_template_directory_uri(); ?>/img/7.jpg" alt="Пластиковый погреб Селлар - Боковой горизонтальный с вертикальным входом">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="header-wrapper px-5">
        <h1>ПЛАСТИКОВЫЕ ПОГРЕБА</h1>
        <p>Закажи погреб и получи результат уже завтра!. Оплати 30% сейчас и бронируй удобную для себя
          дату отгрузки и монтажа! ХРАНЕНИЕ БЕСПЛАТНО!
        </p>
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Узнать подробнее</button>
      </div>
  </div>


  <div class="gray-wrapper pt-3 pb-3 mb-5">
    <div class="wrapper row">
      <div class="col-md-6">
        <h2>Пластиковый погреб</h2>
        <p>
            Пластиковый погреб - современная, высокопрочная, герметичная конструкция, предназначенная для хранения различного рода продовольствия.
            Такой вид погреба обладает целым рядом преимуществ на ряду с предшественниками и является по праву инновационным.
        </p>
        <p>
            Агрегат не требует специального обслуживания, а так же прост при монтаже и удобен во время эксплуатации.
            Среднее время установки от одного до двух дней, а срок эксплуатации пластиковых погребов расчитан до 100 лет.
        </p>
      </div>
      <div class="col-md-6">
        <h2>Характеристики</h2>
        <p>
            Пластиковый погреб отличается рядом своих характеристик, которые делают его наиболее респектабельным наряду с аналогами
        </p>
        <ul class="characteristics-list">
          <li>
            <div class="img-wrapper">
              <img alt="картинка" src="<?php echo get_template_directory_uri(); ?>/img/icon1.svg">
            </div>
            <p>Полностью<br>герметичный</p>
          </li>
          <li>
            <div class="img-wrapper">
              <img alt="картинка" src="<?php echo get_template_directory_uri(); ?>/img/icon2.svg">
            </div>
            <p>Из пищевого<br>пластика</p>
          </li>
          <li>
            <div class="img-wrapper">
              <img alt="картинка" src="<?php echo get_template_directory_uri(); ?>/img/icon3.svg">
            </div>
            <p>Температура<br>внутри +3&deg; ... +8&deg;</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  
  <div class="wrapper row pt-3 pb-3 mb-5 border-bottom">
    <div class="col-md-12">
      <h3 class="text-center">Пластиковый погреб селлар базовый</h3>
      <!-- <p class="price-skelet text-center">от 83 000 руб</p> -->
      <p class="text-center">
        <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Узнать подробнее</button>
      </p>
      <div class="skelet-image-wrapper mb-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/skelet_baza.png" alt="Пластиковый погреб селлар базовый">
      </div>
      <div class="skelet-list-wrapper">
        <p class="text-center skelet-list-header">Это ваш выбор, если</p>
        <ul class="skelet-list">
          <li>Вы хотите бюджетный, но крепкий и надежный погреб на десятилетия</li>
          <li>На вашем участке почвы песчаные и субпесчаные не требующие усиленной конструкции погреба</li>
          <li>На вашем участке низкий уровень грунтовых вод, вода на глубине 3х метров или глубже</li>
          <li>Нет необходимости усиливать конструкцию погреба металлопрофилем</li>
        </ul>
      </div>
    </div>
  </div>


<div class="wrapper row pt-3 pb-3 mb-5 ">
  <div class="col-md-12 border-bottom mb-5" id="catalog">
    <h2 class="text-center mb-5">Пластиковые погреба селлар</h2>
    <div class="row">
      <?php $posts = get_posts( array(
        'numberposts' => 20,
      ) ); 
          if ( $posts ) {
            foreach ( $posts as $post ) {
              $post_id = get_the_ID();
              echo '<div class="col-md-4 col-lg-3 col-sm-6 mb-5 col-12">';
                echo '<div class="card card--shadow text-center" style="border: none">';

              setup_postdata( $post );
              if ( has_post_thumbnail()) {
                
                // echo '<img class="card-img-top" alt="..." src=';
                // the_post_thumbnail_url($post_id, 'thumbnail');
                // echo ' />';
                echo get_the_post_thumbnail( $post_id, 'medium', array('class' => 'card-img-top') );
              }
                echo '<div class="card-body">';
                  the_title('<strong class="card-title" style="font-size: 22px">', '</strong>');
                  echo '<p class="card-text">';
                    the_excerpt();
                  echo '</p>';
                  echo '<div class="btn-group" style="width: 100%">';  
                      echo '<span class="badge badge-info custom-badge">от ';
                      echo get_post_meta($post_id, $key = 'price', $single = true);
                      echo ' Р</span>';

                      echo "<a href=\"";
                        the_permalink();
                      echo "\" class=\"btn btn-link\">"; 
                      echo "Подробнее</a>";
                  echo '</div>';

                echo "</div>";

                echo "</div>";
              echo "</div>";
            }
            wp_reset_postdata();
          } ?>
    </div>
  </div>
</div>

  <div class="wrapper row pt-3 pb-3 mb-5">
    <div class="col-md-12 border-bottom mb-5" id="advantages">
      <h2 class="text-center">Производственная компания Cellar Plastic</h2>
      <p>
        Мы специализируемся на производстве изделий из пищевого пластика, а также оказываем комплексные услуги в
        сфере монтажных работ от проектирования до ввода в эксплуатацию.
      </p>
      <p>
        Задавая темп и создавая новые тенденции в отрасли производства погребов мы постоянно предлагаем рынку самые актуальные решения.
      </p>
      <p>
        Решение купить погреб для дачи или приусадебного участка позволит вам закладывать овощи и фрукты на максимально длительное хранение.
        Пластиковый погреб герметичный на 100%,
        легкий, долговечный, он не
        подвергается коррозии и оснащен необходимыми приборами и коммуникациями: тремя рядами полок, освещением, измерителем влажности, термометром, вентиляцией и лестницей
      </p>
    </div>
    
    <div class="col-md-12">
      <h2 class="text-center">Наши преимущества</h2>
      <ul class="features-list">
        <li>В производстве погреба используется только высокока&shy;чественный первичный материал из европейского сырья (экологически чистый)</li>
        <li>Все этапы производства проходят строгий контроль качества.</li>
        <li>Современное качественное немецкое оборудование с возможностью проверки шва сжатым воздухом обеспечивает 100% герметизацию готового изделия.</li>
        <li>Квалифицированный инженерный состав обеспечивает комплексные решения от производства до монтажа.</li>
        <li>Выполнение индивидуальных заказов — проектирование, разработка, производство изделий по размерам заказчика.</li>
        <li>Производим погреба больших размеров с различными модификациями входных групп.</li>
        <li>Совершен&shy;ствование существующих моделей погреба и разработка инновационных решений.</li>
        <li>Собственное производство позволяет доставить погреб в назначенное время</li>
      </ul>
    </div>
  </div>

    <div class="wrapper row pt-3 pb-3 mb-5">
      <div class="col-md-12">
        <h2 class="text-center mb-3">Стандартная комплектация погреба</h2>
        <ul class="complectation-list">
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/1.png" alt="Армированный корпус">
            </div>
            <h4>Армированный корпус</h4>
            <p>Армирование стенок погреба</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/2.png" alt="Удобная лестница">
            </div>
            <h4>Удобная лестница</h4>
            <p>Лестница из прочнейшей термодревесины, обработанной при высоких температурах без применения химии</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/3.png" alt="Утепленный люк">
            </div>
            <h4>Утепленный люк</h4>
            <p>Люк с двойным утеплением, не требующий дополнительной теплоизоляции входа (В/Ш/Д — 400х600х900 мм)</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/4.png" alt="Вытяжные и приточные трубы">
            </div>
            <h4>Вытяжные и приточные трубы</h4>
            <p>Качественная вентиляция, обеспечивающая необходимую конвекцию воздуха</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/5.png" alt="Светильник">
            </div>
            <h4>Светильник</h4>
            <p>Светильник с распаечной коробкой, которая позволяет удобно соединять различные кабели</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/6.png" alt="Датчики">
            </div>
            <h4>Датчики</h4>
            <p>Армирование стенок погребаПриборы для измерения уровня влажности и температурного режима</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/7.png" alt="Усиленный корпус">
            </div>
            <h4>Усиленный корпус</h4>
            <p>Прорези в ребрах жесткости, позволяющие легко формировать каркас из арматуры</p>
          </li>
          <li>
            <div class="complectation-image-wrapper">
              <img src="<?php echo get_template_directory_uri(); ?>/img/standart/8.png" alt="Удобные полки">
            </div>
            <h4>Удобные полки</h4>
            <p>Погреба оснащены широкими, удобными полками</p>
          </li>
        </ul>
      </div>
    </div>

    
  <div class="wrapper row pt-3 pb-3 mb-5">
      <div class="col-md-12 border-bottom mb-5" id="montag">
        <h2 class="text-center mb-3">Установка погреба за один день</h2>
        <ul class="building-list">
          <li>
            <div class="building-description">
              <h3>Выкопаем котлован</h3>
              <p>
                  На этом этапе специалисты подготавливают яму для последующего размещения в ней пластиковой конструкции.
                  Наша компания использует работу спецтехники для того, чтобы процесс не занимал много времени. 
              </p>
              <p>
                  Однако если монтаж погреба производится в местах, где сложно подобраться спецтехнике, котлован
                  выкапывается бригадой мастеров вручную. Спустя небольшое количество времени будет готовый котлован для размещения погреба.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/1.jpg" alt="Отрытие котлована">
            </div>
          </li>
          <li>
            <div class="building-description">
              <h3>Заливаем бетон в котлован</h3>
              <p>
                  Подготавливаем «Фундамент» для погреба (заливаем бетон в котлован). Делается это с целью закрепления пластикового погреба в котловане.
              </p>
              <p>
                  Благодаря армированному корпусу, погреб плотно закрепляется в залитом бетоне и становится надежно, крепко и устойчиво.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/2.jpg" alt="Заливка бетона в котлован">
            </div>
          </li>
          <li>
            <div class="building-description">
              <h3>Установка погреба в котлован</h3>
              <p>
                  Помещаем конструкцию в уже подготовленный для размещения погреба котлован. 
              </p>
              <p>
                  Выполняется весь этот процесс при помощи специальной техники с соблюдением всех требований техники
                  безопасности под пристальным надзором мастеров нашей компании.
              </p>
              <p>
                  После размещения погреба в котловане, специалисты выравнивают его для последующей заливки бетоном по периметру и утепления.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/3.jpg" alt="Установка погреба в котлован">
            </div>
          </li>
          <li>
            <div class="building-description">
              <h3>Заливка внутри погреба</h3>
              <p>
                  Погреб выравнивается с максимальной точностью путем применения выравнивающих инструментов.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/4.jpg" alt="Заливка внутри погреба">
            </div>
          </li>
          <li>
            <div class="building-description">
              <h3>Утепляем погреб</h3>
              <p>
                  Утепление пластикового погреба производится по всему периметру для того, чтобы не давать погребу замерзнуть
                  в холодное время года и сохранить нужную температуру летом.
              </p>
              <p>
                  В качестве утепляющего материала используется пеноплекс. Именно он является на сегодняшний день самым
                  популярным утеплительным материалом благодаря своим свойствам.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/5.jpg" alt="Утепляем погреб">
            </div>
          </li>
          <li>
            <div class="building-description">
              <h3>Засыпаем погреб грунтом и песком</h3>
              <p>
                  После проведения всех вышеперечисленных работ, погреб засыпается грунтом и песком так, что видимой частью конструкции остаётся вентиляция и вход.
              </p>
              <p>
                  Прилегающая территория погреба облагораживается таким образом, что зона погреба становится не только функциональной,
                  но и внешне аккуратной, не занимающей фактического места на участке.
              </p>
            </div>
            <div class="building-image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/building/6.jpg" alt="Засыпаем погреб грунтом и песком">
            </div>
          </li>
        </ul>
        <div class="col-md-12 text-center pt-5 pb-5">
          <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Заказать установку погреба</button>
        </div>
      </div>
    </div>

    <div class="slider-wrapper-feedback row" id="reviews">
        <div class="carousel-wrapper-feedback col-md-12">
          <div id="carouselFeedBackControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="feedback-wrapper">
                  <p>
                  Живем в частном доме и каждый год собираем урожай (фрукты, овощи, ягоды), а жена еще плюс ко всему любитель закаток,
                  поэтому остро стал вопрос: где это все хранить. Долго читали, выбирали, и решили заказать пластиковый погреб. И не ошиблись:
                  ребята приехали и все оперативно сделали за один день. Так что, всем советую!
                  </p>
                  <div class="profile-feedback">
                      <div class="photo">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/otzyv/1.png" alt="Андрей Борисов">
                      </div>
                    <p>Андрей Борисов</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="feedback-wrapper">
                  <p>
                  Около полугода назад, перед сезоном сбора урожая, мы познакомились с пластиковым погребом.
                  До этого был старый, практически разваливающейся погреб, который требовал капитального ремонта.
                  Поэтому решили, что легче и проще заказать пластиковый погреб. Так как услышали и увидели,
                  что это такое в первый раз, ребята все объяснили и проконсультировали полностью: помогли выбрать размер, тип входа.
                  Заказали, но не ожидали, что доставят и установят так быстро. Установка, монтаж заняло меньше одного дня! Класс, мы довольны.
                  </p>
                  <div class="profile-feedback">
                      <div class="photo">
                          <img src="<?php echo get_template_directory_uri(); ?>/img/otzyv/2.png" alt="Сергей Семенов">
                      </div>
                    <p>Сергей Семенов</p>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                  <div class="feedback-wrapper">
                    <p>
                        Установили такой пластиковый погреб уже год назад, пользуемся активно и все отлично.
                        Погреб очень вместителен и герметичен. Весной в период таяния нигде, ничего не протекало.
                        По поводу установки, команда ребят приехали в течение нескольких дней и всего за день установили погреб полностью.
                        Уже вечером мы не могли нарадоваться своим новым погребом. За качество, оперативность, и профессионализм твердая пятёрка!
                    </p>
                    <div class="profile-feedback">
                      <div class="photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/otzyv/3.png" alt="Анна Максимова">
                      </div>
                      <p>Анна Максимова</p>
                    </div>
                  </div>
              </div>
              
            </div>
            <a class="carousel-control-prev" href="#carouselFeedBackControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselFeedBackControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </div>


<?php get_footer(); // подключаем footer.php ?>