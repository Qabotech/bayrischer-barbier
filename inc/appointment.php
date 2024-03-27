<?php
$serverName = "localhost";
$DBUName = "root";
$DBPass = "root";
$DBName = "bayrischerbarber";


$conn = mysqli_connect($serverName, $DBUName, $DBPass, $DBName);
if (!$conn) {
    die("ERROR: " . mysqli_connect_error());
}

if (isset($_POST["senden"])) {
    $Kunde =      $_POST["Kunde"];
    $Email =      $_POST["Email"];
    $Handy =      $_POST["Handy"];
    $datum =     $_POST["datum"];

    $sql = "INSERT INTO termine (Kunde, Email, Handy,datum) 
    VALUES ('$Kunde', '$Email', '$Handy','$datum')";

    if (mysqli_query($conn, $sql)) {
        header("location: ../");
        exit();
    } else {
        echo 'ERR' . mysqli_error($conn);
    }
}