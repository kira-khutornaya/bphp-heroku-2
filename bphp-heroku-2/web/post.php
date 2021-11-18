<?php
declare(strict_types=1);

if (trim($_POST['username'])) {
  session_start();
  $_SESSION['username'] = $_POST['username'];
}

header('Location: /index.php');
