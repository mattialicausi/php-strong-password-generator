<?php


//CICLO WHILE CHE PERMETTE DI GENERARE UN NUMERO RANDOM PER ESTRARRE UN ELEMENTO DA ARRAYCARATTERI PER FORMARE LA PASSWORD
$n = 0;
if (isset($passLength) && $passLength > 0) {
    while ($n < $passLength) {
        $num = rand(0, count($arrayCaratteri));

        $passWord[] = $arrayCaratteri[$num];
        $n++;

    }
    ;
    $redirect = true;
}


$passwordGenerata = implode($passWord);

$_SESSION['passwordGenerata'] = $passwordGenerata;

//CONDIZIONE PER REINDIRIZZARE L'UTENTE VERSO PASSWORD.PHP

if ($redirect) {
    header("location: ./password.php");
}
;