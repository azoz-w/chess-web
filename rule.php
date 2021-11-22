<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>
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
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet" />
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
            <a class="navbar-brand" href="landing.php">CHESSLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="guide.php">GUIDE</a></li>
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
               
                    <h1 class="masthead-heading mb-0" style="color: black;">RULES</h1>
                    <h2 class="masthead-subheading mb-0" style="color: black;">WE'RE HERE TO HELP!</h2>
                    
                
            </div>
        </div>


    </header>
       <!-- Content section 1-->
       <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="assets/king'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">King Rules</h2>
                        <p>The king may move one square in any direction, as long as no piece is blocking his path.<br> 
                            The King may not move to a square:
                        <ul>
                            <li>that is occupied by one of his own pieces.</li>
                            <li>where it is checked by an enemy piece</li>
                            <li>adjacent to the enemy King</li>
                        </ul></p>
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
                    <div class="p-5"><img class="img-fluid " src="assets/Queen'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Queen Rules</h2>
                        <p>The Queen can move any number of squares straight or diagonally in any direction as long as no piece is blocking his path</p>
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
                    <div class="p-5"><img class="img-fluid " src="assets/Rock'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Rock Rules</h2>
                        <p>may move in a straight line, any number of squares horizontally or vertically as long as no piece is blocking his path </p>
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
                    <div class="p-5"><img class="img-fluid " src="assets/bishop'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Bishop Rules</h2>
                        <p>may move any number of squares diagonally as long as no piece is blocking his path. <br>
                            Each Bishop can only move on the same colour squares, as it started the game.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content section 5-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="assets/Knight'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Knight Rules</h2>
                        <p>The only piece that can jump over a piece - be it your own, or the opponent’s - is the: <strong>Knight</strong> <br> The Knight can jump to any square in L shape. This is the only piece that can jump over a piece in its way.</p>
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
                    <div class="p-5"><img class="img-fluid " src="assets/Pawn'sMoves.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Pawn Rules</h2>
                        <p>on its first move may move either one or two squares straight forward. <br> After its first move the Pawn may only advance one square at a time. The Pawn captures by moving diagonally one square forward in each direction. The Pawn cannot move or capture backwards!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Content section 7-->
     <section id="scroll">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="assets/CastleMove.jpg" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Castle Rules</h2>
                        <p>Castling in both directions:<br>
                            The King moves two squares in the direction of the Rook, the Rook jumps over the King and lands on the square next to it.<br> 
                            You cannot castle:
                        <ul>
                            <li>if the King is in check</li>
                            <li>if there is a piece between the Rook and the King</li>
                            <li>if the King is in check after castling</li>
                            <li>if the square through which the King passes is under attack</li>
                            <li>if the King or the Rook has already been moved in the game</li>
                        </ul></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Content section 8-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid " src="assets/Ckeck'sMove.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Check Rules</h2>
                            <p> A King is in check, when it is attacked by the opponent’s piece. The King can never be captured.<br>
                                A King must get out of the check immediately: 
                                <ul>
                                    <li>by moving the King</li>
                                    <li>by capturing the piece that gave the check</li>
                                    <li>or by blocking the check with one of the pieces of his team. This is impossible if the check was given by the Knight.</li>
                                    
                                </ul></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!-- Content section 9-->
    <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5"><img class="img-fluid " src="assets/Checkmate'sMove.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">CheckMate Rules</h2>
                        <p>If the King cannot escape from the check, the position is checkmate and the game is over. The player who got checkmated gets zero point and the player giving mate gets one point.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <!-- Content section 10-->
       <section>
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="p-4"><img class="img-fluid " style="width: 480px;" src="assets/StaleMate'sMoves.png" alt="..." /></div>
                </div>
                <div class="col-lg-6 ">
                    <div class="p-5">
                        <h2 class="display-4">Draw Rules</h2>
                        <p> There are three possible results in a chess game. If neither side wins, the game is a draw and both players get half a point. A draw is half as good as a win, but much better, than losing.<br>
                            The different forms a drawn game are the following: 
                            <ul>
                                <li>Stalemate. When a player whose turn it is has no legal moves by any of his/her pieces, but is not in check.</li>
                                <li>Perpetual check & three times repetition</li>
                                <li>Theoretical draw (when there are not sufficient pieces on the board to checkmate)</li>
                                <li>Draw agreed by the players</li>
                                
                            </ul>
                        <br>Stalemate occurs when the player, who has to make the move, has no possible move, and his King is not in check. </p>
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