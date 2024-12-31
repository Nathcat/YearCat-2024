<!DOCTYPE html>
<html>
    <head>
        <title>YearCat - 2024</title>

        <link rel="stylesheet" href="https://nathcat.net/static/css/new-common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>


    <body>
        <div class="content">
            <?php include("header.php"); ?>
            
            <div class="main align-center justify-center">
                <h1>Happy new year, <?php echo $_SESSION["user"]["fullName"]; ?>!</h1>
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
            </div>

            <?php include("footer.php"); ?>
        </div>
    </body>
</html>