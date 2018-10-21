<?php
$json=file_get_contents("https://spacelaunchnow.me/3.2.0/launch/upcoming");
$data =  json_decode($json,true);

for ($x=0; $x<count($data["results"]); $x++){

  $name = $data["results"][$x]["rocket"]["configuration"]["name"];
  $rocketPath = $data["results"][$x]["rocket"]["configuration"]["url"];
  $jsonImg=file_get_contents("$rocketPath");
  $dataImg =  json_decode($jsonImg,true);
  $imageUrl = $dataImg["launch_service_provider"]["image_url"]; 
  $nameEdited = str_replace(" ","_",$name);
  if($imageUrl != '')
  {
    echo "<p>$nameEdited  $imageUrl downloaded</p>";
    $input = $imageUrl;
    $output = "img/".$nameEdited.".jpg";
    file_put_contents($output, file_get_contents($input));
  }
}
?>

<!-- GET /3.2.0/launch/upcoming/?count=1/ -->