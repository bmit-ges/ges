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
    <title>ges.bm-it.ch</title>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="css/largescreen.css">
    <link rel="stylesheet" href="css/mediumscreen.css">
    <link rel="stylesheet" href="css/smalscreen.css">
    <link rel="stylesheet" href="css/certificate.scss">
    
    
</head>

<body>
  <!--
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
-->
    <fieldset class="slideshow">

        <label class="slide-button" for="slideCheckbox1">More</label>
        <input type="radio" id="slideCheckbox1" name="slide"></input>
        <div class="slide">
            <div class="slide__content">
                <h1>More</h1>
                <p>More here</p>
            </div> 
        </div>

        <label class="slide-button" for="slideCheckbox2">Yet More</label>
        <input type="radio" id="slideCheckbox2" name="slide"></input>
        <div class="slide">
            <div class="slide__content">
                <h1>Yet More</h1>
                <p>Yet more here</p>
            </div>  
        </div>

    </fieldset>

<!--
    <footer>
        <div class="footer-container">
            <p class="footer-text"> Erstellt von Sibylle Gehring | HTML, CSS, JS, JQuery, PHP, Bootstrap</p>
        </div>
    </footer>
-->
</body>

</html>