<?php session_start(); ?>
<?php
if (isset($_POST['submit'])) {
    require_once "koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    if ($user = $mysqli->query($sql)) {
        $user = $user->fetch_assoc();
        if (!is_null($user)) {
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['status'] = $user['status'];
            header('Location: index.php');
        } else echo "<script>alert('Username atau Password Salah!');</script>";
    } else echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
    <style>
        .btn-primary {
            background-color: #0093DD!important;
        }
    </style>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover" style="background-color: #0093DD;"></div>
    </section>
    <section class="login-content">
        <div class="login-box" style="height: 500px;">
            <form class="login-form" action="" method="POST">
                <div class="logo d-flex justify-content-center">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg" width="100" alt="">
                </div>
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>LOGIN</h3>
                <div class="form-group">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" name="username" placeholder="Username" autofocus>
                </div>
                <div class="form-group">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="utility w-100 text-center">
                        <p class="semibold-text text-center w-100 mb-2"><a href="#">Forgot Password ?</a></p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit" name="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>LOGIN</button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>

</html>