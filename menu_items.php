<?php
$dbh = new PDO('mysql:host=localhost;dbname=l2', 'root', 'root');
$items = $dbh->query('SELECT * FROM menu_item;')
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <header>
      <h2>Список продуктов</h2>
    </header>
    <?php
    foreach ($items as $item) {
      print_r($item);
    }
    ?>
    <footer></footer>
  </body>
</html>
