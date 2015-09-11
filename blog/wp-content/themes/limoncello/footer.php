</div>
             <footer id="footer" class="blue-bg ">
        <div class="container ">
          <div class="row">
            <!--Slide-->
            <div class="col-sm-9">
              <div id="myCarousel" class="carousel slide margin-top-50 footer-sponsor-slide" data-ride="carousel">
              <!-- Indicators -->
              <!--<ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>-->

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="col-sm-12"><span class="cuprum italic font-size-14">Sponsors:</span></div>
                  <div class="col-sm-3 img-sponsor" style="margin-top:25px;">
                    <img src="../static/img/General/logo-van-dutch-sponsor.png" alt="Chava">
                  </div>
                  <div class="col-sm-3 img-sponsor"><img src="../static/img/General/logo-kik-sponsor.png" alt="Chava"></div>
                </div>

                <div class="item">
                  <div class="col-sm-12"><span class="cuprum italic font-size-14">Sponsors:</span></div>
                  <div class="col-sm-3 img-sponsor" style="margin-top:25px;">
                  <img src="../static/img/General/logo-van-dutch-sponsor.png" alt="Chania"></div>
                  <div class="col-sm-3 img-sponsor"><img src="../static/img/General/logo-kik-sponsor.png" alt="Chania"></div>
                  
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="icon-chevron-thin-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="icon-chevron-thin-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            </div>
            <!--Widget facebook-->
            <div class="col-sm-3">
              <div class="fb-page" data-href="https://www.facebook.com/1SDuranteam?fref=ts" data-height="200px" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/1SDuranteam?fref=ts"><a href="https://www.facebook.com/1SDuranteam?fref=ts">Chava Duran</a></blockquote></div></div>
            </div>
            <div class="col-sm-12 text-center ">
              <hr>
              <p class="cuprum italic font-size-14 margin-top-10">Copyright 2015. Salvador Duran. Todos los derechos reservados</p>
            </div>
          </div>
        </div>
       <!-- <div class="col-sm-12 border-footer-sponsors"></div>
        <div class="container">
          <div class="row">
          <div class="col-sm-3 text-center logo"> 
            <a href="index.php"><img class="margin-top-20 margin-bottom-20 img-responsive" src="../static/img/General/logo.png" width="122" alt="International American School of Cancún"></a>
          </div>
            <div class="col-sm-9 pull-right">
              <div class="row footer-menu" style="position:relative">
                <div class="col-sm-9 pull-sm-offset-1 hidden-xs">
                  <ul  class="list-inline text-left ">
                    <li class="home"><a class="cuprum bold italic" href="../index.php">Home</a></li>
                        <li class="about-us"><a class="cuprum bold italic" href="/blog">index.php</a></li>
                        <li class="admissions"><a class="cuprum bold italic" href="../biografia.php">Biografia</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../sdr.php">SDR</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../multimedia.php">Multimedia</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../enlaces.php">Enlaces</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../calendario.php">Calendario</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../fan.php">Fan Zone</a></li>
                        <li class="student-life"><a class="cuprum bold italic" href="../contacto.php">Contacto</a></li>
                  </ul>                 
                </div>
                <div  class="col-sm-2 icons pull-right">
                  <a><span class="icon-facebook-with-circle"></span></a>
                  <a><span class="icon-twitter-with-circle"></span></a>
                  <a><span class="icon-youtube-with-circle"></span></a>
                  <select class="icon-chat lang cuprum bold">
                  <option value="Esp">Esp</option>
                  <option value="Eng">Eng</option>
                </select>
              </div>
              </div>
            </div>
          </div>
        </div>-->


        </footer>

 <!-- /container -->

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
     http://chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='static/js/jquery-1.11.2.min.js'>\x3C/script>")</script>

<!-- this is where we put our custom functions -->
<!-- don't forget to concatenate and minify if needed -->
<script src="../static/js/bootstrap.min.js"></script>
<script src="../static/js/functions.js"></script>
<script src="../static/js/validate.js"></script>  
<script type="text/javascript" src="static/js/segment-display.js"></script>
    <script type="text/javascript">
      $(function(){
        $(".hovers").hover(function(){
          var des=$(this).attr("id");
          //alert(des);
          $(".title-"+des).removeClass("show-post-opacity");
          $(".hover-"+des).addClass("show-post-opacity");
        },function() {
          var des=$(this).attr("id");

          //alert("sali")
          $(".title-"+des).addClass("show-post-opacity");
          $(".hover-"+des).removeClass("show-post-opacity");
  });
      });   
     </script>
</body>
</html>