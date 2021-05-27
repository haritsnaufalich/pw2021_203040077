<?php

require '../config/functions.php';

$keyword = $_GET["keyword"];
$items = query("SELECT * FROM converse WHERE itemsName LIKE '%$keyword%' OR itemsColor LIKE '%$keyword%' OR itemsPrice LIKE '%$keyword%' OR itemsStock LIKE '%$keyword%'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icon/iconWeb.png">
    <title>Aphrodite</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <style>
        #dataTable tbody tr .tdCenter  {
            vertical-align: middle;
            text-align: center;
        }
        #dataTable thead tr .thCenter {
            text-align: center;
        }
        .image img {
            position: absolute;
            top: auto;
            right: auto;
            bottom: auto;
            left: 35%;
        }
    </style>
</head>
<body>
    <table id="dataTable" class="table" style="width:100%">
        <thead>
            <tr>
                <th class="thCenter">No</th>
                <th class="thCenter">Image</th>
                <th>Item Name</th>
                <th class="thCenter">Price</th>
                <!-- <th class="thCenter">Stock</th> -->
                <th class="thCenter">Info</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($items)) : ?>
                <tr>
                    <td colspan="7">
                        <p>No Data Available in Database</p>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1 ?>
                <?php foreach($items as $item) : ?>
                    <tr>
                        <td class="tdCenter"><?= $i; ?></td>
                        <td class="tdCenter">
                            <figure class="image is-square">
                                <img src="assets/img/<?= $item["itemsIMG"]; ?>">
                            </figure>
                        </td>
                        <td style="vertical-align: middle;"><?= $item["itemsName"]; ?></td>
                        <td class="tdCenter">Rp. <?= $item["itemsPrice"]; ?>,00</td>
                        <!-- <td class="tdCenter"><?= $item["itemsStock"]; ?></td> -->
                        <td class="tdCenter"><a href="detail.php?id=<?= $item["id"]; ?>">Detail</a></td>
                    </tr>
                <?php $i++ ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script>
        $('#dataTable').DataTable({
            bFilter: false,
            bLengthChange: false,
            ordering: false
        });
    </script>
    <script src="js/script.js"></script>
</body>
</html>