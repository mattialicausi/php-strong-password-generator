<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Strong Password Generator</title>
</head>

<body>
    <header class="container p-4 text-center">
        <h1>Strong Password Generator</h1>
    </header>

    <main>
        <h2 class="text-center text-white p-2">Genera una password sicura</h2>
        <div class="container-alert rounded-2 p-4 container mb-4">
            Lorem ipsum dolor sit am
        </div>

        <div class="container-form container">
            <form action=".index.php" method="GET">

                <div class="container-input d-flex justify-content-between p-4 rounded-2">
                    <h3>Lunghezza password:</h3>
                    <input type="number" name="passLen" id="passLen">
                </div>

            </form>
        </div>

    </main>

</body>

</html>