<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final result PHP</title>
</head>
<body>



    <?php
    $selectedWord = $_GET["word"];
    $text = $_GET["text"];
    $textLength =  strlen($text);


    ?>
    <div class="container-lg">
    <h1>Benvenuto, <?php echo $_GET["name"] ?> </h1>

    <h3>Testo originale</h3>
    <p><?php echo $text ?></p>
    <h3>Lunghezza:</h3>
    <p><?php echo $textLength ?></p>

    <h3>Testo censurato</h3>
    <?php
    if(str_contains($text, $selectedWord) == true){
        $censored = str_replace($selectedWord,"***", $text);
        echo $censored;
    } else{
        echo "La parola non è presente nel testo";
    }
    ?>
    <h3>Lunghezza:</h3>
    <p><?php echo strlen($censored);?></p>
    </div>

</body>
</html>