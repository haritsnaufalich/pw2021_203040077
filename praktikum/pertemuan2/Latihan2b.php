<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan2
Jum'at 10.00 - 11.00
*/
?>

<?php

$jawabanIsset = "Isset adalah salah satu fungsi yang berguna untuk menentukan apakah suatu variabel telah di set dan tidak null";
$jawabanEmpty = "Empty adalah salah satu fungsi yang berguna untuk menentukan apakah suatu variabel kosong atau tidak";

function jawaban($style) {
    return "<div class=\"$style\">" . $GLOBALS['jawabanIsset'] . "<br>" .$GLOBALS['jawabanEmpty'] . "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2B 203040077</title>
    <style>
    .style{
        border: 1px solid black;
        box-shadow: 0 0 5px rgba(0, 0, 0, 20);
        padding: 10px;
        font-size: 20px;
        width: fit-content;
    }
    </style>
</head>
<body>
    <?php
        echo jawaban("style"); 
    ?>
</body>
</html>