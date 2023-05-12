<?php
session_start();

$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$title = "Ping";
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
      <h1 class="contact--class">Ping</h1>

      <p style="font-size: 1.4rem;">Ping Facebook with 3 packets ICMP:</p>

      <textarea id="txta--contact" name="txta--contact" rows="10" cols="60">
        <?php exec("ping -c 3 facebook.com", $output, $result);
		foreach($output as $response){
 		echo $response . "";}?>
      </textarea>

    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
