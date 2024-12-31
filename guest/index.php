<!DOCTYPE html>
<html>
    <head>
        <title>YearCat - 2024</title>
        <?php $__REMOVE_PROFILE_BANNER__ = 1; $__DO_NOT_REQUIRE_AUTHCAT__ = 1;?>

        <?php 
        if (array_key_exists("westway", $_GET)) $__WESTWAY__ = 1;
        ?>

        <link rel="stylesheet" href="https://nathcat.net/static/css/new-common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="icon" href="https://cdn.nathcat.net/cloud/62874f85-c79d-11ef-9aab-067048c6a237.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>


    <body>
        <div class="content">
            <?php include("../header.php"); ?>
            
            <div class="main align-center justify-center">
                <h1>Happy new year<?php if (isset($__WESTWAY__)) echo ", Westway";?>!</h1>

                <img style="width: 10vw; aspect-ratio: 1;" src="https://cdn.nathcat.net/cloud/62874f85-c79d-11ef-9aab-067048c6a237.png">

                <h2>2024 has been one hell of a year!</h2>

                <div class="content-card">
                    <p>
                        First of all, I just wanted to say thank you to everyone of you, by being part of the network you are helping to
                        support its' development and I am forever grateful for that.
                    </p>
                    <p>
                        The network is only a few months old right now so I do apologise that we don't have many statistics available for you, 
                        but truthfully what matters the most is that there are so many people out there willing to support us.
                    </p>
                    <p>
                        The progress we've made in 2024 has been immense, right from my first prototype of AuthCat all the way to NoteCat, 
                        the newest application on the network, all in only a few short months! With all of 2025 ahead of us I know this year
                        is going to bring big things, and I look forward to seeing what they are!
                    </p>
                    <?php
                    if (isset($__WESTWAY__)) echo "<p>And to all of you at Westway, I just wanted to thank you for everything you have done for me! It's hard to say where I would be today if I hadn't started working with all of you lovely people.</p>";
                    ?>
                    <p>
                        Wishing you an incredible year.
                    </p>

                    <div class="row align-center">
                        <div class="small-profile-picture">
                            <img src="https://nathcat.net/static/images/me.jpg">
                        </div>

                        <h3 style="margin-left: 15px;">Nathan Baines - <i>Programming with Passion</i></h3>
                    </div>
                </div>

                <h2 style="text-align: center;">Now, what have we accomplished this year?</h2>
                
                <div class="content-card">
                    <div class="column align-center justify-center">
                        <img width=100 height=100 src="https://data.nathcat.net/sso/AuthCat.png">
                        <h2>AuthCat</h2>
                    </div>
                    <p>
                        29 new people have joined the network this year!
                    </p>
                </div>

                <div class="content-card">
                    <div class="column align-center justify-center">
                        <h2>SudokuCat</h2>
                    </div>
                    <p>
                        As a whole, the network has solved 163 puzzles this year!
                    </p>
                </div>

                <h2 style="text-align: center;">And of course, so much more!</h2>
                
                <p style="text-align: center;">
                    Again, the network is very new so we don't have many statistics available yet, but we are immensely grateful for your support!
                </p>

                <p style="text-align: center;">
                    If you like what you see here please consider signing up to the Nathcat Network with AuthCat <a href="https://data.nathcat.net/sso?newUser">here</a>!
                </p>
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>