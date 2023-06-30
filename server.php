<?php
    $received_text = $_GET["text"];
    $received_badword = $_GET["badword"];

    $text_length = strlen($received_text);
    
    $censored_badword = str_replace($received_badword, "-----", $received_text);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badword</title>
    </head>
    <body>
        <h1>
            Il paragrafo è: <?php echo $received_text ?>, e la sua lunghezza è: <?php echo $text_length ?>
        </h1>
    </body>
</html>