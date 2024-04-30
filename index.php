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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <title>PHP Badwords</title>
</head>

<body>
    <div class="container">
        <h1>
            Ciao! Compila il form!
        </h1>
    
        <!-- here we ask the user to insert the data -->
        <form action="censura.php" method="POST">
            <label for="frase">
                Inserisci una frase
            </label>
            <textarea name="frase" id="" cols="30" rows="10"></textarea>
    
        <!-- here the user will define the word we need to censure -->
            <label for="parola">
                Inserisci una parola
            </label>
            <input type="text" name="parola" placeholder="Inserisci qui la parola da censurare">
            <button type="submit">
                invia
            </button>
        </form>
    </div>
</body>
</html>