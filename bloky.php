<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="experimental.css">
</head>

<body>
  <nav id="navbar">
    <header>
      <img src="images/logo.png" alt="logo" id="logo" />
    </header>
    <ul id="navlist">
      <li><a class="nav-link" href="#onas.php">O nas</a></li>
      <li><a class="nav-link" href="#">Mapa</a></li>
      <li><a class="nav-link" href="#posts">Aktualności</a></li>
      <li><a class="nav-link" href="#magazine">Czasopismo</a></li>
    </ul>
  </nav>
  <main>
    <section id="map-container">
      <?php include('svg-fixed-map.php'); ?>
    </section>
    <section id="posts">
      A post
    </section>

    <section id="czechia">
      Czechy
    </section>

    <section id="slovakia">
      Słowacja
    </section>

    <section id="slovenia">
      Słowenia
    </section>

    <section id="croatia">
      Chorwacja
    </section>

    <section id="serbia">
      Serbia
    </section>

    <section id="bulgaria">
      Bulgaria
    </section>
  </main>
  <footer>
    KNS
  </footer>
</body>

</html>