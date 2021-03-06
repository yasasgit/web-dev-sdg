<?php
session_start();

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Statistics</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS --><!--Form CSS -->
    <link href="../css/sector.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
    <script src="../scripts/main.js" type="text/javascript"></script>
    <script src="../scripts/validate.js" type="text/javascript"></script>
</head>
<body>
<header>
    <div class="cover"></div>
    <!--    <div class="about">-->
    <!--        <h2>Statistics</h2>-->
    <!--    </div>-->
    <div class="tab">
        <?php
        if (isset($_GET['academic'])) {
            require_once "config.php";
            echo '
            <button class="tabbtn" onclick="openTab(event, \'econ\')">
            Economy
            </button>
            <button class="tabbtn" id="defaultOpen" onclick="openTab(event, \'edu\')">
            Academic
            </button>
        ';
        } else {
            echo '
            <button class="tabbtn" id="defaultOpen" onclick="openTab(event, \'econ\')">
            Economy
            </button>
            <button class="tabbtn" onclick="openTab(event, \'edu\')">
            Academic
            </button>
        ';
        }
        ?>
        <button class="tabbtn" onclick="openTab(event, 'other')">
            Other
        </button>
    </div>
    <div class="content" id="econ">
        <div class="about">
            <h2>Economy</h2>
            <p>Latest statistical data about the fields Agriculture, Industries, and Services were collected in 2020.
                You can get data from last 6 years. Go to 'Other' section for full report.
            </p>
            <h4>Expand for more.</h4>
        </div>
        <button class="accordion" onclick="openAcc('p1')">Agriculture</button>
        <div class="panel" id="p1">
            <div class="main-stat">
                <div class="left-stat">
                    <p> The several main agricultural activities reported heavy contractions. 'Growing of Tea'
                        (27.5 percent),
                        'Forestry and Logging' (13.3 percent), 'Growing of Oleaginous fruits; including Coconut'
                        (12.8 percent),
                        'Growing of Rubber' (8.7 percent), and 'Marine Fishing and marine aquaculture' (8.1
                        percent) have been
                        contracted in the first quarter of 2020 when compared to the first quarter of 2019. The
                        contractions of
                        'Growing of Tea', 'Growing of rubber' and 'Marine Fishing and marine aquaculture' are
                        largely attributed
                        to direct or indirect "Covid 19" effects whilst the contractions of other agricultural
                        activities are attributed
                        to reasons subjective to each activity. 'Growing of fruits' 'Growing of vegetables',
                        Growing of rice' and
                        'Animal production', have reported expansions of 7.4 percent, 5.0 percent, 4.1 percent,
                        0.4 percent
                        respectively in the first quarter of 2020.</p>
                </div>
                <div class="right-stat">
                    <h3> National Income by Agriculture 687,857(Rs. million) </h3>
                    <h3>employment by percentage 31.2% </h3>
                    <h3> Exports 462.89 (Rs. million)</h3>
                    <!-- for sum -->
                    <button class="btn" onclick="location.href='../media/agriculture.png';">More Data</button>
                </div>
            </div>
        </div>

        <button class="accordion" onclick="openAcc('p2')">Industries</button>
        <div class="panel" id="p2">
            <div class="main-stat">
                <div class="left-stat">
                    <p> The global Covid-19 pandemic has badly affected the overall industry activities in the
                        first quarter of 2020
                        reporting a contraction by 7.8 percent. The 'Construction' sector has contracted by 16
                        percent. This is
                        supported by the significant drop in local cement production and in cement imports. The
                        industry activities,
                        shrank by 'Construction' (16.0 percent), 'Mining and quarrying'(18.3 percent),
                        'Manufacture of textiles,
                        wearing apparel and leather related products'(13.6 percent), 'Manufacture of coke and
                        refined petroleum
                        products'(19.2 percent), 'Manufacture of rubber and plastic products'(11.6 percent),
                        'Manufacture of
                        chemicals and basic pharmaceuticals'(10.1percent) and 'Manufacture of furniture'(6.7
                        percent).
                        The downfall of export demand of European markets, especially including the United
                        States, has had a
                        considerable impact on the garment-related industries. At the same time, the decrease in
                        imported raw
                        materials also had a negative impact on many industries. When comparing the two
                        respective quarters of
                        2020 and 2019, several activities recorded considerable expansions, 'Electricity, gas,
                        steam and air
                        conditioning supply' by 2.3 percent, 'Water collection and treatment' by 5.0 percent and
                        'Sewerage and
                        waste treatment' by1.8 percent </p>
                </div>
                <div class="right-stat">
                    <h3> National Income by Industries 2,608,211(Rs. million) </h3>
                    <h3> employment by percentage 25.9% </h3>
                    <h3> Exports 862.89 (Rs. million)</h3>
                    <button class="btn" onclick="location.href='../media/industries.png';">More Data</button>
                    <!-- for sum -->
                </div>
                <!--dont use center tag. use css-->
            </div>
        </div>

        <button class="accordion" onclick="openAcc('p3')">Services</button>
        <div class="panel" id="p3">
            <div class="main-stat">
                <div class="left-stat">
                    <p> During the first quarter of 2020, overall Services activities have further expanded by
                        3.1 percent. An
                        outstanding performance was reported by 'Telecommunication' showing an expansion of 15.2
                        percent
                        within this quarter. The other major activities underpinned the Service sector in the
                        first quarter of 2020 are
                        'IT programming consultancy and related activities'(9.6 percent), 'Financial service
                        activities'(9.0 percent),
                        'Real Estate activities including ownership of dwelling'(4.2 percent) and 'Wholesale and
                        retail trade'(4.1
                        percent) compared to the first quarter 2019. The heavy contraction of 6.2 percent is
                        recorded for
                        'Accommodation, food and beverages service activity. This is mainly due to travel
                        restrictions and travel
                        bans on 'Tourism industry' from the beginning of the quarter. The total close down of
                        the country for nearly
                        two weeks had an adverse effect on accommodation and food and beverages services
                        activities.
                        'Transportation of goods and passengers including ware housing' which give contribution
                        of 10.1 percent
                        to the total GDP, also reported a contraction in this quarter. The growth rate recorded
                        as negative 0.1percent
                        in this quarter compared to the first quarter of 2019 which was recorded as 2.7 percent.
                        The major portion
                        of transportation service covered by land transportation came to an almost standstill at
                        the lock down period.
                        The Air transport and water transport also affected from the beginning of the quarter
                        due to global Covid19 situation. </p>
                </div>
                <div class="right-stat">

                    <h3> National Income by Services 5,680,757(Rs. million) </h3>
                    <h3>employment by percentage 42.9% </h3>
                    <h3> Exports 162.89 (Rs. million)</h3>

                    <button class="btn" onclick="location.href='../media/services.png';">More Data</button>
                    <!-- for sum -->
                </div>
            </div>
        </div>
    </div>

    <div class="content" id="edu">
        <div class="about">
            <h2>Academic</h2>
            <p>Our government will provide you real-time data about undergraduates in each district in Sri Lanka.
                This will improve new job creation for undergraduates even outside Colombo district.</p>
            <div class="get-data">
                <form class="box" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get"
                      name="get_info"
                      onsubmit="return getinfoVali();">
                    <label>District
                        <select name="district">
                            <option value="0" hidden>Select District</option>
                            <option <?php if (isset($district)) {
                                echo 'selected';
                            } ?>>Colombo
                            </option>
                            <option>Gampaha</option>
                            <option>Kalutara</option>
                            <option>Kandy</option>
                            <option>Matale</option>
                            <option>Nuwara Eliya</option>
                            <option>Galle</option>
                            <option>Matara</option>
                            <option>Hambantota</option>
                            <option>Jaffna</option>
                            <option>Kilinochchi</option>
                            <option>Mannar</option>
                            <option>Mullaitivu</option>
                            <option>Vavuniya</option>
                            <option>Batticaloa</option>
                            <option>Ampara</option>
                            <option>Trincomalee</option>
                            <option>Kurunegala</option>
                            <option>Puttalam</option>
                            <option>Anuradhapura</option>
                            <option>Polonnaruwa</option>
                            <option>Badulla</option>
                            <option>Moneragala</option>
                            <option>Ratnapura</option>
                            <option>Kegalle</option>
                        </select>
                    </label>
                    <label> Academic Stream
                        <select name="stream">
                            <option value="0" hidden>Select Academic Stream</option>
                            <option>Arts</option>
                            <option value="ManagementAndCommerce">Management and Commerce</option>
                            <option>Law</option>
                            <option>Science</option>
                            <option>Medicine</option>
                            <option value="VeterinaryScience">Veterinary Science</option>
                            <option>Dentistry</option>
                            <option>Agriculture</option>
                            <option>Engineering</option>
                            <option>Architecture</option>
                            <option value="ComputerScience">Computer Science</option>
                            <option value="OtherCourses">Other Courses</option>
                        </select>
                    </label>
                    <input class="btn" name="academic" type="Submit">
                </form>
            </div>
        </div>
    </div>

    <div class="content" id="other">
        <div class="about">
            <h2>Other Statistics</h2>
            <p>This data will show you why an investor should prefer Sri Lanka for their investments.
                Provides statistical time series on social economic and financial variables including provincially
                disaggregated data, where available. Released annually</p>
            <button class="btn" onclick="location.href='../media/statistics.pdf';">Full Report</button>
        </div>
    </div>
    <?php
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        echo 'logged out';
    } else {
        echo 'logged in';
    }
    if ((isset($_GET['academic'])) && !(($_GET['stream'] === '0') && !($_GET['district'] === '0'))) {
        $district = $_GET["district"];
        $stream = $_GET["stream"];
        $result = mysqli_query($link, "SELECT $stream FROM academy_stats WHERE district='$district';");
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="form" id="modalcount" style="display: block">
                <div class="container">
                    <h2>There are ' . $row[$stream] . ' ' . $stream . ' students in ' . $district . '</h2>
                    <p>is the count.</p>
                    <div class="formbox">
                    <button class="btn" onclick="document.getElementById(\'modalcount\').style.display=\'none\'"
                        type="button">
                    Cancel
                    </button>
                     </div>
                </div>
            </div>
            ';
        }
        mysqli_close($link);
    }
    ?>
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
                <a href="../php/stats.php" class="active">Statistics</a>
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
<script type="text/javascript">
    document.getElementById("defaultOpen").click();
    window.onscroll = function () {
        hideNav();
    }
</script>
</body>
</html>

