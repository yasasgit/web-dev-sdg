<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$username_err = $password_err = $login_err = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["email"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["email"]);
    }
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, email, password FROM users WHERE email = ?";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $username;
                            header("location: welcome.php");
                        } else {
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/login.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../css/form.css" rel="stylesheet">
    <!--Form CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
    <script src="../scripts/login.js"></script>
</head>
<body>
<header>
    <div class="cover"></div>
    <div class="about">
        <h2>Sign in to your Account</h2>
    </div>
    <?php
    if (!empty($login_err)) {
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>
    <form class="box" name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
          onsubmit="return validate()">
        <div class="gt5">
            <label id="email">Email
                <input name="email" placeholder="Email"
                       type="email" <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                value="<?php echo $username; ?>">
            </label>
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
            <label id="password">Password
                <input name="password" placeholder="Password"
                       type="password" <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
            </label>
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <label class="container">
                <!--                <span class="checkmark"></span>-->
                <input type="checkbox">Remember me
            </label>
            <p>Don't have an account?
                <a class="sign" href="register.php">Sign up now</a>
            </p>
            <input class="btn" type="submit" value="Sign in">
        </div>
    </form>
</header>
<footer>
    <div class="row1">
        <div class="col">
            <h4>Explore</h4>
            <a href="../html/invest.html">Why Should You Invest?</a>
            <a href="../html/economy.html">Statistics</a>
            <a href="../html/innovate.html">Innovation</a>
            <a href="../html/startup.html">Startup</a>
        </div>
        <div class="col">
            <h4>Quick Links</h4>
            <a href="../index.html">Home</a>
            <a href="../php/login.php">Investor Zone</a>
            <a href="../html/contact.html">Contact</a>
            <a href="../php/login.php">Sign In</a>
        </div>
        <div class="col">
            <h4>Our Partners</h4>
            <a href="https://investsrilanka.com">BOI</a>
            <a href="https://www.ugc.ac.lk">UGC</a>
            <a href="https://www.portcitycolombo.lk">Port City</a>
            <a href="http://www.statistics.gov.lk">Statistics.lk</a>
        </div>
        <div class="col">
            <h4>Follow</h4>
            <a href="https://www.facebook.com">Facebook</a>
            <a href="https://www.instagram.com">Instagram</a>
            <a href="https://twitter.com">Twitter</a>
            <a href="https://www.linkedin.com">LinkedIn</a>
        </div>
    </div>
    <div class="row2">
        <p>
            Copyright &copy; 2021 All rights reserved.
        </p>
    </div>
</footer>
<div class="navi" id="nav">
    <div class="left">
        <div class="logo-li">
            <a href="../index.html">
                <img alt="" class="logo" src="../media/gov-logo.png">
            </a>
        </div>
        <div class="menu-li">
            <a href="javascript:void(0);" onclick="responsive()">
                <img alt="" class="menu" src="../media/burger.png">
            </a>
        </div>
    </div>
    <div class="right">
        <ul class="nav">
            <li class="nav-li">
                <a href="../html/invest.html">Why Should You Invest?</a>
            </li>
            <li class="nav-li">
                <a href="../php/login.php">Investor Zone</a>
            </li>
            <li class="nav-li">
                <a href="../html/economy.html">Statistics</a>
            </li>
            <li class="nav-li">
                <a href="../html/innovate.html">Innovation</a>
            </li>
            <li class="nav-li">
                <a href="../html/startup.html">Startup</a>
            </li>
            <li class="nav-li">
                <a href="../html/contact.html">Contact</a>
            </li>
        </ul>
    </div>
    <div class="gradient"></div>
</div>
<script src="../scripts/main.js" type="text/javascript">
</script>
<script type="text/javascript">
    window.onscroll = function () {
        hideNav();
    }
</script>
</body>
</html>