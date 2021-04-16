<?php

require 'functions.php';

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

$id = $_GET['id'];
$item = query("SELECT * FROM converse WHERE id = $id")[0];

if (isset($_POST['editData'])) {
    if (editData($_POST) > 0) {
        echo "
            <script>
                alert('Success');
                document.location.href = 'admin.php';
            </script>";
    } else {
        echo "
            <script>
                alert('Failed');
                document.location.href = 'admin.php';
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
    <title>Add Data</title>
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAABn0lEQVRIS+WVgS1EQRCG/6sAFaACVIAKuApQASpABagAFXAVUAIVoAJ0IJ/Me5l7ud03++zlJCa55HK3u9/O7D//jLSgGC2Iqz8BXpO06irwIulzXhXxGZ9LOnMgoLuSnucBz4HhPRm8OtuDKTUfYl/SsX0nay5QNVLiWpb0YaQ7SYdVqVJW1beSDgy4UwH85fWSaydgjxWA/oixpAd+6OtjFL1REX4kiUr2gnnbGwNfDBQZbbptZ6w03tCXMSJ7k7Q0sLWSIu0Dc9Er11rrdpFo9X3F2veNlJo19Parka4lnUSppmI08u484md7JOPGwXgnbJSsIx6evXAUjJPdW6atMnsyzz5RFAwDkTG9aLGtQLmb9Uy5ze76ErCfXoiGg1MBiIyJmRUqAfvWCCTcLml7128qAXdbKwJPdkEpGFjJwEiO0yFgFI6TTRJtxZPs2X+smRmlYMzj0k7iUC7RDaYPYOLUiWxqXSnYH8p8JbtuYC5UhEhdLuxczeHeSFLC8cYx5c+/UTV7ybKZWqknxC7JPGmtpaWOtFBozf8DfwMxgUsfjSvBrgAAAABJRU5ErkJggg=="/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <form action="" method="post">
            <div class="form-row">
                <input type="hidden" name="id" id="id" value="<?= $item['id']; ?>">
                <div class="form-group col-md-4 mb-2">
                    <label for="itemsName">Item Name</label>
                    <input type="text" class="form-control" name="itemsName" id="itemsName" required value="<?= $item['itemsName']; ?>">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="itemsColor">Color</label>
                    <input type="text" class="form-control" name="itemsColor" id="itemsColor" required value="<?= $item['itemsColor']; ?>">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="itemsPrice">Price</label>
                    <input type="text" class="form-control" name="itemsPrice" id="itemsPrice" required value="<?= $item['itemsPrice']; ?>">
                </div>
                <div class="form-group col-md-4 mb-2">
                    <label for="itemsStock">Stock</label>
                    <input type="text" class="form-control" name="itemsStock" id="itemsStock" required value="<?= $item['itemsStock']; ?>">
                </div>
                <div class="form-group col-md-4 mb-4">
                    <label for="itemsIMG">Image File</label>
                    <input type="text" class="form-control" name="itemsIMG" id="itemsIMG" required value="<?= $item['itemsIMG']; ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-success " name="editData">Submit</button>
            <a href="admin.php" class="btn btn-danger">Back</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>