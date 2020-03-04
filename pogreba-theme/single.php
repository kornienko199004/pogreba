<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage pograba-theme
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Пластиковые погреба. Изготовление погребов дешево</title>
  <!-- <link rel="stylesheet" href="build/css/style.css"> -->
  <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 fixed-top">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="CELLAR">
      </a>
      <span class="navbar-text mr-1 ml-1">
        <strong class="custom-phone">+7(904)092-01-65</strong><br>
        <small>пн-вс 8:00 - 20:00</small>
      </span>
    
      <div class="text-right">
        <button class="btn btn-link" data-toggle="modal" data-target="#exampleModal">Обратный звонок</button>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item">
            <a class="nav-link" href="#advantages">ПРЕИМУЩЕСТВА</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#prices">ЦЕНЫ</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#montag">МОНТАЖ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reviews">ОТЗЫВЫ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacts">КОНТАКТЫ</a>
          </li>
        </ul>
      </div>
  </nav>

		<?php
    // Start the loop.
    
    while ( have_posts() ) : the_post();
        echo '<div class="wrapper row pb-3 mb-5 border-bottom" style="padding-top: 100px">';
        echo '<div class="col-md-12">';
        
        // the_breadcrumb();
          // Include the single post content template.
          ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
          <header class="entry-header features">
            <?php the_title( '<h1 class="features__title">', '</h1>' ); ?>
          </header><!-- .entry-header -->

          <div class="features">
            <?php	the_content();	?>
          </div><!-- .entry-content -->
      </article><!-- #post-## -->

      <?php
          // End of the loop.

        echo '</div>';
        echo '</div>';
    endwhile;
    
?>
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


<?php
get_footer(); ?>
