<?php 
$name = 'Esteban';
setcookie('user', $name, time() + 60*60*24*30);
//var_dump($_COOKIE['user']);

session_start();
$_SESSION['admin'] = 'koalatree';

$title = "Main Page";
$style = "styles/style.css";
$favicon = "images/favicon.png";
$footervar = "Home";

$home = "index.php";
$server = "components/server.php";
$http = "components/http.php";
$cookie = "components/cookie.php";
$ping = "components/ping.php";
$form = "components/form.php";
$rdata = "components/rdata.php";
?>

<!DOCTYPE html>

<html>
  <head>
    <?php require_once 'components/head.php'; ?>
  </head>
  <body>

    <nav class="navbar">
      <?php require_once 'components/navbar.php' ?>
    </nav>

    <main>

      <h1>Home</h1>
      <h2>All pages are refreshed every 30s.</h2>
	  <span><?php echo "In the head : meta http-equiv='refresh' content='30'";?></span>
      <h3 style="color: lightgreen;">On this page a session & cookie are created. Find them back on 
		<span style="color: yellow;">Session/Cookie</span> 
		page !
	  </h3>
      <div class="link--page">
        <a href="components/server.php">Go to Server page !</a>
      </div>
      <div class="link--page">
        <a href="components/http.php">Go to Http page !</a>
      </div>
      <div class="link--page">
        <a href="components/cookie.php">Go to Cookie page !</a>
      </div>
      <div class="link--page">
        <a href="components/ping.php">Go to Ping page !</a>
      </div>
      <div class="link--page">
        <a href="components/form.php">Go to Form page !</a>
      </div>
      <div class="link--page">
        <a href="components/rdata.php">Go to Read Data page !</a>
      </div>
    </main>

    <footer>
      <?php require_once 'components/footer.php'; ?>
    </footer>

  </body>

</html>
