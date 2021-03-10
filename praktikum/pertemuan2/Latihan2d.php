<?php 
/*
Harits Naufal Ichsan
203040077

Jum'at 10.00 - 11.00
*/
?>

<?php

    function hitungDeterminan($A, $B, $C, $D){
        $determinan = ($A * $D) - ($B * $C);

        echo "<table style='border-left:2px solid black; border-right: 2px solid black; font-size:20px;' cellspacing='5' cellpadding='5'>
                <tr>
                    <td>$A</td>
                    <td>$B</td>
                </tr>
                <tr>
                    <td>$C</td>
                    <td>$D</td>
                </tr>
              </table><br>";
        echo "<b>Determinan dari matriks tersebut adalah $determinan</b>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2D 203040077</title>
</head>
<body>
    <?php
        hitungDeterminan(4, 6, 2, 8);
    ?>
</body>
</html>