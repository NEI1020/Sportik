<?php
  function getDataFromDB(): void {
    $servername = "localhost"; # servername : имя сервера с бд
    $username = "roo"; # имя пользователя
    $password = "root"; # пароль пользователя
    $database = "krinyetski"; # название базы данных
    $sqlport = 3306; # порт sql дефолт 3306
    $table_name = "shop_items"; # название таблицы с данными
    $categories = [
      "trainers",
      "ucloses",
      "shoes",
      "scooters"
    ];
    $categories_html_names = [
      "Тренажеры",
      "Верхняя одежда",
      "Обувь",
      "Самокаты"
    ];
    $conn = new mysqli($servername, $username, $password, $database, $sqlport);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $index_foreach = 0;
    foreach ($categories as $category) {
      $sqlQuery = "SELECT * FROM $table_name WHERE type = '$category'";
      $result = $conn->query($sqlQuery);
      if ($result->num_rows > 0) {
        $result_html = "";
        while($row = $result->fetch_assoc()) {
          $result_html .=
            "<div class='card-item'> " .
              "<div class='card-item-image' style='background-image: url(media/item_images/" .$row["image"]. ")'></div>" .
                "<div class='card-item-caption'>" .
                  $row["caption"] .
                "</div>" .
                "<div class='card-item-caption'>" .
                  $row["cost"] . "₽" .
                "</div>" .
            "</div>";
        }
        echo
          "<div class='cardholder_category_desc_holder'>" .
            "<span class='title-text-2'>" . $categories_html_names[$index_foreach] . " </span>".
            "<section class='cardholder'>".
              $result_html .
            "</section>".
          "</div>";
      }
      $index_foreach++;
    }
    $conn->close();
  }
