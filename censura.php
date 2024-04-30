<?php
// here we show how we get the data from the form
echo "<pre>";
var_dump($_POST);
echo "</pre>";

// the data we get from the form
$frase = $_POST['frase'];
$parola = $_POST['parola'];

// here we censure the word
$censura = str_replace($parola, '***', $frase);

// here we get the length of the data
strlen($frase);
strlen($censura);
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
            Bad Word!
        </h1>
        
        <!-- here we print the data -->
        <p>
            <?php echo $frase ?>
            <br>
            lunghezza della frase:
            <?php echo strlen($frase) ?>
            caratteri
        </p>

        <!-- here we print the data with the censure -->
        <p>
            <?php echo $censura ?>
            <br>
            <!-- here we print the length of the censure -->
            lunghezza della frase censurata:
            <?php echo strlen($censura) ?>
            caratteri
        </p>
    </div>
</body>
</html>