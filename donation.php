<!------------------ HELLO! | Code & Designed by ----------------------

                                                                                  
88888888ba               88                                                   
88      "8b              88                                                   
88      ,8P              88                                                   
88aaaaaa8P'  ,adPPYYba,  88  888888888  8b,dPPYba,   8b,dPPYba,   ,adPPYba,   
88""""""8b,  ""     `Y8  88       a8P"  88P'    "8a  88P'   "Y8  a8"     "8a  
88      `8b  ,adPPPPP88  88    ,d8P'    88       d8  88          8b       d8  
88      a8P  88,    ,88  88  ,d8"       88b,   ,a8"  88          "8a,   ,a8"  
88888888P"   `"8bbdP"Y8  88  888888888  88`YbbdP"'   88           `"YbbdP"'   
                                        88                                    
                                        88                                    

                                                        Balzpro Development
    -----------------------------------------------------------------------

                Facebook : https://fb.com/balzpro
                 Discord : balzpro#2980
          Template / CSS : Material Bootstrap @ https://mdbootstrap.com/

    ----------------------------------------------------------------------->

<?php

error_reporting(0);

session_start();

$Data = $_SESSION['username'];

if ($Data != "") {
    header('location: ./member_page.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Lost Forever</title>
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>

    <!-- Font Custom -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Rubik&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Comfortaa', cursive;
            font-weight: 100;
        }
    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>

    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>

    </script>
</head>

<body translate="no">


    <!-- Background Music -->
    <iframe src="./music/bg.mp3" type="audio/mp3" allow="autoplay" id="audio" style="display:none"></iframe>

    <div class="container">

        <!-- Stars Effect Started -->
        <?php require_once("./stars.php"); ?>
        <!-- Stars Effect Ended -->

        <!-- Navbar -->
        <?php require_once("./navbar.php"); ?>

        <div class="container">
            <div class="col-lg-md">
                <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                    <div class="card-body">
                        <div class="text-uppercase fw-bold px-5">
                            <h1 class="text-custom">Donation List</h1>
                            <p class="text-custom">If you want to supporting this server, you can donate through Developer via discord.
                            </p>
                            <div class="d-flex justify-content-end">
                                <div class="px-5">
                                    <a href="https://api.whatsapp.com/send/?phone=6281280636169&text=Hi%20owner%2C%0A%0Ai%20want%20donate%20Lost%20Saga%20Forever%20Cash." target="_blank" class="animated-button1 rounded">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        Donate via Whatsapp
                                    </a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-dark border-dark border border-primary">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col">Price</th>
                                            <th scope="col">Cash</th>
                                            <th scope="col">Bonus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        require_once("./config/connect.php");

                                        $query = odbc_exec($Connection, "SELECT * FROM LSForever_List_Cash");
                                        while ($row = odbc_fetch_object($query)) {

                                        ?>

                                            <tr class="text-white">
                                                <td><?= $row->harga; ?></td>
                                                <td><?= $row->cash; ?></td>
                                                <td><?= $row->bonus; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>

        </div>

        <!-- Footer -->
        <?php require_once("./footer.php"); ?>




        <!-- MDB -->
        <!-- JQuery -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript" src="js/rain.js"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
</body>

</html>