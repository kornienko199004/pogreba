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
          <li class="nav-item">
            <a class="nav-link" href="#advantages">ПРЕИМУЩЕСТВА</a>
          </li>
          <!-- <li class="nav-item">
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