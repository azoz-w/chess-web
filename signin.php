<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CHESSLY REGISTRATION </title>
    <link rel="icon" type="image/png" href="assets/favicon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styleslanding.css" rel="stylesheet" />

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

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a class="navbar-brand" href="landing.php">CHESSLY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="rule.php">RULES</a></li>
                    <li class="nav-item"><a class="nav-link" href="guide.php">GUIDE</a></li>
                    <li class="nav-item"><a class="nav-link" href="Registration.php">SIGN UP</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->

    <!-- Content section 1 -->
    <section class="vh-100 bg-image" style="background-image: url('assets/landing1.png');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5" style="color: #676767;">SIGN IN
                                </h2>

                                <form action="checkLogin.php" method="POST">
                                    <?php
                                    if (isset($_GET['message'])) {
                                        echo "<div class='alert alert-success' role='alert' style='text-align:center;'>" . $_GET['message'] . " !</div>";
                                    }
                                    ?>
                                    <?php

                                    if (isset($_GET['error'])) {
                                        echo "<div class='alert alert-danger' role='alert' style='text-align:center;'>" . $_GET['error'] . " !</div>";
                                    }
                                    ?>
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" id="email"/>
                                        <label class="form-label" for="form3Example3cg" style="color: #676767;">Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="psw" id="psw" />
                                        <label class="form-label" for="form3Example4cg" style="color: #676767;">Password</label>
                                    </div>



                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">LOGIN</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Don't Have an account? <a href="Registration.php" class="fw-bold text-body"><u>Register here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content section 2-->


    <!-- Footer-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>