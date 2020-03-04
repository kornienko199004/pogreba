<?php
/**
 * Шаблон футера (footer.php)
 * @package WordPress
 * @subpackage pograba-theme
 */
?>
    <footer class="footer-page col-lg-10 col-md-12" id="contacts">
        <div class="footer-col col-md-12 col-lg-4 text-left">
          <strong>
            О компании
          </strong>
          <p>
            Производим и изготавливаем<br/>пластиковые погреба
          </p>
        </div>
        <div class="footer-col col-md-12 col-lg-4 text-left">
          <strong>
            Адрес
          </strong>
          <p>
            г. Белгород, проспект Славы, дом 18
          </p>
        </div>
        <div class="footer-col col-md-12 col-lg-4 text-left">
          <strong>
            Контакты
          </strong>
          <p class="text-left">
            Без выходных, 08:00 - 20:00<br>
            <strong>+7(904)092-01-65</strong><br>
            <strong>8(4722)380-680</strong><br>
            <strong>mk.belgorod@yandex.ru</strong><br>
          </p>
        </div>
    </footer>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Заявка на обратный звонок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="modal__form" action="<?php echo admin_url('admin-ajax.php?action=send_callback'); ?>" method="post">
            <div class="form-group">
              <input type="text" class="form-control modal__input modal__input--name" id="user-name" placeholder="Имя" required name="modal-name">
            </div>
            <div class="form-group">
              <input type="phone" class="form-control modal__input modal__input--phone" id="phone" placeholder="Телефон" required name="modal-phone">
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- <script src="build/js/jquery.min.js"></script> -->
  <!-- <script src="build/js/jquery.jcarousel.min.js"></script> -->
  <!-- <script src="build/js/bootstrap.min.js"></script>
  <script src="build/js/index.js"></script> -->
   <?php wp_footer(); ?>
</body>
</html>