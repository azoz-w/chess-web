<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CHESSLY</title>
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styleslanding.css" rel="stylesheet" />

    <style>
        #background {
            width: 100%;
            height: 100%;
            background: url('assets/landing1.png');
        }
    </style>
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="landing.html">CHESSLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="rule.php">RULES</a></li>
                    <?php
                    if(isset($_SESSION['player'])){
                    echo '<li class="nav-item"><a class="nav-link" href="chessboard.php">Chessboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="signout.php">signout</a></li>';
    }
                    else{
                        echo '<li class="nav-item"><a class="nav-link" href="Registration.php">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="signin.php">Log In</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="masthead text-center text-white" id="background">
        <div class="masthead-content">
            <div class="container px-5">

                <h1 class="masthead-heading mb-0" style="color: black;">Guide</h1>
                <h2 class="masthead-subheading mb-0" style="color: black;">WE'RE HERE TO GIVE YOU SOME SECRETS! SHH!</h2>


            </div>
        </div>


    </header>
    <!-- Content section 1-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img src="assets/ICON.png" style="width:300px;height:600px;" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Chess Openings Guide.</h2>
                        <p>Provided below are some of the most famous openings in chess for you, use them to give you a better start and enhance your strategy, 
                            there are many more openings and strategies than the ones provided below we encourage you to research and find the ones that suit you. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 2-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img src="assets/Ruy Lopez.png" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Ruy lopez</h2>
                        <p>The starting position of the Ruy Lopez is reached after 1. e4 e5 2. Nf3 Nc6 3. Bb5.
                            <br/><br/>
                            the Ruy lopez is one of the most popular chess openings at all experience levels.
                             many variations have been extensively studied, 
                             and a wide variety of strategies are available to both White and Black.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 3-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img src="assets/Italian Game.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Italian Game</h2>
                        <p>the Italian Game is reached by the moves 1. e4 e5 2. Nf3 Nc6 3. Bc4.
                            <br/><br/>
                            The Italian Game remained quite popular through the 19th century, 
                            but today has been rplaced by the Ruy Lopez as White's favorite choice on the third move.
                            <br/><br/>
                            the Italian Game often leads to aggressive, 
                            open positions which can be fun to play. This opening is still seen at all experience levels - and is quite popular among club players.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 4-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img src="assets/Sicilian Defence.png" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Sicilian Defense</h2>
                        <p>the Sicilian Defense is reached by the move 1. e4 c5
                            <br/><br/>
                            the Sicilian Defense is currently Black's most popular response to e4, especially at the highest levels of chess.
                            <br/><br/>
                            The Sicilian Defense typically leads to a complex and dangerous struggle where both sides can play for a win.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 5-->
    <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img src="assets/French Defence.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">French Defense</h2>
                        <p>the French Defense is reached by the move 1. e4 e6</p>
                        <br/><br/>
                        The French Defense (1. e4 e6) concedes central space to White and limits the scope of his king's bishop, 
                        but prevents tactics against f7 while allowing Black to have activity on the queenside and counterplay in the center.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 6-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-5"><img src="assets/Queen's Gambit.png" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Queen's Gambit</h2>
                        <p>Queen's Gambit is reached by the moves 1. d4 d5 2. c4.
                            <br/><br/>
                            The Queen's Gambit, marked by the moves 1. d4 d5 2. c4, is one of the oldest known chess openings. 
                            This classical approach "offers" a pawn (in reality, 
                            Black cannot expect to hold onto the pawn if he chooses to capture it) in exchange for a stronger center.
                            <br/><br/>
                            Black has several options, including the Queen's Gambit Accepted, the Queen's Gambit Declined, and the Slav Defense.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>