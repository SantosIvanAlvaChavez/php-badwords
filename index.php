<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>

    <?php
    $text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Lorem ipsum dolor, sit amet consectetur adipisicing elit.';
    $text_lenght = strlen($text);
    $badword = $_GET['badword'];
    $amended_text = str_replace($badword, '***', $text);
    ?>

    <h2>Testo originale:</h2>
    <p><?php echo $text ?></p>
    <h3>Lunghezza testo: <?php echo $text_lenght ?></h3>

    <h2>Testo censurato:</h2>
    <p><?php echo$amended_text ?></p>
    
</body>
</html>