<?php 

session_start();

if (!isset($_SESSION["login"])) {
    header("Location: account/login.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

require 'config/functions.php';
$id = $_GET['id'];

$items = query("SELECT * FROM converse WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/icon/iconWeb.png">
    <title>Details Item</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <div class="card py-4 px-4">
                            <div class="card-image">
                                <figure class="image is-square">
                                    <img src="assets/img/<?= $items["itemsIMG"]; ?>">
                                </figure>
                            </div>
                            <div class="media-content pt-4 pb-4">
                                <p>Name&nbsp;: <?= $items["itemsName"]; ?></p>
                                <p>Price&nbsp;&nbsp;&nbsp;: Rp. <?= $items["itemsPrice"]; ?>,00</p>
                                <p>Color&nbsp;&nbsp;: <?= $items["itemsColor"]; ?></p>
                                <p>Stock&nbsp;&nbsp;: <?= $items["itemsStock"]; ?></p>
                            </div>
                            <footer class="card-footer pt-4">
                                <a href="index.php" class="button is-dark">Back</a>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>