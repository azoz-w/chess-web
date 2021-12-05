<?php
session_start();
if (!isset($_SESSION['player'])) {
    header('location:http://localhost/chess-web/signin.php ?error=you have to login first');
}
require 'db-config.php';

$email = $_SESSION['player'];
$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);

if (mysqli_connect_errno()) {
    die("error connect to database" . mysqli_connect_error());
}

$query = "UPDATE `player` SET `newsletter`='-1' WHERE email ='$email'";
$res = mysqli_query($con, $query);
header('location:http://localhost/chess-web/ChessBoard.php ?message=you will no longer be asked!');
?>