<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Authorization</title>
  <link href="./css/authorization.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="./css/main.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
  <div class="container">
    
    <?php
      session_start();
        
      if (isset($_SESSION['username'])) {
        echo <<<TAG
          <header class="header">
            <div class="welcome">Привет, ${_SESSION['username']}!</div>
            <div class="header__button button"><a class="button__link" href="/exit.php">Выйти</a></div>
          </header>
        TAG;
      } else {
        include './authorization.html';
      }
    ?>
  
  </div>
</body>
</html>

