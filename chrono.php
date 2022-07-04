<!DOCTYPE html>
<html lang="fr">

<head>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/chrono.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- JS script link -->
    <script type="text/javascript" src="js/chrono.js"></script>

    <title>Chronomètre</title>

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Horloge</a></li>
                <li><a href="minuteur.php">Minuteur</a></li>
                <li><a href="reveil.php">Réveil</a></li>
                <li><a class="active"href="#">Chronomètre</a></li>
            </ul>
        </nav>
    </header>
    <div class="watch">
		<div class="time">
			00:00:00
		</div>
		<div class="controls">
			<button id="start">Start</button>
			<button id="stop">Stop</button>
			<button id="reset">Reset</button>
		</div>
	</div>
</body>

</html>