<?php
session_start();
require 'db-config.php';
$psw = "";
$email = "";
if (isset($_POST["email"]) && isset($_POST["psw"])) {
    $email = $_POST["email"];
    $psw = $_POST["psw"];
} else {

    header('location:signin.php? error=please fill the blanks');
}
$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
if (mysqli_connect_errno()) {
    die("error connect to database" . mysqli_connect_error());
}


$query = "SELECT * FROM player WHERE email = '$email' AND pasword = '$psw'";
$res = mysqli_query($con, $query);



if (mysqli_num_rows($res) > 0) {


    $check = "SELECT * FROM player WHERE email = '$email' AND pasword = '$psw'";
    $res1 = mysqli_query($con, $check);

    if (mysqli_num_rows($res1) > 0) {
        $_SESSION['player'] = $email;
        mysqli_close($con);
        header('location:http://localhost/chess-web/chessboard.php');
    }
} else {
    mysqli_close($con);
    header('location:signin.php? error=Wrong username or password');
}
