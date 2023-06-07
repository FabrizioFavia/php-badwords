<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.scss">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words PHP</title>
</head>
    <body>
        <form id="phpForm" class="d-flex flex-column px-3 mt-5" action="index.php" method="get">
            <label class="mb-3 mt-3" for="name">Nome utente</label>
            <input class="p-2" type="text" name="name" placeholder="Inserisci Il tuo nome">
            <label class="mb-3 mt-3" for="word">Parola da censurare</label>
            <input class="p-2" type="text" name="word" placeholder="Inserisci la parola da censurare">
            <label class="mb-3 mt-3" for="text">Inserisci un testo</label>
            <textarea class="p-2" type="text" name="text" placeholder="Inserisci il testo"></textarea>
            <button class="mt-4 btn btn-primary w-25" type="submit">Inserisci</button>
        </form>
    </body>
</html>