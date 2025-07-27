<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $con = mysqli_connect("localhost", "root", "", "wedkarstwo");
        $lowisko = $_POST['lowisko'];
        $date = $_POST['data'];
        $sedzia = $_POST['sedzie'];
        $sql = "INSERT INTO `zawody_wedkarskie` VALUES (NULL, '0', '$lowisko', '$data', '$judge');";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
    header("Location: zawody.html");
?>