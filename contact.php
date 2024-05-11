<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- Link către fișierul CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/contact.css">
    <style>
        /* Stiluri personalizate */
        .text-container {
            padding: 20px;
            background-color: #f8f9fa;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Bara de navigare Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Contact</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pagina principala</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cum-sa-adopti.php">Cum sa adopti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="galerie.php">Galerie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="despre-noi.php">Despre noi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../purrfectmatch/Magazin/blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Text Container Bootstrap -->
        <div class="text-container">
            <p> Dacă doriți să luați legătura cu un adapost local, o asociație pentru protecția animalelor sau o instituție cu atribuții în protecția animalelor, vă recomandăm să folosiți platforma
            <a href="http://www.protectiaanimalelor.org" style="text-decoration: underline; color:blue;">www.protectiaanimalelor.org</a>.</p>
        </div>

        <!-- Formular Bootstrap -->
        <h2>Contact</h2>
<form id="contactForm" method="POST" action="includes/contact.inc.php">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="first_name" required>
    </div>
    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="last_name" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
    </div>
    <input type="submit" value="Submit" class="submit-button">
</form>

<?php
if(isset($_GET['info']) && $_GET['info'] == 'ok') {
    echo '<p style="text-align: center;color:black;font-size:20px;">Mesajul s-a trimis cu succes</p>';
} else if (isset($_GET['info']) && $_GET['info'] == 'error') {
    echo '<p style="text-align: center;color:black;font-size:20px;">A apărut o eroare</p>';
} else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
    echo '<p style="text-align: center;color:black;font-size:20px;">Username-ul există deja</p>';
}
?>
    </div>

    <!-- Link către fișierul JavaScript Bootstrap și jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            var firstname = document.getElementById('firstname').value;
            var lastname = document.getElementById('lastname').value;

            // Verificăm dacă numele și prenumele conțin doar litere
            if (!/^[a-zA-Z]+$/.test(firstname) || !/^[a-zA-Z]+$/.test(lastname)) {
                alert('Numele și prenumele trebuie să conțină doar litere.');
                event.preventDefault(); // Oprirea trimiterii formularului
            }
        });
    </script>
    
</body>
</html>
