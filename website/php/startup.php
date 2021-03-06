<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Start Your Business</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/Start up.css" rel="stylesheet">
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
    let modal = document.getElementById('modal');
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }
</script>
<header>
    <div class="cover"></div>
    <div class="about">
        <h2 class="red-text">Startup</h2>
        <p>
            Sri Lankan government has planned to lend startup funds for school leavers by selecting the best 2000
            business ideas with the support of leading private businesses.
            The main purpose of this project is to create new jobs even if these startups may not become 100% success.
        </p>
        <p>
            Our goal is to lend money for school leavers and guide them with the support of industry
            specialists and to monitor them. We expect this strategy will start more international level businesses.
        </p>
        <p>
            We will also generate more than 100000 new jobs annually in startup hubs in every region.
            School leavers can apply for this opportunity free of charge if they think that their idea would become a
            great success.
        </p>
        <p>
            We were able to start new businesses with the help of this program last year.
            A 3% of new businesses became great success and they were able to create more than 100000 new jobs.
        </p>
    </div>

    <div>
        <h2 class="top3_heading">Monthly Top 3 Entrepreneur</h2>


        <div class="grid-container">
            <div class="grid-item">
                <div class="main_details">
                <span class="fp-events-item__subtitle">
                    Zulfer Hassen,
                    Colombo,
                    Sri Lanka
                </span>
                    <h3 class="fp-events-item__title">
                        PickMe
                    </h3>
                    <span class="date">
                        March 2014
                </span>
                    <p class="more" id="more1">
                    <span>Jiffry Zulfer is the founder of <a href="https://pickme.lk/"
                                                             rel="noopener nofollow noreferrer"
                                                             target="_blank">PickMe</a>,
                        the Sri Lankan version of Uber, and he has worked to understand more about GPS and GIS system, coupled with the knowledge of good business,
                        he and some partners worked together in bringing the concept to live for the locals.<br/><br/>
                        Jiffry and his team worked on the concept, and succeeded in convincing investors, though still something new,
                        but something unique on what Uber didn't already have as at then. And as the team wanted to revolutionize the so-called tuk tuk system in Sri Lanka,
                        the features of PickMe were what interested the people more, and the use of Google Maps and GPS system made tracking easier,
                        also easier to calculate the fare as well.<br/><br/>
                        It is currently a heated competition between "PickMe Vs Uber" which is taking over the taxi industry in Sri Lanka.
                    </span>
                    </p>
                    <button class="btn" onclick="showMore('more1')">Read more</button>
                </div>

                <div class="image1"></div>

            </div>

            <div class="grid-item">
                <div class="main_details">
                <span class="fp-events-item__subtitle">
                    Sheran Corera,
                    No.29,
                    Deal Place,
                    Colombo 03.
                </span>
                    <h3 class="fp-events-item__title">
                        Layup
                    </h3>
                    <span class="date">
                        February 2019
                </span>


                    <p class="more" id="more2">
                    <span>Sheran Corera is the founder of <a href="https://www.getlayup.com/"
                                                             rel="noopener nofollow noreferrer"
                                                             target="_blank">LayUp</a>,
                        which is a new version of e-learning that applies the "Engaged Education Methodology" - an agile 3-step learning methodology.
                        While the cloud computing system also allows anyone with the access to study from anywhere and equally collaborate with others anytime.
                    <br/><br/>
                    Layup as the brainchild of Sheran Corera, won the best startup award of Seedstar Colombo in 2016. And it competed for the Seedstars Summit in Switzerland for $1 million in equity investment in March 2017.
                </span>
                    </p>
                    <button class="btn" onclick="showMore('more2')">Read more</button>
                </div>
                <div class="image2"></div>
            </div>
            <div class="grid-item">
                <div class="main_details">
                <span class="fp-events-item__subtitle">
                    Dhanika Perera,
                    No.46,
                    Galle Road,
                    Kalutara 12000,
                    Sri Lanka
                </span>
                    <h3 class="fp-events-item__title">
                        Payhere
                    </h3>
                    <span class="date">
                    January 2021
                </span>


                    <p class="more" id="more3">
                    <span>Dhanika Perera is the founder of Bhasha and <a href="https://www.payhere.lk/"
                                                                         rel="noopener nofollow noreferrer"
                                                                         target="_blank">Payhere</a>,
                        which is a solution to the problem of Sri Lankans not having a proper online transaction method as PayPal wasn't available in SriLanka.
                        While Bhasha wants to localize all software for Sri Lankans and Payhere as the way to have PayPal function for Sri Lankans.
                        <br/><br/>
                        Dhanika calls it a "comprehensive solution for online payment in Sri Lanka, offering Online Payment Accepting facilities to Sri Lankan Online Merchants"
                        in a more convenient and affordable way. It basically offers a platform for online payment facilities to Sri Lankan merchants,
                        who are allowed a free of charge set up of account on Payhere, unlike the local banks.
                    </span>
                    </p>
                    <button class="btn" onclick="showMore('more3')">Read more</button>
                </div>
                <div class="image3"></div>
            </div>
            <div>
                <p class="frm-text">
                    You can submit a request for this startup program using this form.
                </p>
                <?php
                if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                    echo '<a href="../php/signin.php"><button class="btn">Sign in to Apply</button></a>';
                } else {
                    echo '<button class="btn" onclick="document.getElementById(\'modal\').style.display=\'block\'">Apply Now</button>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="form" id="modal">

        <div class="container">
            <h2>Apply Now!</h2>
            <form enctype="multipart/form-data" onsubmit="return startupapplyVali()" name="startup_apply">
                <div class="formbox">
                    <label>
                        Name
                        <input name="f_name" placeholder="Enter Name" type="text"
                               value="<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                                   $firstname = $_SESSION["firstname"];
                                   $lastname = $_SESSION["lastname"];
                                   echo $firstname . ' ' . $lastname;
                               } ?>"
                        >
                    </label>
                    <label>
                        Email
                        <input placeholder="Enter E-mail" type="email"
                               value="<?php if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                                   $email = $_SESSION["email"];
                                   echo $email;
                               } ?>"
                        >
                    </label>
                    <label>
                        District
                        <select>
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
                        <select>
                            <option hidden>Select Business Sector</option>
                            <option>Agriculture</option>
                            <option>Industries</option>
                            <option>Services</option>
                        </select>
                    </label>
                    <label>Upload Your Proposal </label>
                    <input type="file">
                    <div>
                        <input class="btn" name="apply" type="Submit">
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
                <a href="../php/innovate.php">Innovation</a>
            </li>
            <li class="nav-li">
                <a href="../php/startup.php" class="active">Startup</a>
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

