<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: signin.php");
    exit;
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Investor Registration</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/invest-reg.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../css/form.css" rel="stylesheet">
    <!--Form CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
</head>
<body>
<header>
    <div class="cover"></div>
    <div class="about">
        <h2>Registration Form</h2>
    </div>
    <form>
        <div class="gt5">
            <div>
                <label>First Name
                    <input class="section" name="First Name" type="text">
                </label>
            </div>

            <div>
                <label>Last Name
                    <input class="section" name="Last Name" type="text">
                </label>
            </div>

            <div>
                <label>Address
                    <input class="section wide" name="Address" type="text">
                </label>
            </div>

            <div>
                <label>Company Name
                    <input class="section" name="Company Name" type="text">
                </label>
            </div>

            <div>
                <label>Email
                    <input class="section wide" name="Email" type="text">
                </label>
            </div>
            <div>
                <label>Type of investor
                    <select name="industry level">
                        <option value="">Angle</option>
                        <option value="">Family Office</option>
                        <option value="">Corporate</option>
                        <option value="">Corporate Venture Capital</option>
                        <option value="">Venture Capital Firm</option>
                        <option value="">Private Equity Firm</option>
                    </select>
                </label>
            </div>
            <div>
                <p>Investment Stage</p>
                <label>Angle<input name="Investor" type="radio"></label>
                <label>Speed/Startup<input name="Investor" type="radio"></label>
                <label>Series A<input name="Investor" type="radio"></label>
                <label>Series B<input name="Investor" type="radio"></label>
                <label>Late Stage<input name="Investor" type="radio"></label>
            </div>

            <div>
                <p>Investment amount</p>
                <label>USD250K<input name="Investor" type="radio"></label>
                <label>USD250K-USD500K<input name="Investor" type="radio"></label>
                <label>USD500K-USD1M<input name="Investor" type="radio"></label>
                <label>USD1M-USD5M<input name="Investor" type="radio"></label>
                <label>UPtoUSD5M<input name="Investor" type="radio"></label>
            </div>
            <div>
                <label>Upload Your Proposal</label>
                <input type="file">
            </div>
            <div>
                <input class="btn" type="submit" value="Submit">
            </div>
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
                <a href="../html/invest.html">Why Should You Invest?</a>
            </li>
            <li class="nav-li">
                <a href="../php/zone.php">Investor Zone</a>
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