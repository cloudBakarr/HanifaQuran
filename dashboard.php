<?php session_start(); if (!isset($_SESSION['user'])){ header("Location: sign-in.php"); } ?>
<!DOCTYPE html>
<html lang="zxx" class="theme-dark" >
    <head>
        <?php include('partials/head.php'); ?>
        <title>Hanifa-Quran-Academy</title>
    </head>
    <body>
       

    <?php include('partials/header.php'); ?>
    <?php include('partials/nav.php'); ?>
    <!-- Banner -->
    <!-- Team -->
    <section class="team-area four pt-100 pb-70">
        <div class="container">
            <div class="section-title">

                <h2>Welcome <?= $_SESSION['user']['first_name'] ?> </h2>
                <a href="logout.php">Logout?</a>
            </div>
        </div>
    </section>
    <div style="min-height: 500px; clear: both">

    </div>
    <?php include('partials/footer.php'); ?>


    </body>
</html>