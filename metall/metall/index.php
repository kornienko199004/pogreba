<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

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
            <li class="main-nav__item"><a href="https://mldm.ru/vyvoz/">Вывоз лома</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/stoimost/">Стоимость демонтажа</a></li>
            <li class="main-nav__item"><a href="https://mldm.ru/prices/">Цены</a></li>
            <li class="main-nav__item child-nav__parent">
              <a id="information-nav">Информация</a>
                <ul class="child-nav__list">
                  <li class="child-nav__item"><a href="https://mldm.ru/about/">О компании</a></li>
                  <li class="child-nav__item child-nav__item--active"><a>Статьи</a></li>
                </ul>
          </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="page-container">
      <section class="information">
        <div class="information__wrapper">
          <h1 class="information__title">Статьи</h1>
          <span class="information__town">В Санкт-Петербурге</span>
          <p class="information__contant">Вывоз, прием, ежедневно</p>
          <div class="information__nav">
            <button class="information__button button demontag-button" type="button"><span>Заказать демонтаж</span></button>
            <a href="#photo-form" class="information__button button">Оценка по фото</a>
          </div>
        </div>
      </section>
      <section class="features">

        <div class="post__list">
        <?php $posts = get_posts( array(
          'numberposts' => 20,
        ) ); 
            if ( $posts ) {
              foreach ( $posts as $post ) {
                echo '<div class="post-card">';
                setup_postdata( $post );
                if ( has_post_thumbnail()) {
                  echo '<div class="post-card__image">';
                  echo get_the_post_thumbnail(get_the_ID(), 'thumbnail');
                  echo '</div>';
                }
                  echo '<div class="post-card__wrapper">';
                    echo "<a href=\"";
                    the_permalink();
                    echo "\">";
                    the_title('<h3 class="post-card__title">', '</h3>');
                    echo "</a>";
                    the_excerpt();
                  echo "</div>";
                echo "</div>";
              }
              wp_reset_postdata();
            } ?>
        </div>

      </section>

  <?php get_template_part('template-parts/content-conditions'); ?>
  <?php get_footer(); ?>
