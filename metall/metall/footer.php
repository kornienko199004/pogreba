<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
</main>
		<footer class="footer">
      <div class="footer__inner">
        <div class="footer__logo logo">
          <p class="footer__logo-text">Демонтаж, прием металла СПб</p>
        </div>
        <div class="footer__wrapper footer__wrapper--top">
          <div class="footer__column">
            <h4 class="footer__title">Наши услуги</h4>
            <ul class="footer__list">
              <li class="footer__feedback">Прием металлолома</li>
              <li class="footer__feedback">Вывоз металлолома</li>
              <li class="footer__feedback">Демонтаж металлоконструкций</li>
              <li class="footer__feedback">Резка и заготовка</li>
              <li class="footer__feedback">Аренда спецтехники</li>
            </ul>
          </div>
          <div class="footer__column">
            <h4 class="footer__title">Контакты</h4>
            <ul class="footer__list">
              <li class="footer__feedback">+7(921) 935-23-39</li>
              <li class="footer__feedback">+7(960) 275-68-26</li>
              <li class="footer__feedback">info@mldm.ru</li>
              <li class="footer__feedback">Работаем 24/7</li>
              <li class="footer__feedback">Пункты приема в СПБ:</li>
              <li class="footer__feedback">Глухоозёрское шоссе &mdash; цветной металлом</li>
              <li class="footer__feedback">Октябрьская набережная &mdash; цветной металлом</li>
              <li class="footer__feedback">ул. Софийская &mdash; чёрный металлом</li>
              <li class="footer__feedback">
              <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
<script src="//yastatic.net/share2/share.js"></script>
<div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,twitter"></div></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__column footer__column--feedback">
        <div class="footer__wrapper footer__wrapper--bottom">
          <p class="footer__feedback">Информация на сайте mldm.ru носит
          ознакомительный<br/>характер и не является публичной офертой.</p>
          <br/>
          <p class="footer__feedback">&copy; 2019 Компания ООО«ФЕРРУМ»</p>
          <p class="footer__feedback">Все права защищены</p>
        </div>
      </div>
    </footer>
    <section class="modal">
      <div class="modal__wrapper">
        <h2 class="modal__title">Обратный звонок</h2>
        <button class="modal__close">
          <span class="visually-hidden">Закрыть</span>
          <svg><use xlink:href="#iconMenuCross"></use></svg>
        </button>
        <div class="modal__request-wrapper modal__request-wrapper--form">
          <p class="modal__caption">Оставьте номер и мы Вам перезвоним</p>
          <form class="modal__form" action="<?php echo admin_url('admin-ajax.php?action=send_callback'); ?>" method="post">
            <input type="text" class="modal__input modal__input--name" name="modal-name" placeholder="Как к Вам обращаться?" required>
            <input type="text" class="modal__input modal__input--phone" name="modal-phone" placeholder="+7 (999) 999-99-99" required>
            <button class="modal__button button" type="submit">Отправить</button>
          </form>
        </div>
        <div class="modal__request-wrapper modal__request-wrapper--success">
          <div class="modal__request-image">
            <svg><use xlink:href="#success"></use></svg>
          </div>
          <p class="modal__request-description">
            <b>Данные успешно отправлены.</b><br/>
            Наш менеджер свяжется с Вами в ближайшее время.
          </p>
        </div>
        <div class="modal__request-wrapper modal__request-wrapper--failure">
          <div class="modal__request-image">
            <svg><use xlink:href="#error"></use></svg>
          </div>
          <p class="modal__request-description">
            <b>При отправке данных произошла ошибка.</b><br/>
            Попробуйте еще раз или используйте другой способ связи.
          </p>
        </div>
      </div>
    </section>
    <?php wp_footer(); ?>
  </body>
</html>