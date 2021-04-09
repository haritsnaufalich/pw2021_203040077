<?php 

// Mengecek apakah ada ID yang dikirimkan
// Jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$items = query("SELECT * FROM converse WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $items["itemsName"]; ?></title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABn0lEQVRIS+WVgS1EQRCG/6sAFaACVIAKuApQASpABagAFXAVUAIVoAJ0IJ/Me5l7ud03++zlJCa55HK3u9/O7D//jLSgGC2Iqz8BXpO06irwIulzXhXxGZ9LOnMgoLuSnucBz4HhPRm8OtuDKTUfYl/SsX0nay5QNVLiWpb0YaQ7SYdVqVJW1beSDgy4UwH85fWSaydgjxWA/oixpAd+6OtjFL1REX4kiUr2gnnbGwNfDBQZbbptZ6w03tCXMSJ7k7Q0sLWSIu0Dc9Er11rrdpFo9X3F2veNlJo19Parka4lnUSppmI08u484md7JOPGwXgnbJSsIx6evXAUjJPdW6atMnsyzz5RFAwDkTG9aLGtQLmb9Uy5ze76ErCfXoiGg1MBiIyJmRUqAfvWCCTcLml7128qAXdbKwJPdkEpGFjJwEiO0yFgFI6TTRJtxZPs2X+smRmlYMzj0k7iUC7RDaYPYOLUiWxqXSnYH8p8JbtuYC5UhEhdLuxczeHeSFLC8cYx5c+/UTV7ybKZWqknxC7JPGmtpaWOtFBozf8DfwMxgUsfjSvBrgAAAABJRU5ErkJggg=="/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col s4">
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-image">
                        <img class="responsive-img" src="../assets/img/<?= $items["itemsIMG"]; ?>">
                    </div>
                    <div class="card-content black-text">
                        <p>Name&nbsp;: <?= $items["itemsName"]; ?></p>
                        <p>Price&nbsp;&nbsp;&nbsp;: Rp. <?= $items["itemsPrice"]; ?>,00</p>
                        <p>Color&nbsp;&nbsp;: <?= $items["itemsColor"]; ?></p>
                        <p>Stock&nbsp;&nbsp;: <?= $items["itemsStock"]; ?></p>
                    </div>
                    <div class="card-action">
                        <a href="../index.php" class="waves-effect waves-light btn">Back</a>
                    </div>
                </div>
            </div>
            <div class="col s4">
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>