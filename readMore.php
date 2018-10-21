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
	$pathName="img/prove.jpg";
}

?>
<body>
<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date( "<?php echo "$dateCounter2"; ?> ").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</body>
<?php
echo "<table>
		<th>Image</th>
		<th>Name</th>
		<th>When</th>
		<th>Where</th>
		<th>Rocket Name</th>
		<th>Rocket Service</th>
		<th>Rocket Path</th>
		<th>Mission Name</th>
		<th>Mission Type</th>
		<th>Orbit</th>
		<th>Lauch Name</th>
		<th>Launch Location</th>
		
		";

    echo "<tr>
        <td><img src='$pathName' width='150px' height='150px'></img></td>
        <td>$name</td>
        <td>$when</td>
        <td>$where</td>
        <td>$rocketName</td>
        <td>$rocketService</td>
        <td>$rocketPath</td>
        <td>$missionName</td>
        <td>$type</td>
        <td>$description</td>
        <td>$orbit</td>
        <td>$padName</td>
        <td>$locationName</td>
      </tr>";

echo "</table>";

$json=file_get_contents($data["rocket"]["configuration"]["url"]);
$data2 =  json_decode($json,true);

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
if(!file_exists($pathName)){
	$logoLPS="img/prove.jpg";
}

echo "<hr><h3>Launch Service Provider Info</h3>
<table>
	<td><img src='$logoLPS' width='150px' height='150px'></img></td>
	<td>$nameLSP</td>	
	<td>$administratorLSP</td>	
	<td>$founding_yearLPS</td>	
	<td>$successful_launches</td>
	<td>$pending_launches</td>
	<td>$description</td>
	<td>$infoUrl</td>
	<td>$resources</td>
</table>";

?>