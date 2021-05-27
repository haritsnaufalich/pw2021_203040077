<?php

session_start();

if (!isset($_SESSION["loginAdmin"])) {
    header("Location: ../account/login.php");
    exit;
}

require '../config/functions.php';

if (isset($_POST['addData'])) {
    if (addData($_POST) > 0) {
        echo "
            <script>
                alert('Success');
                document.location.href = 'dashboard.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Failed');
                document.location.href = 'addData.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/icon/iconWeb.png">
    <title>Add Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="" class="box" method="post" enctype="multipart/form-data">
                            <div class="field">
                                <label for="itemsName" class="label">Item Name</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="itemsName" id="itemsName" required>
                                    <span class="icon is-small is-left">
                                        <i class='bx bx-book-add'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="itemsColor" class="label">Color</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="itemsColor" id="itemsColor" required>
                                    <span class="icon is-small is-left">
                                        <i class='bx bx-color-fill'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="itemsPrice" class="label">Price</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="itemsPrice" id="itemsPrice" required>
                                    <span class="icon is-small is-left">
                                        <i class='bx bx-dollar'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="itemsStock" class="label">Stock</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="itemsStock" id="itemsStock" required>
                                    <span class="icon is-small is-left">
                                        <i class='bx bxs-coin-stack'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Image File</label>
                            </div>
                            <div class="file has-name is-fullwidth is-right">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="itemsIMG" id="itemsIMG">
                                    <span class="file-cta">
                                        <!-- <span class="file-icon">
                                            <i class='bx bx-images'></i>
                                        </span> -->
                                        <span class="file-label">
                                            Upload..
                                        </span>
                                    </span>
                                    <span class="file-name">
                                        
                                    </span>
                                </label>
                            </div>
                            <br>
                            <div class="field">
                                <button type="submit" class="button is-info" name="addData">Submit</button>
                                <a href="dashboard.php" class="button is-light">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="../js/upload.js"></script>
</body>
</html>