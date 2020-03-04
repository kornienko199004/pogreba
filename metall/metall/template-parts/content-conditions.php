<?php
/**
 * The template part for displaying conditions
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="page-container__wrapper">
        <section class="conditions">
          <h2 class="conditions__title">Условия приема металлолома</h2>
          <ul class="conditions__list">
            <li class="conditions__item condition">
              <section class="condition-card">
                <div class="condition-card__image">
                  <svg>
                    <use xlink:href="#creditCard"></use>
                  </svg>
                </div>
                <h3 class="condition-card__title">Форма оплаты</h3>
                <p class="condition-card__caption">наличный расчет на месте или безналичный</p>
              </section>
            </li>
            <li class="conditions__item condition">
              <section class="condition-card">
                <div class="condition-card__image">
                  <svg>
                    <use xlink:href="#lock"></use>
                  </svg>
                </div>
                <h3 class="condition-card__title">Конфиденциальность<br/>сделки</h3>
                <p class="condition-card__caption">нам важно доверие клиентов</p>
              </section>
            </li>
            <li class="conditions__item condition">
              <section class="condition-card">
                <div class="condition-card__image">
                  <svg>
                    <use xlink:href="#goodMoney"></use>
                  </svg>
                </div>
                <h3 class="condition-card__title">Выгодные цены всегда</h3>
                <p class="condition-card__caption">возможность приема в порту по высокой цене</p>
              </section>
            </li>
            <li class="conditions__item condition">
              <section class="condition-card">
                <div class="condition-card__image">
                  <svg>
                    <use xlink:href="#photo"></use>
                  </svg>
                </div>
                <h3 class="condition-card__title">Возможность оценки<br/>по фото</h3>
                <p class="condition-card__caption">приемщиком до приезда машины</p>
              </section>
            </li>
          </ul>
        </section>
        <section class="estimating">
          <div class="estimating__wrapper" id="photo-form">
            <h2 class="estimating__title">Оценка лома по фото</h2>
            <p class="estimating__caption">загрузите фото для оценки</p>
            <form class="estimating__form" action="<?php echo admin_url('admin-ajax.php?action=send_photo'); ?>" method="post" enctype="multipart/form-data">
              <div class="estimating__request-wrapper estimating__request-wrapper--form">
                <div class="estimating__file-upload file-upload">
                  <div class="file-upload__description">Файл не выбран</div>
                  <button class="file-upload__button" type="button">Выбрать</button>
                  <input type="file" class="file-upload__input" name="userfile[]" multiple required>
                </div>
                <input type="text" class="estimating__input estimating__input--name" name="phone-name" placeholder="Как к Вам обращаться" required>
                <input type="text" class="estimating__input estimating__input--phone" name="phone" placeholder="Ваш телефон" required>
                <button class="estimating__button button" type="submit" name="send">Отправить</button>
              </div>
              <div class="estimating__request-wrapper estimating__request-wrapper--success estimating__request-wrapper--hidden">
                <div class="estimating__request-image">
                  <svg><use xlink:href="#success"></use></svg>
                </div>
                <p class="estimating__request-description">
                  <b>Данные успешно отправлены.</b><br/>
                  Наш менеджер свяжется с Вами в ближайшее время.
                </p>
              </div>
              <div class="estimating__request-wrapper estimating__request-wrapper--failure estimating__request-wrapper--hidden">
                <div class="estimating__request-image">
                  <svg><use xlink:href="#error"></use></svg>
                </div>
                <p class="estimating__request-description">
                  <b>При отправке данных произошла ошибка.</b><br/>
                  Попробуйте еще раз или используйте другой способ связи.
                </p>
              </div>
            </form>
          </div>
        </section>
      </div>