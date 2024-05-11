<!DOCTYPE html>
<html>
  <head>
    <title>Despre noi </title>
    <meta name="description" content="Pisici fara adapost" />
    <meta name="keywords" content="pisici, salvarea pisicilor, adoptii pisici, adoptii animale" />
    <meta name="author" content="Elisa Nica" />
    <link rel="stylesheet" href="style.css">
    <!--ceva de scris-->
      <!--<style>
        p{ font-size: 12pt; line-height:12pt; }
        p:first-letter { font-size: 200%; }
      </style>-->
  </head>
<title>Meniu</title>
    <!-- Link către fișierul CSS Bootstrap cu nuanțe de verde -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Stiluri suplimentare personalizate */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .menu-item {
            color: #155724; /* Verde închis pentru text */
        }
        .menu-item:hover {
            color: #0d422d; /* Schimbarea culorii la hover */
            text-decoration: none; /* Eliminarea sublinierii la hover */
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link menu-item" href="index.php">Pagina principala</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" href="cum-sa-adopti.php">Cum să adopti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" href="galerie.php">Galerie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" href="despre-noi.php">Despre noi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" href="../purrfectmatch/Magazin/blog.php">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link menu-item" href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</nav>
 
   <style>
        /* Stiluri suplimentare personalizate */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .about-text {
            color: #155724; /* Verde închis pentru text */
        }
         .about-image {
            transition: transform 0.3s ease; /* Tranzitie de 0.3 secunde pentru transformare */
        }
        /* Stil pentru imaginea mărită la hover */
        .about-image:hover {
            transform: scale(1.1); /* Mărește imaginea la 110% la hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Despre noi</h2>
    <div class="row">
        <div class="col-md-6">
            <p class="about-text">Suntem o echipă dedicată pasionată de a găsi cămine iubitoare pentru pisicile fără stăpân. Misiunea noastră este să salvăm și să oferim pisicilor o nouă șansă la viață, conectându-le cu familii iubitoare și responsabile.</p>
            <p class="about-text">Ne angajăm să promovăm bunăstarea animalelor și să educăm comunitatea cu privire la importanța adoptării responsabile și a îngrijirii adecvate a animalelor de companie. Fiecare adopție reprezintă o poveste de succes și ne bucurăm să facem parte din acest proces minunat!</p>
        </div>
        <div class="col-md-6">
            <img src="images/Screenshot_14.png" class="img-fluid about-image" class="img-fluid" alt="Pisici">
        </div>
    </div>
</div>

<!-- Link către fișierul JavaScript Bootstrap și jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
