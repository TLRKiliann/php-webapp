<?php
session_start();

$home = '../index.php';
$server = 'server.php';
$http = 'http.php';
$cookie = 'cookie.php';
$ping = 'ping.php';
$form = 'form.php';
$rdata = 'rdata.php';

$title = "Form";
$style = "../styles/style.css";
$favicon = "../images/favicon.png";
$footervar = "Form";
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
      <h1 class="contact--class">Write a file.txt</h1>
      <h2>You can see result at Read Data (rdata) page !</h2>

      <?php
        /*
        $fp = fopen('../doc/file.txt', 'w');
        fwrite($fp, 'The text wrote before in the page form...');
        fclose($fp);
        */
      ?>
      <form action="" method="post" class="form-design">
        <label for="content">Write your text :</label>

        <textarea id="content" name="content" rows="10" cols="20">
        </textarea>

        <button type="submit" name="submitFile">
          Enter
        </button>
      </form>

      <?php
        if (isset($_POST['submitFile']))
        {
          $content = $_POST['content'];
          $textW = fopen('../doc/file2.txt', 'w');
          fwrite($textW, $content);
          fclose($textW);
        }
      ?>

    </main>

    <footer>
      <?php require 'footer.php'; ?>
    </footer>   

  </body>
</html>
