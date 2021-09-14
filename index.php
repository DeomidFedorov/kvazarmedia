<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="ANSI">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kvazar Media</title>
  <link rel="stylesheet" href="/css/style.css">

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

  <script>
    /*$(document).ready (function() {
      $("#done ").click (function () {
        var name = $("#name") val ();
        var phone = $("#phone") val ();
        var fail = "";
        if (name.length < 2) fail = "Имя не меньше 2 символов";
        else if (phone.length < 1) fail = "Введите номер телефона";
        else if (phone.length > 0 | phone.length < 3) fail = "Номер телефона некорректный";
        if (fail != "") {
          $("#messageShow").html (fail + "<div class="clear"><br></div>");
          $("#messageShow").show ();
          return false;
        }
      })
    });
*/
  </script>

</head>
<body>
  <div id="first">
    <header>

      <div id="logo">
        <a href="/" title="Перейти на главную"><span>Kvazar</span> Media</a>
      </div>
      <div id="menu">
        О нас | Контакты | Обратиться
      </div>
    </header>
    <div id="centerblock">
      <h1>Kvazar Media<h1>
      <h4>ТВОЙ ПРОВОДНИК В МИРЕ МУЗЫКИ</h4>
      <ul id="uslugi">
        <li>Полный цикл работы с аудио-материалом: создание инструменталов, запись вокала, сведение и мастеринг.
        <li>Дистрибуция: помогаем получить артистам промо-поддержку на витринах и музыкальных плейлистах стриминговых сервисов.
Сбор вознаграждений в обществах РАО/ВОИС.
Грамотный подход к рекламе по продвижению артистов.
      </ul>

      <form action="send.php" method="post">
        <input class="form" type="text" name="name" placeholder="Имя">
        <input class="form" type="text" name="phone" placeholder="Телефон">
        <input type="submit" name="done" id="done" value="ОБРАТИТЬСЯ"></input>
      </form>



    </div>

  </div>
  <div id="second">

  </div>

</section>
</body>
</html>
