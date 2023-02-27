<?php
    /*
  global $login;

  session_start();

  if($login = false){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
  }

  if(isset($_POST['logout'])){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: index.php");
    header("Connection: close");
    $login = false;
  }
  */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script type="text/javascript" scr="js/slideshow.js"></script>

    <title>ges.bm-it.ch</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="css/largescreen.css">
    <link rel="stylesheet" href="css/mediumscreen.css">
    <link rel="stylesheet" href="css/smalscreen.css">
    <link rel="stylesheet" href="css/certificate.css">
    <link rel="stylesheet" href="css/style.css">

    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#aboutme">About Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#cv">Lebenslauf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projekte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#form">Zertifikate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#form">Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>

    <content>
    <div class="slideshow">
        <img src="img/Placeholder.png">
        <img src="img/Placeholder.png">
        <img src="img/Placeholder.png">
        <img src="img/Placeholder.png">
    </div>

    </content>

    <footer>
        <div class="footer-container">
            <p class="footer-text"> Erstellt von Sibylle Gehring | HTML, CSS, JS, JQuery, PHP, Bootstrap</p>
        </div>
    </footer>

</body>

</html>