<?php

$link = mysqli_connect("localhost", "root", "", "invest_db");

if ($link === false) {
    die("ERROR: Could not connect. Try running SQL" . mysqli_connect_error());
}