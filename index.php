<?php
# here we have our empty data
$frase = '';
$parola = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>
        Ciao! Compila il form!
    </h1>
    <!-- here we ask the user to insert the data -->
    <form action="censura.php" method="POST">
        <label for="frase">
            Inserisci una frase
        </label>
        <input type="textarea" name="frase" placeholder="Inserisci qui la tua frase">
    <!-- here the user will define the word we need to censure -->
        <label for="parola">
            Inserisci una parola
        </label>
        <input type="text" name="parola" placeholder="Inserisci qui la parola da censurare">
        <button type="submit">
            invia
        </button>
    </form>
</body>
</html>