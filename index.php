<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link a css -->
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    <h1 class='my-3 text-center '>Bad Words</h1>




    <form action="results.php" class="m-auto " method="GET">
    <div class="row flex-column align-content-center">
        <div class="col">
            <label for="textArea" class="form-label mb-3 d-block text-center  fw-bold fs-4 text-black ">Inserisci il testo che preferisci</label>
            <textarea class="form-control" name="user-text" id="textArea" rows="7"></textarea>
        </div>

        <div class="col mb-4 ">
            <label for="bannedWord" class="form-label my-3 d-block text-center fw-bold fs-4 text-black "> Inserisci una parola da censurare</label>
            <input type="text" class="form-control" id="bannedWord" name="user-word-to-ban">
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <input type="submit" class="btn btn-light">
    </div>

    </form>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>