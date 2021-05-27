<?php 

session_start();

if (!isset($_SESSION["loginAdmin"])) {
    header("Location: ../account/login.php");
    exit;
}

require '../config/functions.php';

if (isset($_GET['searchData'])) {
    $itemsKeyword = $_GET['itemsKeyword'];
    $items = query("SELECT * FROM converse WHERE itemsName LIKE '%$itemsKeyword%' OR itemsColor LIKE '%$itemsKeyword%' OR itemsPrice LIKE '%$itemsKeyword%' OR itemsStock LIKE '%$itemsKeyword%'");
} else {
    $items = query("SELECT * FROM converse");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/icon/iconWeb.png">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        #dataTable tbody tr .tdCenter  {
            vertical-align: middle;
            text-align: center;
        }
        #dataTable thead tr .thCenter {
            text-align: center;
        }
        /* .image img {
            position: absolute;
            top: auto;
            right: auto;
            bottom: auto;
            left: 15%;
        } */
    </style>
</head>
<body>
<nav class="navbar px-6 py-2 is-info" role="navigation" aria-label="main navigation">
        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-menu py-2 pr-3">
                    <a href="dashboard.php" class="button is-dark has-text-weight-semibold">
                        Home
                    </a>
                </div>
                <div class="navbar-menu py-2">
                    <a href="addData.php" class="button is-dark has-text-weight-semibold">
                        Input Data
                    </a>
                </div>
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item py-2">
                <form action="" method="get" class="field has-addons">
                    <div class="control">
                        <input type="text" name="itemsKeyword" id="itemsKeyword" class="input" placeholder="Search..">
                    </div>
                    <div class="control">
                        <button type="submit" name="searchData" id="searchData" class="button is-dark has-text-weight-semibold">
                            Search
                        </button>
                    </div>
                </form>
            </div>
            <div class="navbar-menu py-2">
                <a href="../account/logout.php" class="button is-danger has-text-weight-semibold">
                    Logout
                </a>
            </div>
        </div>
    </nav>
    <div class="container py-6" id="container">
        <table id="dataTable" class="table" style="width:100%">
            <thead>
                <tr>
                    <th class="thCenter">No</th>
                    <th class="thCenter">Image</th>
                    <th>Item Name</th>
                    <!-- <th class="thCenter">Color</th> -->
                    <!-- <th class="thCenter">Price</th> -->
                    <!-- <th class="thCenter">Stock</th> -->
                    <!-- <th>Info</th> -->
                    <th class="thCenter">Action</th>
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
                            <td>
                                <figure class="image is-square">
                                    <img src="../assets/img/<?= $item["itemsIMG"]; ?>">
                                </figure>
                            </td>
                            <td style="vertical-align: middle;"><?= $item["itemsName"]; ?></td>
                            <!-- <td class="tdCenter"><?= $item["itemsColor"]; ?></td> -->
                            <!-- <td class="tdCenter">Rp. <?= $item["itemsPrice"]; ?>,00</td> -->
                            <!-- <td class="tdCenter"><?= $item["itemsStock"]; ?></td> -->
                            <td class="tdCenter">
                                <a href="../config/editData.php?id=<?= $item["id"]; ?>" class="button is-info is-normal">Edit</a>
                                <a href="../config/deleteData.php?id=<?= $item["id"]; ?>" class="button is-danger is-normal" onclick="return confirm('Delete Item?')">Delete</a>
                            </td>
                        </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

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