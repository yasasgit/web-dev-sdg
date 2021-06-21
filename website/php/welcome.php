<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Investor Zone</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/zone.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
</head>
<body>
<header>
    <div class="cover"></div>
    <div class="about">
        <h2>Investor Zone</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate delectus
            enim illo inventore libero, officia porro quam veniam vitae!
            Amet aspernatur at commodi ducimus expedita fugit, natus quasi? Aut. Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.
            Architecto, debitis ducimus minima numquam omnis quibusdam sequi voluptas voluptatibus.
            Amet beatae dolor earum iusto labore minima nulla odit officiis quia quibusdam.</p>
        <ul>methanin awal tikk dapan
            <li>cepa hambawenawa</li>
            <li>chill</li>
        </ul>
        <!-- for describe about content -->
        <a href="../html/form.html">
            <div class="div-for-01-inno">
                <!-- for invester register -->
                <h3>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h3>
                <p>podi wisthrayak + terms & conditions</p>
                <p>
                    <a href="reset-password.php">Reset Your Password</a>
                    <a href="logout.php">Sign Out of Your Account</a>
                    <a href="delete-account.php">Delete Your Account</a>
                </p>
            </div>
        </a>
    </div>
    <hr>
    <div class="div-for-3main-inno">
        <a href="innovate.html">
            <div class="div-for-02-inno"><h2>Innovation</h2>
                <!-- for ivert Innovation -->
            </div>
        </a>
        <a href="projects.html">
            <div class="div-for-03-inno"><h2>Projects</h2>
                <!-- thian busines walata salli danna -->
            </div>
        </a>
    </div>
</header>
<footer>
    <div class="row1">
        <div class="col">
            <h4>Explore</h4>
            <a href="./invest.html">Why Should You Invest?</a>
            <a href="./economy.html">Statistics</a>
            <a href="./innovate.html">Innovation</a>
            <a href="./startup.html">Startup</a>
        </div>
        <div class="col">
            <h4>Quick Links</h4>
            <a href="../index.html">Home</a>
            <a href="../php/login.php">Investor Zone</a>
            <a href="./contact.html">Contact</a>
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
