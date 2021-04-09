<?php

require 'functions.php';
$id = $_GET['id'];

if (deleteData($id) > 0) {
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

?>