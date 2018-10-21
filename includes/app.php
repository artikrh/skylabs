<?php require_once 'ti.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php startblock('style') ?>
    <?php endblock() ?>

</head>

<body>

<?php require 'navbar.php' ?>

<body style="background-image: url('img/background2.jpg');background-attachment: scroll;-webkit-background-size: contain;-moz-background-size: contain;-o-background-size: contain;background-size: contain;"">

<?php emptyblock('content') ?>

<!-- Footer -->
<footer style="background-color: #2b2a26">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <img src="img/logo-white.png" alt="logo">
                    </li>
                </ul>
<!--                <p class="copyright text-muted">Copyright &copy; Sky Labs 2018</p>-->
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/clean-blog.min.js"></script>
<script src="js/scripts.js"></script>

<?php startblock('scripts')?>
<?php endblock()?>

</body>

</html>