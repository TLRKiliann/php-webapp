<?php
//session_start();
//setcookie('user', '', time() - 3600);
$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$title = "HTTP";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$footervar = "HTTP";
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
      <h1 class="about--class">Http/Protocol</h1>

      <p>SERVER_PROTOCOL - REMOTE_ADDR - REMOTE_PORT - SERVER_NAME - SERVER_PORT</p>

      <textarea id="txta--about" name="txta--about" rows="1" cols="80">
        <?php print_r($_SERVER['SERVER_PROTOCOL']); ?>
        <?php print_r($_SERVER['REMOTE_ADDR']); ?>
        <?php print_r($_SERVER['REMOTE_PORT']); ?>
        <?php print_r($_SERVER['SERVER_NAME']); ?>
        <?php print_r($_SERVER['SERVER_PORT']); ?>
      </textarea>

      <p>HTTP_SEC_CH_UA_PLATFORM - HTTP_SEC_CH_UA - SERVER_SOFTWARE</p>

      <textarea id="txta--about" name="txta--about" rows="1" cols="120">
        <?php print_r($_SERVER['HTTP_SEC_CH_UA_PLATFORM']); ?>
        <?php print_r($_SERVER['HTTP_SEC_CH_UA']); ?>
        <?php print_r($_SERVER['SERVER_SOFTWARE']); ?>
      </textarea>

      <p>HTTP_USER_AGENT</p>

      <textarea id="txta--about" name="txta--about" rows="1" cols="120">
        <?php print_r($_SERVER['HTTP_USER_AGENT']); ?>
      </textarea>

      <p>HTTP_REFERER</p>

      <textarea id="txta--about" name="txta--about" rows="1" cols="120">
        <?php print_r($_SERVER['HTTP_REFERER']); ?>
      </textarea>

    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
