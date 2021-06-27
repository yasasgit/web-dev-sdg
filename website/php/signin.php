<?php
session_start();
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: zone.php");
    exit;
} else {
    $email = $password = "";
    $login_err = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "config.php";
        $email = trim($_POST["email"]);
        $password = sha1($_POST["password"]);
        if ($stmt = mysqli_prepare($link, "SELECT id, email, firstname, lastname, password FROM users WHERE email = ?")) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);
            $param_email = $email;
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $email, $firstname, $lastname, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if ($password === $hashed_password) {
                            session_start();
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;
                            $_SESSION["firstname"] = $firstname;
                            $_SESSION["lastname"] = $lastname;
                            header("location: zone.php");
                        } else {
                            $login_err = "Invalid Email or Password.";
                        }
                    }
                } else {
                    $login_err = "Invalid Email or Password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }
}

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sign In</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/login.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../css/form.css" rel="stylesheet">
    <!--Form CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
    <script src="../scripts/main.js" type="text/javascript"></script>
    <script src="../scripts/validate.js" type="text/javascript"></script>
</head>
<body>
<script type="text/javascript">
    window.onscroll = function () {
        hideNav();
    }
</script>
<header>
    <div class="cover"></div>
    <div class="about">
        <h2>Sign in to your Account</h2>
    </div>
    <?php
    if (!empty($login_err)) {
        echo '<div class="frm-text">' . $login_err . '</div>';
    }
    ?>
    <form class="box" name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
          onsubmit="return signin();">
        <div class="formbox">
            <label id="email">Email
                <input name="email" placeholder="Enter your Email" type="email"
                <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"
                value="
                <?php echo $email; ?>">
            </label>
            <label id="password">Password
                <input name="password" placeholder="Enter your Password"
                       type="password"
                <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                >
            </label>
            <label class="contain">
                <!--                <span class="checkmark"></span>-->
                <input type="checkbox">Remember me
            </label>
            <p>Don't have an account?
                <a class="sign" href="signup.php">Sign up now</a>
            </p>
            <input class="btn" type="submit" name="sign_in" value="Sign in">
        </div>
    </form>
</header>
<footer>
    <div class="row1">
        <div class="col">
            <h4>Explore</h4>
            <a href="../php/whyinvest.php">Why Should You Invest?</a>
            <a href="../php/stats.php">Statistics</a>
            <a href="../php/innovate.php">Innovation</a>
            <a href="../php/startup.php">Startup</a>
        </div>
        <div class="col">
            <h4>Quick Links</h4>
            <a href="../index.html">Home</a>
            <a href="zone.php">Investor Zone</a>
            <a href="../html/contact.html">Contact</a>
            <a href="../php/signin.php">Sign In</a>
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
                <a href="../php/whyinvest.php">Why Should You Invest?</a>
            </li>
            <li class="nav-li">
                <a href="zone.php">Investor Zone</a>
            </li>
            <li class="nav-li">
                <a href="../php/stats.php">Statistics</a>
            </li>
            <li class="nav-li">
                <a href="../php/innovate.php">Innovation</a>
            </li>
            <li class="nav-li">
                <a href="../php/startup.php">Startup</a>
            </li>
            <li class="nav-li">
                <a href="../html/contact.html">Contact</a>
            </li>
        </ul>
    </div>
    <div class="gradient"></div>
</div>
</body>
</html>