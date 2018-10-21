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
    </style>
<?php endblock() ?>
<?php
$id = $_GET["id"];
$json=file_get_contents("https://spacelaunchnow.me/3.2.0/launch/$id/");
$data =  json_decode($json,true);

$name = $data["name"];
$when =$data["window_start"];
$where = $data["pad"]["location"]["name"];
$rocketName = $data["rocket"]["configuration"]["name"];
$rocketService = $data["rocket"]["configuration"]["launch_service_provider"];
$rocketPath = $data["rocket"]["configuration"]["url"];
$pathName = str_replace(" ", "_", $data["rocket"]["configuration"]["name"]);
$pathName = "img/".$pathName.".jpg";
$missionName = $data["mission"]["name"];
$type = $data["mission"]["type"];
$description=$data["mission"]["description"];
$orbit = $description=$data["mission"]["orbit"];
$padName = $description=$data["pad"]["name"];
$locationName = $description=$data["pad"]["location"]["name"];

/*$dateCounter1 = str_replace(" ","Z",$when);*/
$dateCounter0 = explode("T",$when);
$dateCounter1 = implode(" ",$dateCounter0);
$dateCounter2 = substr($dateCounter1,0,-1);

if(!file_exists($pathName)){
    $pathName="img/default.jpg";
}

?>

<?php startblock('content') ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <article>
                    <img src="<?php echo $padName;?>" alt="Flight img">
                </article>
            </div>
        </div>
    </div>

<?php endblock() ?>