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


strlen($frase);
strlen($censura);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <!-- here we print the data -->
    <p>
        <?php echo $frase ?>
        <br>
        lunghezza della frase:
        <?php echo strlen($frase) ?>
    </p>
    <!-- here we print the data with the censure -->
    <p>
        <?php echo $censura ?>
        <br>
        <!-- here we print the length of the censure -->
        lunghezza della frase censurata:
        <?php echo strlen($censura) ?>
    </p>
    
</body>
</html>