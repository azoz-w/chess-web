<?php
session_start();
include 'db-config.php';
//$usern = $_POST["username"];
$pass = $_POST["psw"];
$email = $_POST["email"];


$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);

if (mysqli_connect_errno()) {
    die("DB ERROR: " . mysqli_connect_error());
}


$SQL = "SELECT * FROM player WHERE email = '$email'";
$resultQ = mysqli_query($con, $SQL);
if (mysqli_num_rows($resultQ) > 0) {
    header("location:http://localhost/chess-web/Registration.php? error=OPS EMAIL ALREADY EXISTS");
} else {
    $query = "INSERT INTO player (email, pasword) values('$email','$pass')";
    $res = mysqli_query($con, $query);

    //$query = "INSERT INTO player VALUES('" $pass "','" $email ")";

    if ($res == 1) {
        $_SESSION['player'] = $email;
        header("Location:chessboard.php?message=you were successfully registered!");
    } else {
        header("Location:http://localhost/chess-web/Registration.php? err= tests ");
    }
}

mysqli_close($con);
