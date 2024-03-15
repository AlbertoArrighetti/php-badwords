<?php
$user_text = $_GET['user-text'];

$user_banned_word = $_GET['user-word-to-ban'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- link a css -->
    <link rel="stylesheet" href="./style.css">

</head>
<body class='bg-dark text-white '>
    <div class="conatiner text-center ">
        <h2 class='my-4'>Testo dell'utente</h2>
    

        <div class="form-floating mb-3">
            <textarea class="form-control w-50 bg-dark text-white my-4 mx-auto " placeholder="Leave a comment here" style="height: 200px " disabled>
        
            <?php 
            echo $user_text 
            ?>

            </textarea>
        </div>  
    
        <h3 class='mb-4'>
            Lunghezza testo: 
        
            <?php
            $result = strlen($user_text);
            echo $result;
            ?>
        </h3>
    
        <hr>
    
        <h2>Testo con parole bannate</h2>
    
        <div class="form-floating mb-3">
            <textarea class="form-control w-50 bg-dark text-white my-4  mx-auto" placeholder="Leave a comment here" style="height: 200px " disabled>
        
            <?php 
            $filtered_text = str_replace($user_banned_word, str_repeat('*', 3), $user_text); 
            echo $filtered_text ;
            ?>
        
            </textarea>
        </div>  

        <h3 class='mb-4'>
            Lunghezza testo: 
        
            <?php
            $result = strlen($filtered_text);
            echo $result;
            ?>
        </h3>
    </div>

    
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>