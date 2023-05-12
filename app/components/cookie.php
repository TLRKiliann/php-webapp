<?php
session_start();

$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$title = "Session/Cookie";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$footervar = "Session/Cookie";
//print_r($_SESSION);
?>

<!DOCTYPE html>

<html>
  <head>
    <?php require 'head.php'; ?>  
  </head>

  <body>

    <nav class="navbar">
      <?php require 'navbar.php'; ?>
    </nav>

    <main>
      <h1 class="contact--class">Session/Cookie</h1>

      <p>$_SESSION</p>

      <textarea id="txta--contact" name="txta--contact" rows="1" cols="40">
        <?php print_r($_SESSION['admin']); ?>
      </textarea>

      <p>$_COOKIE</p>

      <textarea id="txta--contact" name="txta--contact" rows="1" cols="40">
        <?php print_r($_COOKIE['user']); ?>
      </textarea>

    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
