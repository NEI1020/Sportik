<?php
  # подключение php скрипта
  include("items.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Спортик</title>
  <link href="index.css" rel="stylesheet" />
</head>
<body>
<header id="header">
  <div class="h-div">
    <div class="h-logo">Спортик</div>
    <div class="h-links">
      <a href="./index.html"> Главная </a>
    </div>
  </div>
</header>
<main class="shop-main">
  <section class="shop-main-sec-1 undo_padding">
    <span class="title-text-1"> Ассортимент </span>
  </section>
  <?php getDataFromDB(); ?>
</main>
<footer>
  <div class="footer-main-holder">
    <div class="footer-top-block">
      <span>Спортик</span>
      <a href="#header"> Обратно наверх </a>
    </div>
    <div class="footer-subinfo">
      <span>ООО “СПОРТТОВПЛЮС”</span>
      <span>115432, Москва, Проектируемый проезд № 4062, 6с2</span>
    </div>
    <div class="footer-copyright">
      sportikshop Copyright © 2024
    </div>
  </div>
</footer>
</body>
</html>