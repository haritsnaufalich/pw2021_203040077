<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan2
Jum'at 10.00 - 11.00
*/
?>

<?php

    function gantiStyle($tulisan, $style1, $style2){ 
        return "<div class=\"$style1 $style2\">$tulisan</div>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2A 203040077</title>
    <style>
    .tulisan{
        font: italic bolder 28px Arial;
        color: #8c782d;
    }
    .pembungkus{
        border: 1px solid black;
        box-shadow: 0 0 5px rgba(0, 0, 0, 20);
        width: fit-content;
        padding: 10px;
    }
    </style>
</head>
<body>
    <?php
        echo gantiStyle("Selamat datang di praktikum PW", "tulisan", "pembungkus")
    ?>
</body>
</html>