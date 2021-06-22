<?php
session_start();

require_once "config.php";
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["new_password"]))) {
        $new_password_err = "Please enter the new password.";
    } elseif (strlen(trim($_POST["new_password"])) < 6) {
        $new_password_err = "Password must have at least 6 characters.";
    } else {
        $new_password = trim($_POST["new_password"]);
    }
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm the password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($new_password_err) && ($new_password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty($new_password_err) && empty($confirm_password_err)) {

        if (isset($_POST['delete'])) {
            $sql = "DELETE FROM users WHERE id = ? ";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "i", $param_id);
                $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                $param_id = $_SESSION["id"];
                if (mysqli_stmt_execute($stmt)) {
                    session_destroy();
                    header("location: signin.php");
                    exit();
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

        if (isset($_POST['reset'])) {
            $sql = "UPDATE users SET password = ? WHERE id = ?";
            if ($stmt = mysqli_prepare($link, $sql)) {
                mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
                $param_password = password_hash($new_password, PASSWORD_DEFAULT);
                $param_id = $_SESSION["id"];
                if (mysqli_stmt_execute($stmt)) {
                    session_destroy();
                    header("location: signin.php");
                    exit();
                } else {
                    echo "Oops! Something went wrong. Please try again later.";
                }
                mysqli_stmt_close($stmt);
            }
        }

    }
    mysqli_close($link);
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
        <div class="div-for-01-inno">
            <h3>meheme topic eka</h3>
            <p>podi wisthrayak + terms & conditions</p>
        </div>
        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo '<a href="../php/signin.php"><h2>sign in to view dashboard</h2></a>';
        } else {
            echo '
                <a href="investreg.php"><div class="dash">
                <h3>Hi, <b>' . htmlspecialchars($_SESSION["email"]) . '</b>. Welcome to our site.</h3>
                <a href="../media/sample.pdf"><button class="btn">Download Proposal Sample</button></a>
                <a href="logout.php"><button class="btn">Sign Out</button></a>
                <a><button class="btn" onclick="document.getElementById(\'modalreset\').style.display=\'block\'">Reset Password</button></a>
                <a><button class="btn" onclick="document.getElementById(\'modaldelete\').style.display=\'block\'">Delete Account</button></a>
                </div></a>
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
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="formbox">
                <label>New Password
                    <input type="password" name="new_password"
                           class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $new_password; ?>">
                </label>
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                <label>Confirm Password
                    <input type="password" name="confirm_password"
                           class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                </label>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
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
        <p>Please fill out this form to delete your account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="formbox">
                <label>Password
                    <input type="password" name="new_password"
                           class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>"
                           value="<?php echo $new_password; ?>">
                </label>
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
                <label>Confirm Password
                    <input type="password" name="confirm_password"
                           class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>">
                </label>
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                <input class="btn" name="delete" value="Delete" type="Submit">
                <button class="btn" onclick="document.getElementById('modaldelete').style.display='none'"
                        type="button">
                    Cancel
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
<script src="../scripts/main.js" type="text/javascript">
</script>
<script type="text/javascript">
    window.onscroll = function () {
        hideNav();
    }
</script>
</body>
</html>
