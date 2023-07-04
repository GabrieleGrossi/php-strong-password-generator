<!-- 
Milestone 1
    Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->

<?php
require __DIR__ . "./function.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Password generator PHP</title>
</head>
<body>
    <div class="row text-center">
        <div class="col-12">
            <h1>
                Strong Password Generator
            </h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <h2>
                Generate a secure password 
            </h2>
        </div>
    </div>
    <div class="container">
        <form action="./index.php" method="GET">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <label for="passwordLength">Password length:</label>
                    <input type="number" name="pswLength" id="pswLength">
                    <button type="submit" class="btn btn-outline-dark">Generate</button>
                </div>
            </div>
        </form>
        <p class="text-center">
            <?php 
                echo "La password generata è: " . $generatedPassword;
            ?>
        </p>
    </div>
</body>
</html>