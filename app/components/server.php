<?php $title = "Server";

$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$style = "../styles/server.css";
$favicon = "../images/favicon.png";
$footervar = "Server";
?>


<!DOCTYPE html>
<html>
  <head>
    <?php require '../components/head.php'; ?>
  </head>
  <body>
    
    <nav class="navbar">
      <?php require 'navbar.php' ?>
    </nav>
    
    <main>
      <h1>Server</h1>
      
      <h2>$_SERVER = supervariable</h2>

	  <div id="texta--div">
      	<textarea id="txta--service" name="txta--service" rows="36" cols="130">
          <?php print_r($_SERVER); ?>
      	</textarea>
      </div>

      <div class="div--link">
        <a class="link--btn" href="../index.php">Go back to Home !</a>
      </div>
    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>

  </body>

</html>
