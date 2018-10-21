<?php include 'includes/app.php' ?>
<?php startblock('style') ?>
    <style>
        #mainNav {
            height: 50px !important;
            background-color: #2b2a26 !important;
            position: relative;
        }

        #mainNav .navbar-toggler {
            color: #fff !important;
        }

        #mainNav .navbar-brand {
            color: #fff !important;
        }

        article{
            border-bottom: solid 1px #0E1621;
        }

        article:last-child{
            border-bottom: none;
        }
        .flight-img {
            float: left;
            padding: 5px;
            position: relative;
        }

        .flight-info {
            width: 100%;
            padding: 0px 10px;
            float: right;
            position: relative;
        }

        .flight-info p {
            margin: 0px !important;
        }
        .btn{
            background-color: #1B5CAC;
            border-radius: 2px;
            color: white;
            text-decoration: none;
            float: right;
        }
        .btn:hover{
            color:white;
        }
    </style>
<?php endblock() ?>
<?php
$json = file_get_contents("https://spacelaunchnow.me/3.2.0/launch/upcoming");
$data = json_decode($json, true); ?>

<?php startblock('content') ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php for ($x = 0;
                           $x < count($data["results"]);
                           $x++) {
                    $id = $data["results"][$x]["id"];
                    $when = $data["results"][$x]["window_start"];
                    $name = $data["results"][$x]["name"];
                    $where = $data["results"][$x]["pad"]["location"]["name"];
                    $fullDescription = $data["results"][$x]["mission"]["description"];
                    $description = substr($fullDescription, 0, 30) . "...";
                    $type = $data["results"][$x]["mission"]["type"];
                    $rocketPath = $data["results"][$x]["rocket"]["configuration"]["url"];
                    $pathName = str_replace(" ", "_", $data["results"][$x]["rocket"]["configuration"]["name"]);
                    $pathName = "img/" . $pathName . ".jpg";
                    $dateCounter0 = explode("T",$when);
                    $dateCounter1 = implode(" ",$dateCounter0);
                    $dateCounter2 = substr($dateCounter1,0,-1);
                    if(!file_exists($pathName)){
                        $pathName="img/default-img.jpg";
                    }
                    ?>
                    
                    <article style="display: flex;padding: 20px 0px">
                        <div class="flight-img float-left">
<!--                            --><?php //echo $pathName;?>
                            <img src="<?php echo $pathName;?>" width="200px" height="200px" alt="flight img">
                        </div>
                        <div class="flight-info float-right">
                            <h4> <?php echo $name; ?></h4>
                            <p><strong>Where:</strong> <?php echo $where ?></p>
                            <p><strong>When:</strong> <?php echo $dateCounter2 ?></p>
                            <p><strong>Misson:</strong> <?php echo $fullDescription;?> </p>
<!--                            <p><strong></strong></p>-->
                            <a class="btn" href=flight.php?id=<?php echo $id;?>>Read More</a>
                        </div>
                    </article>

                <?php } ?>
            </div>
        </div>
    </div>

<?php endblock() ?>