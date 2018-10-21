<?php include 'includes/app.php' ?>
<?php startblock('style') ?>
    <style>
        #mainNav {
            height: 50px !important;
            background-color: #2b2a26 !important;
            position: relative;
        }
        #mainNav .navbar-toggler{
            color: #fff !important;
        }
        #mainNav .navbar-brand{
            color: #fff !important;
        }

    </style>
<?php endblock() ?>


<?php startblock('content') ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="stream">
                    <div id="left">
                        <iframe src="https://www.youtube.com/embed/wwMDvPCGeE0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <div id="footnotes">
                            <p>NASA TV (originally NASA Select) is the television service of the United States government agency NASA (National Aeronautics and Space Administration). It is broadcast by satellite with a simulcast over the Internet.
                                The network airs a large amount of educational programming, and provides live coverage of an array of manned missions (including the International Space Station), robotic missions, and domestic and international launches.
                            </p>
                            <a href="https://www.nasa.gov/multimedia/nasatv/#public" style="right:0;text-decoration: underline; margin-bottom: 10px;" target="_blank">View schedule</a>
                        </div>
                    </div>
                    <div id="twitter-widget-holder">
                        <a class="twitter-timeline" data-height="900" data-theme="dark" href="https://twitter.com/NASA?ref_src=twsrc%5Etfw">Tweets by NASA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endblock() ?>