<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Innovation</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/innovation.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
    <script src="../scripts/main.js" type="text/javascript"></script>
    <script src="../scripts/validate.js"></script>
</head>
<body>
<script type="text/javascript">
    window.onscroll = function () {
        hideNav();
    }
</script>
<header>
    <div class="cover"></div>
    <div class="nav-div-inno">
    </div>
    <div class="about">
        <h2>Innovation</h2>
        <p>This platform will support young innovators in Sri Lanka to find sponsors and investors to discover
            innovation options they can invest.
            These investments will create new businesses as well as new vacancies.</p>
    </div>
    <div class="main-div"></div>
    <div class="div-name">
        <h2>Best Innovations</h2>
        <p>small description</p>
    </div>

    <div class="grid-container">
        <a href="../html/inno1.html">
            <div class="item1">
                <h4>Vega Innovations</h4>
            </div>
        </a>
        <a href="../html/inno2.html">
            <div class="item2">
                <h4>F1 Car</h4>
            </div>
        </a>
        <a href="../html/inno3.html">
            <div class="item3">
                <h4>Genesis Ark 1</h4>
            </div>
        </a>
        <a href="../html/inno4.html">
            <div class="item4">
                <h4>Diyazen</h4>
            </div>
        </a>
        <a href="../html/inno5.html">
            <div class="item5">
                <h4>Respirone Nano AV99</h4>
            </div>
        </a>
        <a href="../html/inno6.html">
            <div class="item6">
                <h4>Low Cost Ventilator</h4>
            </div>
        </a>
        <a href="../html/inno7.html">
            <div class="item7">
                <h4>The "Ariyatne Weeder"</h4>
            </div>
        </a>
        <a href="../html/inno8.html">
            <div class="item8">
                <h4>Hand made (Japan Jabara)</h4>
            </div>
        </a>
        <a href="../html/inno9.html">
            <div class="item9">
                <h4>Remote Controlled Smart Appliance</h4>
            </div>
        </a>
        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo '<a href="../php/signin.php"><div class="item10"><img alt="" src="../media/add-more.png"></div></a>';
        } else {
            echo '<div class="item10" onclick="document.getElementById(\'modal\').style.display=\'block\'">add more<img alt="" src="../media/add-more.png"></div>';
        }
        ?>


    </div>
    <div class="form" id="modal">
        <div class="container">
            <h2>Apply Now!</h2>
            <form enctype="multipart/form-data" onsubmit="return addinno()">
                <div class="formbox">
                    <label>
                        Name
                        <input name="firstname" placeholder="Enter Name" type="text">
                    </label>
                    <label>Upload Your Proposal </label>
                    <input type="file">
                    <div>
                        <input class="btn" name="submit" type="Submit">
                        <input class="btn" type="Reset" value="Reset">
                        <button class="btn" onclick="document.getElementById('modal').style.display='none'"
                                type="button">
                            Cancel
                        </button>
                    </div>
                </div>
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
                <a href="../php/innovate.php" class="active">Innovation</a>
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

