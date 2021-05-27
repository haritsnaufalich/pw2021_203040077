<?php

session_start();

if (!isset($_SESSION["loginAdmin"])) {
    header("Location: ../account/login.php");
    exit;
}

require 'functions.php';
$id = $_GET['id'];

if (deleteData($id) > 0) {
    echo "
            <script>
                alert('Success');
                document.location.href = '../admin/dashboard.php';
            </script>";
} else {
    echo "
            <script>
                alert('Failed');
                document.location.href = '../admin/dashboard.php';
            </script>";
}

?>