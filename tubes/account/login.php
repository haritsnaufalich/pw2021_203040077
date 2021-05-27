<?php 

session_start();

require '../config/functions.php';

if (isset($_SESSION["login"])) {
    header("Location: ../index.php");
    exit;
}

$conn = koneksi();

if (isset($_POST["login"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkDB = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    if ($username == "admin") {
        if(mysqli_num_rows($checkDB) === 1) {
            $result = mysqli_fetch_assoc($checkDB);
            if (password_verify($password, $result['password'])) {
                $_SESSION["loginAdmin"] = true;

                // Redirect          
                header("Location: ../admin/dashboard.php");
                exit;
            }
        }

        $error = true;
    } else {
        if(mysqli_num_rows($checkDB) === 1) {
            $result = mysqli_fetch_assoc($checkDB);
            if (password_verify($password, $result['password'])) {
                $_SESSION["login"] = true;

                // Redirect
                header("Location: ../index.php");
                exit;
            }
        }

        $error = true;
    }
    // if (mysqli_num_rows($user) === 1) {
    //     $pass = mysqli_fetch_assoc($user);
    //     if (password_verify($password, $pass['password'])) {
    //         // Set Session
    //         $_SESSION["login"] = true;
    //         if (isset($_POST['rememberMe'])) {
    //             setcookie('rememberMe', 'true', time() + 60);
    //         }
             
    //         header("Location: ../index.php");
    //         exit;
    //     }
    // }
    // $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../assets/icon/iconWeb.png">
    <title>Log in to Aphrodite</title>
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
                            <div class="field has-text-weight-normal">
                                <?php if (isset($error)) : ?>
                                    <p class="has-text-danger">Login Details are Incorrect</p>
                                <?php endif; ?>
                            </div>
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
                                <label class="checkbox" for="remember" name="remember">
                                    <input type="checkbox" name="remember" id="remember">
                                    Remember Me
                                </label>
                            </div>
                            <div class="field">
                                <button type="submit" class="button is-primary" name="login">Login</button>
                                <a href="../index.php" class="button is-light">Cancel</a>
                            </div>
                            <div class="field has-text-weight-normal">
                                <p class="has-text-centered">Don't Have an Account? <a class="has-text-primary	" href="signup.php">Signup</a></p>
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