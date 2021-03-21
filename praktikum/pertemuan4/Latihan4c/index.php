<?php 
/*
Harits Naufal Ichsan
203040077
https://github.com/haritsnaufalich/pw2021_203040077/tree/master/praktikum/pertemuan3
Jum'at 10.00 - 11.00
*/

require 'php/functions.php';
$items = query("SELECT * FROM converse");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converse Official Store</title>
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABn0lEQVRIS+WVgS1EQRCG/6sAFaACVIAKuApQASpABagAFXAVUAIVoAJ0IJ/Me5l7ud03++zlJCa55HK3u9/O7D//jLSgGC2Iqz8BXpO06irwIulzXhXxGZ9LOnMgoLuSnucBz4HhPRm8OtuDKTUfYl/SsX0nay5QNVLiWpb0YaQ7SYdVqVJW1beSDgy4UwH85fWSaydgjxWA/oixpAd+6OtjFL1REX4kiUr2gnnbGwNfDBQZbbptZ6w03tCXMSJ7k7Q0sLWSIu0Dc9Er11rrdpFo9X3F2veNlJo19Parka4lnUSppmI08u484md7JOPGwXgnbJSsIx6evXAUjJPdW6atMnsyzz5RFAwDkTG9aLGtQLmb9Uy5ze76ErCfXoiGg1MBiIyJmRUqAfvWCCTcLml7128qAXdbKwJPdkEpGFjJwEiO0yFgFI6TTRJtxZPs2X+smRmlYMzj0k7iUC7RDaYPYOLUiWxqXSnYH8p8JbtuYC5UhEhdLuxczeHeSFLC8cYx5c+/UTV7ybKZWqknxC7JPGmtpaWOtFBozf8DfwMxgUsfjSvBrgAAAABJRU5ErkJggg=="/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <style>
        img {
    display: block;
    max-width: 100%;
    height: 128px;
    width: 128px;
    margin: auto;
    }
    </style>
</head>
<body>
    <div class="container mt-5 mb-5">
        <table id="dataTableX" class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Detail</th>
                </tr>
            </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach($items as $item) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td>
                                <figure>
                                    <img src="assets/img/<?= $item["itemsIMG"]; ?>" class="img-fluid" alt="">
                                </figure>
                            </td>
                            <td><?= $item["itemsName"]; ?></td>
                            <td><?= $item["itemsColor"]; ?></td>
                            <td>Rp. <?= $item["itemsPrice"]; ?>,00</td>
                            <td><?= $item["itemsStock"]; ?></td>
                            <td><a href="php/detail.php?id=<?= $item["id"]; ?>">Info</a></td>
                        </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script>
        $(document).ready(function() {
        $('#dataTableX').DataTable();
        } );
    </script>
</body>
</html>