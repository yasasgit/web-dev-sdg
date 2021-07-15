<?php
session_start();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Investor Zone</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/zone.css" rel="stylesheet">
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
        <h2>Investor Zone</h2>
        <p>Usually, it takes four months to approve a foreign Investor over 23 government legal offices. You can use
            this online registration to work that out from less than 2 months. You can submit your project reports even
            being abroad. We would like to benefit our country by acquiring more foreign direct investments. Which will
            set up creating more jobs and bringing our per capita to $12400 by 2030. Discovering a project this simple
            and free is a great opportunity.</p>
        <p>You can invest on all the following schemes using this friendly platform.</p>
        <ul>
            <li>Businesses and Projects you finance by your own.</li>
            <li>Businesses And Project that financed by other parties.</li>
            <li>Innovations invented by young innovators.</li>
            <li>Deceased businesses that need to be recharged.</li>
        </ul><br><br>

        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo '<p>Create a free account to start easy navigating and pick any scheme to invest.</p>
<a href="../php/signin.php"><h2>Sign in to View Dashboard</h2></a>';
        } else {
            require_once "config.php";
            $new_password = $confirm_password = "";
            $new_password_err = $confirm_password_err = "";

            $id = $_SESSION["id"];
            $email = $_SESSION["email"];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['delete'])) {
                    mysqli_query($link, "DELETE FROM investors WHERE email = '$email'");
                    if (!mysqli_query($link, "DELETE FROM users WHERE id = '$id'")) {
                        echo "Oops! Something went wrong. Please try again later." . mysqli_error($link);
                    } else {
                        session_destroy();
                        header("location: signup.php");
                        exit();
                    }
                }
                if (isset($_POST['reset'])) {
                    if ($new_password != $confirm_password) {
                        $confirm_password_err = "Password did not match.";
                    }
                    $new_password = sha1($_POST["new_password"]);
                    if (empty($confirm_password_err)) {
                        if (!mysqli_query($link, "UPDATE users SET password = '$new_password' WHERE id = '$id'")) {
                            echo "Oops! Something went wrong. Please try again later." . mysqli_error($link);
                        } else {
                            session_destroy();
                            header("location: signin.php");
                            exit();
                        }
                    }
                }
                mysqli_close($link);
            }
            echo '
            <!-- for describe about content -->
            <div class="div-for-01-inno">
            
            <a href="../media/sample.pdf"><button class="regbtn">Download Sample</button></a>
            <a href="../php/investreg.php"><button class="regbtn">Register Now</button></a>
            </div>
            <div class="dash">
            <h3>Hi, ' . htmlspecialchars($_SESSION["firstname"]) . ' ' . htmlspecialchars($_SESSION["lastname"]) . '. Welcome to our site.</h3>
            <a><button class="btn" onclick="document.getElementById(\'modalout\').style.display=\'block\'">Sign Out</button></a>
            <a><button class="btn" onclick="document.getElementById(\'modalreset\').style.display=\'block\'">Reset Password</button></a>
            <a><button class="btn red" onclick="document.getElementById(\'modaldelete\').style.display=\'block\'">Delete Account</button></a>
            </div>
            ';
        }
        ?>
    </div>
    <hr>
    <div class="div-for-3main-inno">
        <a href="../php/innovate.php">
            <div class="div-for-02-inno"><h2>Innovation</h2>
                <!-- for ivert Innovation -->
            </div>
        </a>
        <a href="../html/projects.html">
            <div class="div-for-03-inno"><h2>Projects</h2>
                <!-- thian busines walata salli danna -->
            </div>
        </a>
    </div>
</header>
<div class="form" id="modalreset">
    <div class="container">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="return resetpw()">
            <div class="formbox">
                <label>New Password
                    <input type="password" name="new_password"
                           class="form-control">
                </label>
                <span class="invalid-feedback"></span>
                <label>Confirm Password
                    <input type="password" name="confirm_password"
                           class="form-control">
                </label>
                <span class="invalid-feedback"></span>
                <input class="btn" name="reset" type="Submit" value="Reset">
                <button class="btn" onclick="document.getElementById('modalreset').style.display='none'"
                        type="button">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
<div class="form" id="modaldelete">
    <div class="container">
        <h2>Delete Account</h2>
        <p>Are you sure you want to delete your account?</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
              onsubmit="return deleteacc()">
            <div class="formbox">
                <input class="btn red" name="delete" value="Delete" type="Submit">
                <button class="btn" onclick="document.getElementById('modaldelete').style.display='none'"
                        type="button">
                    Cancel
                </button>
            </div>
        </form>
    </div>
</div>
<div class="form" id="modalout">
    <div class="container">
        <h2>Sign Out</h2>
        <p>Are you sure you want to sign out?</p>
        <form action="logout.php" method="post">
            <div class="formbox">
                <input class="btn" name="sign_out" value="Yes" type="Submit">
                <button class="btn" onclick="document.getElementById('modalout').style.display='none'"
                        type="button">
                    No
                </button>
            </div>
        </form>
    </div>
</div>
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
            <a href="signin.php">Sign In</a>
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
                <a href="zone.php" class="active">Investor Zone</a>
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
