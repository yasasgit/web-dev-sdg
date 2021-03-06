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
        <!-- <p>small description</p> -->
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
            echo '<a href="../php/signin.php">
                    <div class="item10">
                    <h4>Add Your Innovation</h4>
                    </div>
                    </a>';
        } else {
            echo '<a onclick="document.getElementById(\'modal\').style.display=\'block\'">
                    <div class="item10">
                    <h4>Add Your Innovation</h4>
                    </div>
                    </a>';
        }
        ?>


    </div>
    <div class="form" id="modal">
        <div class="container">
            <h2>Add your innovation</h2>
            <form enctype="multipart/form-data" onsubmit="return addinnoVali()" name="addinnovation">
                <div class="formbox">
                    <label>
                        First Name
                        <input name="firstname" placeholder="Enter First Name" type="text">
                    </label>
                    <label>
                        Last Name
                        <input name="lastname" placeholder="Enter Last Name" type="text">
                    </label>
                    <label>
                        Email
                        <input name="email" placeholder="Enter E-mail" type="email">
                    </label>
                    <label>
                        District
                        <select name="district">
                            <option hidden>Select District</option>
                            <option>Ampara</option>
                            <option>Anuradhapura</option>
                            <option>Badulla</option>
                            <option>Batticaloa</option>
                            <option>Colombo</option>
                            <option>Galle</option>
                            <option>Gampaha</option>
                            <option>Hambantota</option>
                            <option>Jaffna</option>
                            <option>Kalutara</option>
                            <option>Kandy</option>
                            <option>Kegalle</option>
                            <option>Kilinochchi</option>
                            <option>Kurunegala</option>
                            <option>Mannar</option>
                            <option>Matale</option>
                            <option>Matara</option>
                            <option>Monaragala</option>
                            <option>Mullaitivu</option>
                            <option>Nuwara Eliya</option>
                            <option>Polonnaruwa</option>
                            <option>Puttalam</option>
                            <option>Ratnapura</option>
                            <option>Trincomalee</option>
                            <option>Vavuniya</option>
                        </select>
                    </label>
                    <label>
                        Business Sector
                        <select name="business_sector">
                            <option hidden>Select Business Sector</option>
                            <option>Agriculture</option>
                            <option>Industries</option>
                            <option>Services</option>
                        </select>
                    </label>
                    <div>
                        <p>Investment amount</p>
                        <label>
                            <input name="invest_amount" type="radio" value="a">Upto USD 1M
                        </label>
                        <label>
                            <input name="invest_amount" type="radio" value="b">USD 1M - USD 10M
                        </label>
                        <label>
                            <input name="invest_amount" type="radio" value="c">USD 10M - USD 100M
                        </label>
                        <label>
                            <input name="invest_amount" type="radio" value="e">From USD100M
                        </label>
                    </div>
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

