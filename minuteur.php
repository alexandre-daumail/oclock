<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/minuteur.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS script link -->
    <script type="text/javascript" src="js/minuteur.js"></script>

    <title>Minuteur</title>

</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a class="active" href="#">Minuteur</a></li>
                <li><a href="reveil.php">Réveil</a></li>
                <li><a href="chrono.php">Chronomètre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Minuteur</h1>

        <form action="">
            <fieldset>
                <legend>Veuillez entrer </legend>

                <input type="number">
            </fieldset>
        </form>

        <div id="clockdiv">
            <div>
                <span class="hours" id="hour"></span>
                <div class="smalltext">Heures</div>
            </div>
            <div>
                <span class="minutes" id="minute"></span>
                <div class="smalltext">Minutes</div>
            </div>
            <div>
                <span class="seconds" id="second"></span>
                <div class="smalltext">Secondes</div>
            </div>
        </div>

        <p id="alert"></p>
    </main>

</body>

</html>