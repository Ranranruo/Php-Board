<?php
function views($page, $layout, $model = [])
{
  extract((array)$model);
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/global.css">
    <link rel="stylesheet" href="/style/header.css">
    <link rel="stylesheet" href="/style/<?= $page ?>.css">
    <title>Document</title>
  </head>

  <body>
    <?php
    $layout ? require_once "../app/views/template/header.php" : null;
    require_once "../app/views/$page.php";
    ?>

  </body>

  </html>
<?php
}
