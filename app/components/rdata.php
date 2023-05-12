<?php
session_start();

$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$title = "Read Data";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$footervar = "Read Data";
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
      <h1 class="contact--class">Read a file.txt</h1>

      <div class="segmentext">
        <pre>
        <?php
          foreach (glob("../doc/file.txt") as $filename) { 
            readfile($filename);
          }
          foreach (glob("../doc/file2.txt") as $filename_2) { 
            readfile($filename_2);
          }

          $start_time = time();
          echo " It's finish...";
          while(true) {
            if ((time() - $start_time) > 1) {
              return false;
            }
          }
        ?>
        </pre>
      </div>

    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
