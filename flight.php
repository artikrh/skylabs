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

        article {
            padding: 10px;
        }

        article p {
            margin: 0px;
        }
    </style>
<?php endblock() ?>
<?php
$id = $_GET["id"];
$json = file_get_contents("https://spacelaunchnow.me/3.2.0/launch/$id/");
$data = json_decode($json, true);

$name = $data["name"];
$when = $data["window_start"];
$where = $data["pad"]["location"]["name"];
$rocketName = $data["rocket"]["configuration"]["name"];
$rocketService = $data["rocket"]["configuration"]["launch_service_provider"];
$rocketPath = $data["rocket"]["configuration"]["url"];
$pathName = str_replace(" ", "_", $data["rocket"]["configuration"]["name"]);
$pathName = "img/" . $pathName . ".jpg";
$missionName = $data["mission"]["name"];
$type = $data["mission"]["type"];
$description = $data["mission"]["description"];
$orbit = $description = $data["mission"]["orbit"];
$padName = $description = $data["pad"]["name"];
$locationName = $description = $data["pad"]["location"]["name"];

/*$dateCounter1 = str_replace(" ","Z",$when);*/
$dateCounter0 = explode("T", $when);
$dateCounter1 = implode(" ", $dateCounter0);
$dateCounter2 = substr($dateCounter1, 0, -1);

if (!file_exists($pathName)) {
    $pathName = "img/default-img.jpg";
}

?>

<?php startblock('content') ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <article>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="border-right: solid 1px #4e555b">
                            <img src="<?php echo $pathName; ?>" width="100%" height="200px" alt="Flight img">
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <p><strong>Name:</strong> <?php echo $name; ?></p>
                            <p><strong>When:</strong> <?php echo $dateCounter2; ?></p>
                            <p><strong>Where:</strong> <?php echo $where; ?></p>
                            <p><strong>Rocket Name:</strong> <?php echo $rocketName; ?></p>
                            <p><strong>Rocket Service:</strong> <?php echo $rocketService; ?></p>
                            <p><strong>Rocket Path:</strong> <a href="<?php echo $rocketPath; ?>"><?php echo $rocketPath; ?></a></p>
                            <p><strong>Mission:</strong> <?php echo $missionName; ?></p>
                            <p><strong>Mission Type:</strong> <?php echo $type; ?></p>
                            <p><strong>Orbit:</strong> <?php echo $orbit; ?></p>
                            <p><strong>Launch Name:</strong> <?php echo $padName; ?></p>
                            <p><strong>Launch Location:</strong> <?php echo $locationName; ?></p>
                        </div>
                    </div>
                </article>
                <?php
                $json = file_get_contents($data["rocket"]["configuration"]["url"]);
                $data2 = json_decode($json, true);

                $nameLSP = $data2["launch_service_provider"]["name"];
                $administratorLSP = $data2["launch_service_provider"]["administrator"];
                $founding_yearLPS = $data2["launch_service_provider"]["founding_year"];
                $successful_launches = $data2["launch_service_provider"]["successful_launches"];
                $failed_launches = $data2["launch_service_provider"]["failed_launches"];
                $pending_launches = $data2["launch_service_provider"]["pending_launches"];
                $description = $data2["launch_service_provider"]["description"];
                $infoUrl = $data2["launch_service_provider"]["info_url"];
                $resources = $data2["launch_service_provider"]["wiki_url"];
                $logoLPS = $data2["launch_service_provider"]["logo_url"];
                if (empty($logoLPS)) {
                    $logoLPS = "img/logo-default.png";
                }

                ?>
                <article>
                    <h3>Launch Service Provider Info</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="border-right: solid 1px #4e555b">
                            <img src='<?php echo $logoLPS;?>' width='100%' height='200px'>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <p><strong>Launch serice provider:</strong> <?php echo $nameLSP;?></p>
                            <p><strong>CEO:</strong> <?php echo $administratorLSP;?></p>
                            <p><strong>Founding Year:</strong> <?php echo $founding_yearLPS;?></p>
                            <p><strong>Successful Launches:</strong> <?php echo $successful_launches;?></p>
                            <p><strong>Failed Launches:</strong> <?php echo $failed_launches;?></p>
                            <p><strong>Pending Launches:</strong> <?php echo $pending_launches;?></p>
                            <p><strong>Description:</strong> <?php echo $description;?></p>
                            <p><strong>Official Website:</strong> <a href="<?php echo $infoUrl;?>"><?php echo $infoUrl;?></a></p>
                            <p><strong>Resources:</strong> <a href="<?php echo $resources;?>"><?php echo $resources;?></a></p>


                        </div>1
                    </div>
                </article>
            </div>
        </div>
    </div>

<?php endblock() ?>