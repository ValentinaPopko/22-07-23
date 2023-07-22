<?php 
    session_start();
if (!empty($_SESSION['auth'])): ?>
  <!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis fuga in voluptate suscipit atque, odio praesentium quod commodi quas veniam autem perferendis vero unde nisi omnis quos, doloribus adipisci ullam.</p>

      <?php
      if (!empty($_SESSION['auth'])) {
        echo '
        Только для аоавоаоввао
        ';
      }
    ?>
    
      <a href='./page3.php'>Перейти на третью страницу</a>
    </body>
  </html>
<?php else: ?>
  <p>пожалуйста, авторизуйтесь</p>
<?php endif; ?>
