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

if (isset($_GET['passLen'])) {
    $passLength = $_GET['passLen'];
}
;


//ARRAY VUOTO PER CONTENERE I CARATTERI GENERATI NEL WHILE // UNISCO GLI ARRAY IN UNO SOLO
$passWord = [];
$arrayCaratteri = array_merge($arrayalfabeto, $arrayAlfabeto, $arraynumeri, $arraysimboli);

//VARIABILE PER REINDIRIZZARE L'UTENTE A PASSWORD.PHP
$redirect = false;