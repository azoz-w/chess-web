<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['player'])) {
    header('location:http://localhost/chess-web/signin.php.php ?error=you have to login first');
}

?>
<html lang="en">

<head>
    <title>Chessly</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple chess AI.">

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A simple chess Game.">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Google Icons (Material Design) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5b14db5f0b.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
    </script>

    <!-- Chessboard JS -->
    <link rel="stylesheet" href="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.css" integrity="sha384-q94+BZtLrkL1/ohfjR8c6L+A6qzNH9R2hBLwyoAfu3i/WCvQjzL2RQJ3uNHDISdU" crossorigin="anonymous">
    <script defer src="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.js" integrity="sha384-8Vi8VHwn3vjQ9eUHUxex3JSN/NFqUg3QbPyX8kWyb93+8AC/pPWTzj+nHtbC5bxD" crossorigin="anonymous"></script>

    <!-- Chess JS (slightly modified) -->
    <script defer src="js/chess.js"></script>
    </script>

    <!-- Bootstrap JS -->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
    </script>
    <link href="css/styleslanding.css" rel="stylesheet" />
    <!-- Custom JS -->
    <script defer src="js/main.js"></script>
    <style>
        .footer {
            background-color: #030303;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
        }

        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #676767;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5))
        }

        .gradient-custom-4 {
            /* fallback for old browsers */
            background: #676767;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5))
        }
    </style>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #3f3f3f;
            width: 500px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */
        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }

            to {
                top: 0;
                opacity: 1
            }
        }

        /* The Close Button */
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
          
            background-color: #3f3f3f;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
           
            background-color: #3f3f3f;
            color: white;
        }
    </style>
</head>

<body class="gradient-custom-3">
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="landing.php">CHESSLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="rule.php">RULES</a></li>
                    <li class="nav-item"><a class="nav-link" href="guide.php">GUIDE</a></li>
                    <li class="nav-item"><a class="nav-link" href="signout.php">SIGNOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container ">
        <div class="text-center mt-5">
            <main>
                <div class="container my-3" style="width:800px">
                    <div class="row align-items-center ">
                        <div class="col-md-6 ">
                            <br><br><br>

                        </div>
                        <h1 class="text-align-center">Chessly</h1>
                        <div class="row my-3 text-align-center">
                            <div class="col-md-12">
                                <h2>Status</h2>
                                <p><span id="status">No check, checkmate, or draw.</span><br>
                                    <span id="ShowDepth"></span>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div id="myBoard" style=" overflow: hidden; align-content: center;"></div>

                            <div class="row my-3 text-align-center">
                                <div class="col-md-12">
                                    <h2>Advantage</h2>
                                    <p><span id="advantageColor">Neither side</span> has the advantage
                                        (+<span id="advantageNumber">0</span>).</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary progress-bar- progress-bar-animated" role="progressbar" aria-valuenow="0" style="width: 50%" aria-valuemin="-2" aria-valuemax="4000" id='advantageBar'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="settingsHeading">
                                    <h2 class="text-align-center">
                                        <button class="btn btn-header no-outline" data-toggle="collapse" data-target="#settings" aria-expanded="true" aria-controls="settings">
                                            Difficulty
                                        </button>
                                    </h2>
                                </div>
                            </div>
                            <div id="settings" class="collapse" aria-labelledby="settingsHeading" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="form-group">
                                            <label for="search-depth">Opponent Difficulty:</label>
                                            <select id="search-depth">
                                                <option value="1">easy</option>
                                                <option value="2">medium</option>
                                                <option value="3" selected>hard</option>

                                            </select>
                                        </div>
                                    </div>

                                    <!--<div class="row align-items-center justify-content-center">
                                        <div class="form-group">
                                            <input type="checkbox" id="showHint" name="showHint" value="showHint">
                                            <label for="showHint">Show Suggested Move (White)</label>
                                        </div>
                                    </div>-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- this is the pop up-->





            </main>

            <br><br><br><br><br>
        </div>
    </div>
    <style>
        .gradient-custom-3 {
            /* fallback for old browsers */
            background: #676767;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5))
        }
        </style> 
    <?php
    require 'db-config.php';
    $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
    if (mysqli_connect_errno()) {
        die("error connect to database" . mysqli_connect_error());
    }


    $query = "SELECT `newsletter` FROM `player` WHERE `email` = '" . $_SESSION['player'] . "'";
    $res = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($res)) {
        if ($row['newsletter'] == 0) {
            echo '<div id="myModal" class="modal">

            <!-- Modal content -->
            <br><br><br><br><br>
            <div class="modal-content" >
                <div class="modal-header"style="padding-left: 29%;">
                    <h2 >NEWSLETTER</h2>
                    <span class="close" style="padding-right:5%">&times;</span>
    
                </div>
                <div class="modal-body" style="text-align: center;background: linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5))">
                <img  src="assets/newsletter-icon.png" alt="">
                <br><br>
                <h5 style="padding-left: 15%; padding-right: 15%">Subscribe to our newsletter and stay up to date on every thing new about chess!</h5>
                    <p></p>
                </div>
                <div class="modal-footer" style="padding-right: 18%;">
                <a class="btn btn-primary btn-xl rounded-pill " href="addToNewsletter.php"
                style="background: #676767;background: linear-gradient(to right, rgba(103, 103, 103, 0.5), rgba(143, 211, 244, 0.5))">Join our Newsletter!</a>
                <a style="padding-right: 20%;" href="notAdd.php">no, don\'t ask again</a>
                </div>
            </div>
        </div>
    
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");
    
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];
    
            // When the user clicks the button, open the modal 
    
            modal.style.display = "block";
    
    
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
    
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            
        </script>';
        }
    }
    
    if(($_SESSION['email'] === 0)){
        echo " <script>fetch(`http://127.0.0.1:4000/send-welcome-email?to=". $_SESSION['player'] ."`) //query string url
      .catch(err => console.error(err))</script>";
      $_SESSION['email'] = 1;
    }
    
    ?>
    <!-- The Modal -->

    

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>