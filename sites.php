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
        #map {
            height:700px;
            width:100%;
            margin: 25px 0px;
        }
    </style>
<?php endblock() ?>

<?php startblock('content') ?>

    <!-- Main Content -->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                <div id="map"></div>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<?php endblock() ?>
<?php

$json=file_get_contents("https://spacelaunchnow.me/3.2.0/launch/upcoming/");
$data =  json_decode($json,true);
$sites = array();

for ($x=0; $x<count($data["results"]); $x++){

    $sitename = $data["results"][$x]["pad"]["name"];
    $lat = $data["results"][$x]["pad"]["latitude"];
    $long = $data["results"][$x]["pad"]["longitude"];
    $zindex = 1;

    if (strpos($sitename, 'Unknown') === false) {
        array_push($sites, [$sitename, (double)$lat, (double)$long, (int)$zindex]);
    }
}
?>
<?php startblock('scripts')?>
<script>
function initMap() {
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 2,
center: {lat: 0, lng: 0}
});

setMarkers(map);
}

var sites = JSON.parse(JSON.stringify(<?php echo json_encode($sites); ?>));

function setMarkers(map) {
var image = {
//url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/siteflag.png',
size: new google.maps.Size(20, 32), //20x32 icon
origin: new google.maps.Point(0, 0),
anchor: new google.maps.Point(0, 32)
};

var shape = {
coords: [1, 1, 1, 20, 18, 20, 18, 1],
type: 'poly'
};
for (var i = 0; i < sites.length; i++) {
var site = sites[i];
var marker = new google.maps.Marker({
position: {lat: site[1], lng: site[2]},
map: map,
icon: image,
shape: shape,
title: site[0],
zIndex: site[3]
});
}
}
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA48MNkMYLeamM1Omz8x6kOUjHj-CHfO6w&callback=initMap">
</script>
<?php endblock()?>
