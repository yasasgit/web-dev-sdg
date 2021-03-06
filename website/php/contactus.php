<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = trim($_POST["email"]);
    $phone = trim($_POST['phone']);
    $message = $_POST['message'];
    $to = "ourmail@outlook.com";
    $text = 'Phone:' . $phone . 'Message:' . $message;
    $headers = "From:" . $email;
    mail($to, $fullname, $text, $headers);
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Your Opinions</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/contact1.css" rel="stylesheet">
    <!--Page CSS -->
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
        <h2>Contact Us</h2><br/>
        <h4>We'd love to hear from you!</h4>
    </div>
    <div class="row">
        <div class="input-container">
            <form name="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                  onsubmit="return contactVali();"
                  method="post">
                <div class="styled-input wide">
                    <input aria-label="Name" placeholder="Name" type="text" name="fullname"
                           value="<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                               $firstname = $_SESSION["firstname"];
                               $lastname = $_SESSION["lastname"];
                               echo $firstname . ' ' . $lastname;
                           } ?>"
                    />
                </div>
                <div class="styled-input">
                    <input aria-label="Email" placeholder="Email" type="text" name="email"
                           value="<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                               $email = $_SESSION["email"];
                               echo $email;
                           } ?>"
                    />
                </div>
                <div class="styled-input">
                    <input aria-label="Phone Number" placeholder="Phone Number" type="text" name="phone"/>
                </div>
                <div class="styled-input wide">
                    <textarea aria-label="Message" placeholder="Message" name="message"></textarea>
                </div>
                <a href="">
                    <button class="btn-lrg submit-btn" type="Submit" name=send">
                        Send Message
                    </button>
                </a>
            </form>
        </div>
    </div>
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
            <a href="../php/zone.php">Investor Zone</a>
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
                <a href="../php/zone.php">Investor Zone</a>
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