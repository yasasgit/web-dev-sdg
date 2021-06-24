<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: signin.php");
    exit;
} else {
    $email = $_SESSION["email"];
    $firstname = $_SESSION["firstname"];
    $lastname = $_SESSION["lastname"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once "config.php";
        $email = $_POST["email"];
        $address1 = trim($_POST['address1']);
        $address2 = trim($_POST['address2']);
        $company_name = trim($_POST["company_name"]);
        $investment_type = $_POST['investment_type'];
        $investment_stage = $_POST['investment_stage'];
        $invest_amount = $_POST['invest_amount'];

        $file_path = '../media/proposals/' . $firstname . $lastname;
        $path = move_uploaded_file($_FILES['proposal']['tmp_name'], $file_path);

        $sql = "INSERT INTO investors (email, address1, address2, company_name, investment_type, investment_stage, invest_amount, file_path) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($link, $sql)) {
            mysqli_stmt_bind_param($stmt, "ssssssss", $param_email, $param_address1, $param_address2, $param_company_name, $param_investment_type, $param_investment_stage, $param_invest_amount, $param_file_path);
            $param_email = $email;
            $param_address1 = $address1;
            $param_address2 = $address2;
            $param_company_name = $company_name;
            $param_investment_type = $investment_type;
            $param_investment_stage = $investment_stage;
            $param_invest_amount = $invest_amount;
            $param_file_path = $file_path;
            if (mysqli_stmt_execute($stmt)) {
                header("location: zone.php");
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
    <form class="box" enctype="multipart/form-data" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
          method="post" name="investreg"
          onsubmit="return checkForm()">
        <div class="formbox">
            <div>
                <label>First Name
                    <input class="section" name="firstname" type="text" disabled
                           value="<?php if (isset($firstname)) {
                               echo $firstname;
                           } ?>">
                </label>
            </div>
            <div>
                <label>Last Name
                    <input class="section" name="lastname" type="text" disabled
                           value="<?php if (isset($lastname)) {
                               echo $lastname;
                           } ?>">
                </label>
            </div>
            <div>
                <label>Address Line #1
                    <input class="section wide" name="address1" type="text" placeholder="Enter address">
                </label>
            </div>
            <div>
                <label>Address Line #2
                    <input class="section wide" name="address2" type="text" placeholder="Enter address">
                </label>
            </div>
            <div>
                <label>Company Name
                    <input class="section" name="company_name" type="text" placeholder="Enter Company Name">
                </label>
            </div>
            <div>
                <label>E-mail
                    <input class="section wide" name="email" placeholder="Enter E-mail" disabled
                           type="email" value="<?php if (isset($email)) {
                        echo $email;
                    } ?>">
                    <span class="frm-text"></span>
                </label>
            </div>
            <div>
                <label>Investment Type
                    <select name="investment_type">
                        <option value="" hidden>Select Investment Type</option>
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
                <label>
                    <input name="investment_stage" type="radio" value="a">Angle
                </label>
                <label>
                    <input name="investment_stage" type="radio" value="b">Speed/Startup
                </label>
                <label>
                    <input name="investment_stage" type="radio" value="c">Series A
                </label>
                <label>
                    <input name="investment_stage" type="radio" value="d">Series B
                </label>
                <label>
                    <input name="investment_stage" type="radio" value="e">Late Stage
                </label>
            </div>

            <div>
                <p>Investment amount</p>
                <label>
                    <input name="invest_amount" type="radio" value="a">Upto USD 250 K
                </label>
                <label>
                    <input name="invest_amount" type="radio" value="b">USD 250K - USD 500K
                </label>
                <label>
                    <input name="invest_amount" type="radio" value="c">USD 500K - USD 1M
                </label>
                <label>
                    <input name="invest_amount" type="radio" value="d">USD 1M - USD 5M
                </label>
                <label>
                    <input name="invest_amount" type="radio" value="e">From USD5M
                </label>
            </div>
            <div>
                <label>Upload Your Proposal</label>
                <input type="file" name="proposal" size="">
            </div>
            <div>
                <input class="btn" type="submit" value="Submit">
                <input class="btn" name="reset" type="reset">
            </div>
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
<script src="../scripts/main.js" type="text/javascript">
</script>
<script type="text/javascript">
    window.onscroll = function () {
        hideNav();
    }
</script>
</body>
