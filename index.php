<?php
//VARIABILI CONTENENTI VALORI PER LE PASSWORD
$alfabeto = 'a b c d e f g h i j k l m n o p q r s t u v w x y z';
$Alfabeto = strtoupper($alfabeto);
$numeri = '0 1 2 3 4 5 6 7 8 9';
$simboli = "! # $ % & ( ) * + , \ - . / : ; < = > ? @ [ \ ] ^ _ { | } ";

//ARRAY CONTENENTI I CARATTERI DELLE VARIABILI
$arrayalfabeto = explode(' ', $alfabeto);
$arrayAlfabeto = explode(' ', $Alfabeto);
$arraynumeri = explode(' ', $numeri);
$arraysimboli = explode(' ', $simboli);
$passLength = $_GET['passLen'];


$passWord = [];
$arrayCaratteri = array_merge($arrayalfabeto, $arrayAlfabeto, $arraynumeri, $arraysimboli);

$n = 0;
while ($n < $passLength) {

    $num = rand(0, count($arrayCaratteri));

    $passWord[] = $arrayCaratteri[$num];
    $n++;

}
;

$passwordGenerata = implode($passWord);

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

        <div class="container-form container p-4 rounded-2">
            <form action="index.php" method="GET">

                <div class="container-input d-flex justify-content-between">
                    <h3>Lunghezza password:</h3>
                    <input type="number" name="passLen" id="passLen">
                </div>

                <div class="container-btn">
                    <button type="submit" class="btn btn-primary">Genera</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>
                </div>

            </form>
        </div>

        <div class="container-password container rounded-2 p-3 text-center">
            <h2 class="text-white">La tua password è <br>
                <?php echo $passwordGenerata ?>
            </h2>
        </div>

    </main>

</body>

</html>