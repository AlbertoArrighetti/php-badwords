<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class='my-5 text-center '>Form Page</h1>

    <form action="results.php" method="GET">


    <div class="row mb-3 px-4">
        <div class="col">
            <label for="textArea" class="form-label mb-3">Inserisci il testo che preferisci</label>
            <textarea class="form-control" name="user-text" id="textArea" rows="5"></textarea>
        </div>

        <div class="col">
            <label for="bannedWord" class="form-label mb-3"> Inserisci una parola da censurare</label>
            <input type="text" class="form-control" id="bannedWord" name="user-word-to-ban">
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <input type="submit">
    </div>

    </form>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>