<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/reveil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS script link -->
    <script type="text/javascript" src="js/reveil.js"></script>

    <title>Réveil</title>

</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a href="minuteur.php">Minuteur</a></li>
                <li><a class="active" href="#">Réveil</a></li>
                <li><a href="chrono.php">Chronomètre</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            <h1>Heure actuelle :</h1>
            <div class="time" id="myClock"></div>
        </div>
        <div class="container">
            <h1>Vos alarmes :</h1>
        </div>

        <!-- Trigger/Open The Modal -->
        <button id="myBtn"><i class="fa fa-plus-square-o" style="font-size:36px;"></i></button>

        <!-- The Modal -->
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>

                <h1>Ajouter une alarme</h1>


                <div id="clockdiv">
                    <div>
                        <input class="hours" id="hour" type="number" min="0" max="23" />
                        <span class="hours" id="hour"></span>
                        <div class="smalltext">Heures</div>
                    </div>
                    <div>
                        <input class="minutes" id="minute" type="number" min="0" max="59" />
                        <span class="hours" id="minute"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div>
                        <input type="text" name="title" placeholder="Entrez un titre"/>
                    </div>

                </div>
                
                <div>
                    <button type="button" name="add">Ajouter</button>
                    <button type="button" name="cancel">Annuler</button>
                </div>

            </div>

        </div>
    </main>


</body>

</html>