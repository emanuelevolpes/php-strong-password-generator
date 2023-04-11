<?php

$n = $_GET['numbersOfCharacters'];
function getRandomPassword($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomPassword = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomPassword .= $characters[$index];
    }

    return $randomPassword;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- bootstrap -->
    <title>Strong Password Generator</title>
</head>
<body>
    <div class="container p-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <div class="p-3 d-flex justify-content-center">
            <form action="index.php" method="GET" class="text-center">
                <label for="password" class="form-label d-inline me-5">Lunghezza password:</label>
                <input type="text" id="password" name="numbersOfCharacters" class="form-control-sm d-inline-block">
                <button class="d-block my-3 btn btn-primary" type="submit">Invia</button>
            </form>
        </div>
        <div class="d-block text-center">
            <p class="badge text-bg-success fs-3 p-3"><?php echo getRandomPassword($n)?></p>
        </div>
    </div>
</body>
</html>