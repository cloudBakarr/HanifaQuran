<?php session_start(); if (isset($_SESSION['user'])){ header("Location: sign-in.php"); } ?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <?php include('partials/head.php'); ?>

        <title>Sign In</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>
    <?php include('partials/header.php'); ?>
    <?php include('partials/nav.php'); ?>


    <!-- Sign In -->
        <div class="user-form-area">
            <div class="container-fluid p-0">
                <div class="row m-0">

                    <div class="col-lg-3 p-0">

                    </div>

                    <div class="col-lg-6 p-0">
                        <div class="user-content">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="user-content-inner">
                                        <div class="top">

                                            <h2>Sign In</h2>
                                        </div>
                                        <form method="post" action="code.php">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <button type="submit" name="login" class="btn common-btn">Sign In</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="bottom">
                                            <p>Didn't create account? <a href="registration.php">Sign Up</a></p>
                                        </div>

                                        <?php
                                        if (isset($_SESSION['error'])){
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>  
        </div>
        <!-- End Sign In -->

    <?php include('partials/footer.php'); ?>
    </body>
</html>