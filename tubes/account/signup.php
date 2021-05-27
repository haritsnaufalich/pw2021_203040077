<?php 

require '../config/functions.php';

$conn = koneksi();

if (isset($_POST["signup"])) {
    if (signup($_POST) > 0) {
        echo "
            <script>
                alert('Account Created');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo mysqli_error($conn);
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
    <title>Sign up for Aphrodite</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="hero is-light is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-3-widescreen">
                        <form action="" class="box" method="post">
                            <div class="field">
                                <label for="" class="label" name="username">Username</label>
                                <div class="control has-icons-left">
                                    <input type="text" class="input" name="username" id="username">
                                    <span class="icon is-small is-left">
                                        <i class='bx bxs-user'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label" name="password">Password</label>
                                <div class="control has-icons-left">
                                    <input type="password" class="input" name="password" id="password">
                                    <span class="icon is-small is-left">
                                        <i class='bx bxs-lock-alt'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label" name="password2">Confirm Password</label>
                                <div class="control has-icons-left">
                                    <input type="password" class="input" name="password2" id="password2">
                                    <span class="icon is-small is-left">
                                        <i class='bx bxs-lock-alt'></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-info" name="signup">Signup</button>
                                <a href="../index.php" class="button is-light">Cancel</a>
                            </div>
                            <div class="field has-text-weight-normal">
                                <p class="has-text-centered">Already Have an Account? <a class="has-text-info" href="login.php">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
</body>
</html>