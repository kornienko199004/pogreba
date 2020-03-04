<?php
/**
 * The template for displaying all single posts and attachments
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
      <div class="page-header__wrapper page-header__wrapper--middle page-header__wrapper--posts">
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
        </header>
	<main id="main" class="site-main">
		<?php
		// Start the loop.
    while ( have_posts() ) : the_post();
    echo '<div class="features">';
    the_breadcrumb();
    echo '</div>';
			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// End of the loop.
		endwhile; ?>
<?php get_template_part('template-parts/content-conditions'); ?>
<?php get_footer(); ?>
