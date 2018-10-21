<?php include 'includes/app.php' ?>

<?php startblock('content') ?>
<?php
$json = file_get_contents("https://spacelaunchnow.me/3.2.0/launch/upcoming");
$data = json_decode($json, true); ?>
<!-- Page Header -->
<header class="masthead" id="home-bg-img" style="background-image: url('img/index-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mx-auto">
                <div class="site-heading">
                    <?php for ($x = 0;
                    $x < count($data["results"]);
                    $x++) { ?>
                        <?php
                        if ($data["results"][$x]['status']['id'] == 1) {
                            $when = $data["results"][$x]["window_start"];
                            $dateCounter0 = explode("T", $when);
                            $dateCounter1 = implode(" ", $dateCounter0);
                            $dateCount = substr($dateCounter1, 0, -1);
                            break;
                        }
                    }
                    ?>
                    <h1 id="timer">00:00:00:00</h1>
                    <span class="subheading"> <?php echo $data["results"][$x]["name"]; ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            <?php for ($x = 0; $x < 5; $x++) { ?>
                <div class="post-preview">

                    <a href="flight.php?id=<?php echo $data["results"][$x]["id"]; ?>">
                        <h2 class="post-title">
                            <?php echo $data["results"][$x]["name"]; ?>
                            <!--                        $data["results"][$x]["window_start"];-->
                        </h2>
                        <h3 class="post-subtitle">
                            <?php $fullDescription = $data["results"][$x]["mission"]["description"];
                            echo $description = substr($fullDescription, 0, 30) . "..."; ?>
                        </h3>
                    </a>

                    <p class="post-meta"><?php $when = $data["results"][$x]["window_start"];
                        $dateCounter0 = explode("T", $when);
                        $dateCounter1 = implode(" ", $dateCounter0);
                        $dateCounter2 = substr($dateCounter1, 0, -1);
                        echo $dateCounter2; ?>
                        <a href="<?php echo $data['results'][$x]['pad']['map_url']; ?>"
                           target="_blank"><?php echo $where = $data["results"][$x]["pad"]["location"]["name"]; ?></a>
                        <br><span>Status: <?php echo $data["results"][$x]['status']['name']; ?></span>
                    </p>
                </div>
            <?php } ?>


            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="upcomingflights.php">See all upcoming flights &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<?php endblock() ?>
<?php startblock('scripts') ?>
<!--<script>picofday();</script>-->
<script>

    // Set the date we're counting down to
    var countDownDate = new Date( "<?php echo "$dateCount"; ?> ").getTime();

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
        document.getElementById("timer").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("timer").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>


<?php endblock() ?>
