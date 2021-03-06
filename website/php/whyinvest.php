<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Why Should You Invest?</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <!--Framework -->
    <link href="../css/master.css" rel="stylesheet">
    <!--Nav and Footer CSS -->
    <link href="../css/invest.css" rel="stylesheet">
    <!--Page CSS -->
    <link href="../media/gov-logo-ico.png" rel="icon">
    <script src="../scripts/main.js" type="text/javascript">
    </script>
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
        <h2>INVESTMENT PROMOTION</h2>
        <p>
            Strategically located on the major shipping routes of South Asia and the Far East, the island of
            Sri Lanka
            is emerging as one of the most attractive best investment locations in the South Asian Region. Sri Lanka has
            positioned itself as the “Services and Trading hub” of the vast Indian subcontinent.
        </p>
        <p>
            Today, Sri Lanka is ranked as the most liberalized economy in South Asia. Investors are provided
            with
            preferential tax rates, constitutional guarantees on investment agreements, exemptions from exchange control
            and 100% repatriation of profits. The safety of the foreign investment is guaranteed by the Constitution. An
            advance legal and regulatory framework exists, covering, for instance, intellectual property, settlement of
            disputes through arbitration, company law etc. Equal treatment is assured for foreign and local investors
            under the investment and general law of the country. The economy has been benefited by policies that give
            freedom to the private sector,
            with low barriers to trade and investment. External trading relations have been strengthened with the
            expansion in bilateral,
            regional and multilateral trading arrangements.The Sri Lankan work force accounts for 35% of the total
            population. Sri Lanka boasts high levels of
            education and the highest literacy rate in South Asia (92%). Approximately 50% of the students who have
            completed their higher education are trained in technical and business disciplines. English is widely spoken
            in the country and is the main language used by the business community.<br>
        </p>
        <p>
            Foreign Direct Investment (FDI) has been used by developing countries as a tool to solve their
            economic
            problems in the recent past. Sri Lanka is also not an exception to this practice.
            This research is aimed at tracing the impact of FDI in promoting economic growth by using the time series
            annual data from 1978 - 2012 in Sri Lanka. Multiple regression models were used to estimate the impact of
            FDI on economic growth.
            The Minitab, SAS, Excel and E-views software were used for data analysis.The empirical evidence shows that
            FDI positively and statistically influences to determine economic growth
            in Sri Lanka. However, this study further reveals that the actual impact of FDI can be felt after time lag
            of two years.
        </p>
    </div>

    <div class="div-goals-invest">
        <h3>GOALS</h3>
        <ul class="unordered">
            <li class="goals-details">Generate 200,000 new jobs per annum by 2025.</li>
            <li class="goals-details">Ensure USD 7 billion local investments per annum by 2025.</li>
            <li class="goals-details">Ensure USD 7 billion Foreign Direct Investments per annum by 2025.</li>
            <li class="goals-details">Improve Sri Lanka's rank in Ease of Doing Business Index from 100 to 50 by 2022.
            </li>
            <li class="goals-details">Improve Sri Lanka's rank in Global Competitiveness Index from 85 to 45 by 2022.
            </li>
        </ul>

        <h3>ACTION PLAN</h3>
        <ol class="ordered">
            <li class="ACTION-list">Simplify the rules and regulations of the investment approval process to overcome
                red
                tape.
            </li>
            <li class="ACTION-list">0% corporate tax, 0% VAT and 0% dividend tax for 25 years for the following sectors;
                <ol class="action" type="a">
                    <li class="action-li">Education</li>
                    <li class="action-li">Information service activities</li>
                    <li class="action-li">Human health activities</li>
                    <li class="action-li">Air transport.</li>
                    <li class="action-li">Manufacture of motor vehicles, trailers and semi-trailers</li>
                    <li class="action-li">Waste collection, treatment and disposal activities; materials recovery.</li>
                    <li class="action-li">Water collection, treatment and supply.</li>
                    <li class="action-li">Sewerage.</li>
                    <li class="action-li">Manufacture of other transport equipment.</li>
                    <li class="action-li">Fishing and aquaculture</li>
                    <li class="action-li">Remediation activities and other waste management services.</li>
                </ol>
            </li>
            <li class="ACTION-list">Facilitate an IT park and an industrial park in all 25 districts for local and
                foreign
                Investors to fast-track their investments
            </li>
            <li class="ACTION-list">Introduce a Nation Branding Strategy for Sri Lanka.</li>
            <li class="ACTION-list">Create and Showcase a business-friendly environment, through fully-fledged product
                and
                investment offerings
            </li>
            <li class="ACTION-list">Monitor district-wise job generation monthly. Necessary actions to be taken by the
                Cabinet where jobs are lacking.
            </li>
            <li class="ACTION-list">Reduce the current rate of corporate tax to 12% for new ventures not mentioned in
                point
                2 and provide a guarantee for the reduced rate for the next 25 years for all sectors (in the Western
                Province) and for the other eight other provinces to be granted a discount of 80%, thereby charging an
                effective rate of 2.4% (which will help in additional rural district-wise job generation)
            </li>
            <li class="ACTION-list">Foster a flexible and globally employable workforce
                <ol class="action" type="a">
                    <li>Identify the top 50 globally demanded jobs for the year.</li>
                    <li>Improve productivity and skill development at vocational training institutes, benchmarking the
                        best
                        practices at vocational training institutes in Singapore, Thailand, Australia and Malaysia
                    </li>
                    <li>Establish career-developing institutes and training centres to match the global workforce demand
                    </li>
                </ol>
            </li>
        </ol>
    </div>
    <div class="register">
        <?php
        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo '<a href="../php/signin.php"><button class="regbtn">Sign in to Register</button></a>';
        } else {
            echo '<a href="../php/investreg.php"><button class="regbtn">Register Now</button></a>';
        }
        ?>
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
                <a href="../php/whyinvest.php" class="active">Why Should You Invest?</a>
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

