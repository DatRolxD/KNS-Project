<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="no-cache">
  <title>Koło naukowe slawistów</title>
  <link rel="stylesheet" href="styles/general.css">
</head>

<body>
  <div id="viewport-grid">
    <nav id="leftside-navbar">
      <header>
        <img src="images/logo.jpeg" alt="logo" id="logo" />
      </header>
      <ul id="navlist">
        <li><a class="nav-link" href="#">O nas</a></li>
        <li><a class="nav-link" href="#">Aktualności</a></li>
        <li><a class="nav-link" href="#">Czasopismo</a></li>
      </ul>
    </nav>

    <main id="main-content">
      <div id="main-text">
        <h1 id="main-heading">Koło Naukowe Slawistów</h1>
        <div id="description">
          <p>Witamy na stronie internetowej koła naukowego Slawistów.</p>
          <p>Znajdziecie tutaj:
          <ul id="features">
            <li>informację o naszym kole naukowym</li>
            <li>aktualności z krajów słowiańskich</li>
            <li>czasopismo KNS</li>
          </ul>
          </p>

        </div>
      </div>
      <div id="map">
        <?php include('svg-map.php'); ?>
      </div>

    </main>

    <footer id="footer">
      <p>KNS</p>
    </footer>
  </div>
</body>

</html>