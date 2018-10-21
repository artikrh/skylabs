<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <title>NASA TV</title>
      <style>
         body, html{
         margin:0;
         }
         #twitter-widget-holder{
         top:0;
         right:0;
         position:fixed;
         height: 100%;
         width: 40%;
         }
         #left{
         width: 60%;
         height: 100%;
         background-color: #0E1621;
         position: fixed;
         }
         iframe{
         width: 100%;
         height: 70vh;
         }
         #footnotes{
         margin-left: 1.5em;
         margin-right: 1.7em;
         color:white;
         font-size: 130%;
         text-align: justify;
         }
         a:link {
         color: red;
         }
         a:visited {
         color: green;
         }
         a:hover {
         color: hotpink;
         }
         a:active {
         color: blue;
         }
      </style>
   </head>
   <body>
      <div id="left">
         <iframe src="https://www.youtube.com/embed/wwMDvPCGeE0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
         <div id="footnotes">
            <p>NASA TV (originally NASA Select) is the television service of the United States government agency NASA (National Aeronautics and Space Administration). It is broadcast by satellite with a simulcast over the Internet.
               The network airs a large amount of educational programming, and provides live coverage of an array of manned missions (including the International Space Station), robotic missions, and domestic and international launches.
            </p>
            <a href="https://www.nasa.gov/multimedia/nasatv/#public" style="right:0" target="_blank">View schedule</a>
         </div>
      </div>
      <div id="twitter-widget-holder">
         <a class="twitter-timeline" data-height="900" data-theme="dark" href="https://twitter.com/NASA?ref_src=twsrc%5Etfw">Tweets by NASA</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
   </body>
</html>