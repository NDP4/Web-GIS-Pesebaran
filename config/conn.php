<?php
$conn = mysqli_connect("db", "root", "p4rv1zk44n", "uas_gis");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
