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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Google Icons (Material Design) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/5b14db5f0b.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
        </script>

    <!-- Chessboard JS -->
    <link rel="stylesheet" href="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.css"
        integrity="sha384-q94+BZtLrkL1/ohfjR8c6L+A6qzNH9R2hBLwyoAfu3i/WCvQjzL2RQJ3uNHDISdU" crossorigin="anonymous">
    <script defer src="https://unpkg.com/@chrisoakman/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.js"
        integrity="sha384-8Vi8VHwn3vjQ9eUHUxex3JSN/NFqUg3QbPyX8kWyb93+8AC/pPWTzj+nHtbC5bxD"
        crossorigin="anonymous"></script>

    <!-- Chess JS (slightly modified) -->
    <script defer src="js/chess.js"></script>
    </script>

    <!-- Bootstrap JS -->
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"
        integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
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
</head>

<body class="gradient-custom-3" >
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="landing.php">CHESSLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
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
    <div class="container " >
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
                                    <span id="ShowDepth"></span></p>
                                </div>
                            </div>
                        <div >
                            <div id="myBoard" style=" overflow: hidden; align-content: center;"></div>
                            
                            <div class="row my-3 text-align-center">
                                <div class="col-md-12">
                                    <h2>Advantage</h2>
                                    <p><span id="advantageColor">Neither side</span> has the advantage 
                                        (+<span id="advantageNumber">0</span>).</p>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary progress-bar- progress-bar-animated" 
                                            role="progressbar" aria-valuenow="0" style="width: 50%"
                                            aria-valuemin="-2" aria-valuemax="4000" id='advantageBar'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="accordion" >
                            <div class="card">
                                <div class="card-header" id="settingsHeading">
                                    <h2 class="text-align-center">
                                        <button class="btn btn-header no-outline" data-toggle="collapse"
                                            data-target="#settings" aria-expanded="true" aria-controls="settings">
                                            Difficulty
                                        </button>
                                    </h2>
                                </div>
                            </div>
                            <div id="settings" class="collapse" aria-labelledby="settingsHeading"
                                data-parent="#accordion">
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
            </main>
            
            <br><br><br><br><br>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>