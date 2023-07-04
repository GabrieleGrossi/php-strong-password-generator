<!-- 
Milestone 1
    Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
    Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
-->

<?php
    $length = $_GET['passwordLength'];
    
    function generatePsw() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        for ($i = 1; $i < $length; $i++) {

            $n = rand(0, count($alphabet)-1);
            $pass[$i] = $alphabet[$n];
        }
        return $pass;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Password generator PHP</title>
</head>
<body>
    <h1>
        Strong Password Generator
    </h1>
    <h2>
        Generate a secure password 
    </h2>
    <form action="./index.php" method="GET">
        <label for="passwordLength">Password length:</label>
        <input type="text" name="passwordLength" id="passwordLength">
        <button type="submit">Submit</button>
    </form>
    <?php echo $pass
    ?>
</body>
</html>